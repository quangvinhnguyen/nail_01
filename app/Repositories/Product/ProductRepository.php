<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Exception;

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
            throw new Exception('Not found id or empty data input');
        }

        $product = $this->singleUpdate($id, $data);

        return $product;
    }

    public function delete($id)
    {
        if (!$id) {
            throw new Exception('Not found id');
        }

        $product = parent::delete($id);

        return $product;
    }
}
