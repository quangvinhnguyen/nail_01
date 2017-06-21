<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;


class EventController extends BaseController
{
    //  public function __construct(EventRepositoryInterface $eventRepository)
    // {
    // 	parent::__construct($eventRepository);
    // }

    public function about()
    {
        return $this->viewRender('pages.about');
    }
}
