<?php

namespace App\Repositories\Service;

use App\Models\Service;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Repositories\BaseRepository;
use DB;
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

    public function create($data = [])
    {
        DB::beginTransaction();
        try {
            $service = parent::create($data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            // Log::error($e);
            throw new Exception($e);
        }

        return $service;
    }

    public function find($id)
    {
       return parent::find($id);
    }
       public function update($id,$data = [])
    {
        DB::beginTransaction();
        try {
            $service = parent::singleUpdate($id,$data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            // Log::error($e);
            throw new Exception($e);
        }

        return $service;
    }
      public function delete($id)
    {  
        DB::beginTransaction();
        try {
            $service = parent::delete($id);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            // Log::error($e);
            throw new Exception($e);
        }

        return $service;
    }
}
