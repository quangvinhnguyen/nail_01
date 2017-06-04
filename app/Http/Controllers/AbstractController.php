<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Activity;
use Auth;
use Exception;
use View;

abstract class AbstractController extends Controller
{
    
    protected $repository;

    protected $repositoryName;

    protected $compacts = []; // biến m muốn truyền qa bên đó bất kể thử gì

    protected $view;

    // protected $pagiante; update later

    protected $viewPrefix;

    protected $user;

    public function __construct($repository = null)
    {
        parent::__construct();

        if ($repository) {
            $this->repositorySetup($repository);
        }

        $this->user = Auth::guard($this->getGuard())->user();
    }

    public function repositorySetup($repository = null)
    {
        $this->repository = $repository;
        $this->repositoryName = strtolower(class_basename($this->repository->getModel()));
    }

    protected function getGuard()
    {
        return property_exists($this, 'guard') ? $this->guard : null;
    }

    public function viewRender($view = null, $compact = null) // hàm tạo view rồi truyền compacts phía trên + cái m muốn modifile lại theo như m thích. có cũng đc k có cũng k sao
    {
        $this->view = $view;

        if (func_num_args() == 1 && is_string($view)) {
            return view($this->viewPrefix . '.' . $this->view, $this->compacts);
        } elseif (!is_string($view)) {
            throw new Exception('Invalit path to view');
        }

        $parma = array_merge($this->compacts, is_array($compact) ? $compact : [$compact]);

        return view($this->viewPrefix . '.' . $this->view, $parma);
    }

    public function activityLog($actions, $message = null)
    {
        Activity::log( $message ?: $this->repositoryName . ':' . $actions );
    }
}
