<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Repositories\Service\ServiceRepository;
use App;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $serviceRepository;

    public function __construct()
    {
        $this->serviceRepository = App::make(ServiceRepository::class);
        View::share('items', $this->serviceRepository->all());
    }
}
