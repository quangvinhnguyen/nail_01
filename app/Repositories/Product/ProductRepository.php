<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Exception;
use Log;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function model()
    {
        return Product::class;
    }

    public function create($data)
    {
        if (!$data) {
            throw new Exception();
        }

        if (!$data) {
            throw new Exception('Inputs is empty');
        }

        $data['nameImgs'] = $this->uploadImage($data['nameImgs'], config('settings.url_upload_img'));
        $inputs = array_except($data, ['nameImgs']);
        $product = parent::create($inputs);
        $imgs = [];

        if (!empty($data['nameImgs'])) {
            foreach ($data['nameImgs'] as $img) {
                $imgs[] = [
                    'url' => $img,
                ];
            }

            $product->images()->createMany($imgs);
        }

        return $product;
    }

    public function update($id, $data)
    {
        if (!$id && !$data) {
            throw new Exception();
        }

        try {
            $service = $this->singleUpdate($id, $data);
        } catch (Exception $e) {
            Log::errors();

            throw new Exception($e);
        }

        return $service;
    }

    public function delete($id)
    {
        if (!$id) {
            throw new Exception();
        }

        try {
            $service = parent::delete($id);
        } catch (Exception $e) {
            Log::errors();

            throw new Exception($e);
        }

        return $service;
    }
}
