<?php

namespace App\Http\Controllers\Admin;
use View;
use Illuminate\Http\Request;
use App\Repositories\Service\ServiceRepositoryInterface;

class ServicesController extends BaseController
{


    public function __construct(
        ServiceRepositoryInterface $ServiceRepository
    ) {
    	parent::__construct($ServiceRepository);
    }

    public function index()
    {
    	return $this->viewRender('services.service', $this->repository->all());
    }

    public function create()
    {
        return view('admin.services.createService');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'title',
            'active',
        ]);

        $service = $this->repository->create($data);

        return redirect()->action('Admin\ServicesController@index');
    }
    
    public function edit($id)
    {
        $service = $this->repository->find($id);
        
        return View::make('admin.services.update')->with('src',$service);
    }
    
    public function update($id,Request $request)
    {
       $data = $request->only([
            'title',
            'active',
       ]);
       $service = $this->repository->update($id,$data);

       return redirect()->action('Admin\ServicesController@index');
    }

    public function destroy($id)
    {
        $service = $this->repository->delete($id);

        return redirect()->action('Admin\ServicesController@index');
    }
}