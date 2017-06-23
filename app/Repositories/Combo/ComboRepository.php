<?php

namespace App\Repositories\Combo;

use App\Models\Combo;
use App\Repositories\BaseRepository;

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

        $combo->products()->attach($data['productIds']);
        $combo->events()->attach($data['eventIds']);

        return $combo;
    }

    public function delete($id)
    {
        if (!is_numeric($id)) {
            throw new Exception();
        }

        $combo = $this->find($id);

        if (!$combo) {
            throw new Exception();
        }

        $combo->products()->detach();
        $combo->events()->detach();
        $combo->images()->delete();
        parent::delete($id);

        return true;
    }
}
