<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AbstractController;

class BaseController extends AbstractController
{
    protected $viewPrefix = 'admin';

    /*
    * function index of admin pages
    */
    public function index()
    {
        // exemple 
        echo('admin page');
        die();
        # code 
    }
}
