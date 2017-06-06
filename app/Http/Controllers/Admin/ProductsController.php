<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductsController extends BaseController
{
     public function __construct(ProductRepositoryInterface $ProductRepository)
    {
    	parent::__construct($ProductRepository);
    }

      public function index()
    {
    	return $this->viewRender('Product.index', $this->repository->all());
    }

    public function create()
    {
        return view('admin.Product.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'price',
            'status',
            'service_id',
            'description',
            'nameimgs',
        ]);  

      dd($request->all());
        \DB::beginTransaction();
        try {
            $product = $this->repository->create($data);
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            \Log::errors($e);

            return redirect()->action('Admin\ProductsController@index')
                ->with(['messages-fail' => 'Error when create product']);
        }

        return redirect()->action('Admin\ProductsController@index');
    }
    
    public function edit($id)
    {
       // dd('toi day');
        return $this->viewRender('Product.update',  $this->compacts['src'] = $this->repository->find($id));
    }
    
    public function update($id,Request $request)
    {
       $data = $request->only([
            'name',
            'price',
            'status',
            'service_id',
            'description',
       ]);

       $service = $this->repository->update($id,$data);

       return redirect()->action('Admin\ProductsController@index');
    }

    public function destroy($id)
    {
        $service = $this->repository->delete($id);

        return redirect()->action('Admin\ProductsController@index');
    }
}
