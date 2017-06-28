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
        $product->images()->createMany($this->getUrlImages($data['nameImgs']));

        return $product;
    }

    public function update($id, $data)
    {
        if (!$id && !$data) {
            throw new Exception('Not found id or empty data input');
        }

        $product = $this->singleUpdate($id, array_except($data, ['imageDeleteIds', 'images']));
        $imageDeleteIds = [];

        if (!empty($data['imageDeleteIds'])) {
            $imageDeleteIds = explode(',', $data['imageDeleteIds']);

            foreach ($product->images()->whereIn('id', $imageDeleteIds)->get(['url']) as $image) {
                $file_path = str_replace('app', 'public', app_path() . config('settings.url_remove_img')) . $image->url;
                unlink($file_path);
            }

            $product->images()->whereIn('id', $imageDeleteIds)->delete();
        }

        if (!empty($data['nameImgs'])) {
            $upload = $this->uploadImage($data['nameImgs'], config('settings.url_upload_img'));
            $product->images()->createMany($this->getUrlImages($upload));
        }

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

    private function getUrlImages($upload)
    {
        if (!empty($upload) || !is_array($upload)) {
            return [];
        }

        $imgs = [];

        foreach ($upload as $img) {
            $imgs[] = [
                'url' => $img,
            ];
        }

        return $imgs;
    }
}
