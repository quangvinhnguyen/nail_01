<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AbstractController;

abstract class BaseController extends AbstractController
{
    protected $viewPrefix = 'admin';
}
