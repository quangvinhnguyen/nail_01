<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepositoryInterface;
use DB;
use Exception;
use Log;

class ProductsController extends BaseController
{
    public function __construct(ProductRepositoryInterface $ProductRepository)
    {
    	parent::__construct($ProductRepository);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->viewRender('products.index', $this->repository->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->viewRender('products.create');
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
            'name',
            'price',
            'status',
            'service_id',
            'description',
            'nameImgs'
        );

        DB::beginTransaction();
        try {
            $product = $this->repository->create($data);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Log::errors($e);

            return redirect()->action('Admin\ProductsController@index')
                ->with(['messages-fail' => 'Error when create product']);
        }

        return redirect()->action('Admin\ProductsController@index');
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
        return $this->viewRender('products.update',  $this->compacts['src'] = $this->repository->find($id));
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
       $data = $request->only(
            'name',
            'price',
            'status',
            'service_id',
            'description'
       );

       $service = $this->repository->update($id,$data);

       return redirect()->action('Admin\ProductsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = $this->repository->delete($id);

        return redirect()->action('Admin\ProductsController@index');
    }
}
