<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\AbstractController;

class BaseController extends AbstractController
{
    protected $viewPrefix = 'users';

    public function index()
    {
        return $this->viewRender('pages.home');
    }
}
