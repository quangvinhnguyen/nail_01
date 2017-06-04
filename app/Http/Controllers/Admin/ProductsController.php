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
            'title',
            'active',
        ]);

        $service = $this->repository->create($data);

        return redirect()->action('Admin\ProductController@index');
    }
    
    public function edit($id)
    {
        $this->compacts['src'] = $this->repository->find($id); 

        return $this->viewRender('Product.update');
    }
    
    public function update($id,Request $request)
    {
       $data = $request->only([
            'title',
            'active',
       ]);
       $service = $this->repository->update($id,$data);

       return redirect()->action('Admin\ProductController@index');
    }

    public function destroy($id)
    {
        $service = $this->repository->delete($id);

        return redirect()->action('Admin\ProductController@index');
    }
}
