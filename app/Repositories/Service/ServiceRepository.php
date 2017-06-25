<?php

namespace App\Repositories\Service;

use App\Repositories\BaseRepository;
use App\Models\Service;
use Carbon\Carbon;
use Exception;

class ServiceRepository extends BaseRepository implements ServiceRepositoryInterface
{
    public function model()
    {
        return Service::class;
    }

    public function getAll()
    {
        return $this->all();
    }

    public function create($data)
    {
        if (empty($data)) {
            throw new Exception('Not found id');
        }

        $service = parent::create($data);

        return $service;
    }

    public function update($id, $data)
    {
        if (empty($id) || empty($data)) {
            throw new Exception('Not found id or empty data input');
        }

        $service = parent::singleUpdate($id, $data);

        return $service;
    }

    public function delete($id)
    {
        if (!$id) {
            throw new Exception('Not found id');
        }

        $service = $this->find($id);

        if (!$service) {
            throw new Exception('Not found service');
        }

        foreach ($service->products as $product) {
            $product->events()->delete();
        }

        $service->products()->delete();
        $service = parent::delete($id);

        return $service;
    }
}
