<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\Service\ServiceRepositoryInterface;

class ServicesController extends BaseController
{
    public function __construct(ServiceRepositoryInterface $ServiceRepository)
    {
    	parent::__construct($ServiceRepository);
    }

    public function index()
    {
    	return $this->viewRender('service', $this->repository->all());
    }
}