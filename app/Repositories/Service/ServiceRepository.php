<?php

namespace App\Repositories\Service;

use App\Models\Service;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Repositories\BaseRepository;

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
}
