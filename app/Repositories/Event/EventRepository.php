<?php

namespace App\Repositories\Event;

use App\Models\Event;
use App\Repositories\BaseRepository;

class EventRepository extends BaseRepository implements EventRepositoryInterface
{
    public function model()
    {
        return Event::class;
    }

    public function create($data)
    {
        if (!$data) {
            throw new Exception();
        }

        $event = parent::create(array_except($data, ['images', 'comboIds']));
        $data['nameImgs'] = $this->uploadImage($data['images'], config('settings.url_upload_img'));
        $imgs = [];

        if (!empty($data['nameImgs'])) {
            foreach ($data['nameImgs'] as $img) {
                $imgs[] = [
                    'url' => $img,
                ];
            }

            $event->images()->createMany($imgs);
        }

        $event->combos()->attach($data['comboIds']);

        return $combo;
    }

    public function delete($id)
    {
        if (!is_numeric($id)) {
            throw new Exception();
        }

        $event = $this->find($id);

        if (!$combo) {
            throw new Exception();
        }

        $event->combos()->detach();
        parent::delete($id);

        return true;
    }

}
