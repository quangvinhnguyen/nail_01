<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\Event\EventRepositoryInterface;
use DB;
use Exception;
use Log;

class EventsController extends BaseController
{
    public function __construct(EventRepositoryInterface $eventRepository)
    {
        parent::__construct($eventRepository);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->viewRender('events.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->viewRender('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(
            'tag',
            'title',
            'description',
            'status',
            'deadline',
            'images',
            'comboIds'
        );

        DB::beginTransaction();
        try {
            $this->repository->create($data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->action('Admin\EventsController@index')
                ->with('message-fail', 'Some thing went wrong when create event, please try again');
        }

        return redirect()->action('Admin\EventsController@index')
            ->with('message-success', 'Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!is_numeric($id)) {
            return redirect()->action('Admin\EventsController@index')
                ->with('message-fail', 'The event does not exists');
        }

        DB::beginTransaction();
        try {
            $this->repository->delete($id);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->action('Admin\EventsController@index')
                ->with('message-fail', 'Some thing went wrong when delete event, please try again');
        }

        return redirect()->action('Admin\EventsController@index')
            ->with('message-success', 'Delete successfully');
    }
}
