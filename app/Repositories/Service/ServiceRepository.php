<?php

namespace App\Repositories\Service;

use App\Repositories\BaseRepository;
use App\Models\Service;
use Carbon\Carbon;
use Log;
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
            throw new Exception();
        }

        try {
            $service = parent::create($data);
        } catch (Exception $e) {
            Log::error($e);

            throw new Exception($e);
        }

        return $service;
    }

    public function find($id)
    {
       return parent::find($id);
    }

    public function update($id, $data)
    {
        if (empty($id) || empty($data)) {
            throw new Exception();
        }

        try {
            $service = parent::singleUpdate($id, $data);
        } catch (Exception $e) {
            Log::error($e);

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
            Log::error($e);

            throw new Exception($e);
        }

        return $service;
    }
}
