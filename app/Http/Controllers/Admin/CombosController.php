<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\Combo\ComboRepositoryInterface;
use DB;
use Exception;
use Log;

class CombosController extends BaseController
{
    public function __construct(ComboRepositoryInterface $comboRepository)
    {
        parent::__construct($comboRepository);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->viewRender('combos.index', $this->repository->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->viewRender('combos.create');
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
            'title',
            'description',
            'status',
            'price',
            'sale',
            'images',
            'productIds',
            'eventIds'
        );

        DB::beginTransaction();
        try {
            $this->repository->create($data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->action('Admin\CombosController@index')
                ->with('messages-fail', 'Some thing went wrong when create combo, please try again');
        }

        return redirect()->action('Admin\CombosController@index')
            ->with('messages-success', 'Delete successfully');
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
            return redirect()->action('Admin\CombosController@index')
                ->with('messages-fail', 'Combo does not exists, please try again');
        }

        DB::beginTransaction();
        try {
            $this->repository->delete($id);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->action('Admin\CombosController@index')
                ->with('messages-fail', 'Some thing went wrong when delete combo, please try again');
        }

        return redirect()->action('Admin\CombosController@index')
            ->with('messages-success', 'Delete successfully');
    }
}
