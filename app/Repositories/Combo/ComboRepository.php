<?php

namespace App\Repositories\Combo;

use App\Models\Combo;
use App\Repositories\BaseRepository;
use Exception;

class ComboRepository extends BaseRepository implements ComboRepositoryInterface
{
    public function model()
    {
        return Combo::class;
    }

    public function create($data)
    {
        if (!$data) {
            throw new Exception();
        }

        $combo = parent::create(array_except($data, ['images', 'productIds', 'eventIds']));
        $data['nameImgs'] = $this->uploadImage($data['images'], config('settings.url_upload_img'));
        $imgs = [];

        if (!empty($data['nameImgs'])) {
            foreach ($data['nameImgs'] as $img) {
                $imgs[] = [
                    'url' => $img,
                ];
            }

            $combo->images()->createMany($imgs);
        }

        $data['productIds'] = array_keys(array_count_values($data['productIds']));
        $combo->products()->attach($data['productIds']);

        return $combo;
    }

    public function delete($id)
    {
        if (!is_numeric($id)) {
            throw new Exception('Not found id');
        }

        $combo = $this->find($id);

        if (!$combo) {
            throw new Exception('Not found combo');
        }

        $combo->products()->detach();
        $combo->events()->detach();
        $combo->images()->delete();
        parent::delete($id);

        return true;
    }

    public function update($id, $data)
    {
        if (!$id || empty($data)) {
            throw new Exception('Not found id or empty data');
        }

        $combo = $this->findOrFail($id);

        if (!empty($data['images'])) {
            $images = $this->uploadImage($data['images']);
            $combo->images()->createMany($images);
        }

        if (!empty($data['deleteImgIds'])) {
            $combo->images->whereIn('images.id', $data['deleteImgIds'])->delete();
        }

        // this scope is building.
        // $combo->products()->detach($data['deleteProductIds']);
        // $productIds = array_diff($data['productIds'], $data['deleteProductIds']);

        $combo->fill(array_except($data, ['images', 'deleteImgIds', 'productIds', 'deleteProductIds']));
        $combo->save();

        return $combo;
    }
}
