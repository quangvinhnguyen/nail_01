<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AbstractController;

class BaseController extends AbstractController
{
    protected $viewPrefix = 'admin';

    public function index()
    {
        dd('ts day');
    }
}
