<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\AbstractController;

abstract class BaseController extends AbstractController
{
    protected $viewPrefix = 'users';
}
