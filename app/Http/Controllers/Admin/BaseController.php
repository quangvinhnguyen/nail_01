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
        return view('admin.index');
        die();
        # code 
    }
}
