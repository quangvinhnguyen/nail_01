<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\Service\ServiceRepositoryInterface;
use DB;
use Exception;

class ServicesController extends BaseController
{
    public function __construct(ServiceRepositoryInterface $ServiceRepository)
    {
    	parent::__construct($ServiceRepository);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->viewRender('services.index', $this->repository->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->viewRender('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('title', 'active');
        $service = $this->repository->create($data);

        return redirect()->action('Admin\ServicesController@index');
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
        $this->compacts['src'] = $this->repository->find($id);

        if (!$this->compacts['src']) {
            return $this->viewRender('services.index');
        }

        return $this->viewRender('services.update');
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
        $data = $request->only('title', 'active');


        DB::beginTransaction();
        try {
            $service = $this->repository->update($id, $data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->action('Admin\ServicesController@index')
                ->with('message-fail', 'Some thing went wrong when update service, please try again');
        }

        return redirect()->action('Admin\ServicesController@index')
            ->with('message-success', 'Update successfully');
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
            return redirect()->action('Admin\ServicesController@index')
                ->with('message-fail', 'Service does not exists');
        }

        DB::beginTransaction();
        try {
            $service = $this->repository->delete($id);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->action('Admin\ServicesController@index')
                ->with('message-fail', 'Some thing went wrong when delete service');
        }

        return redirect()->action('Admin\ServicesController@index')
            ->with('message-success', 'Delete successfully');
    }
}
