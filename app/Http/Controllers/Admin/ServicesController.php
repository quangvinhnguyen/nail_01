<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\Service\ServiceRepositoryInterface;

class ServicesController extends BaseController
{
    public function __construct(ServiceRepositoryInterface $ServiceRepository)
    {
    	parent::__construct($ServiceRepository);
    }

    public function index()
    {
    	return $this->viewRender('services.index', $this->repository->all());
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
        return $this->viewRender('services.update',$this->compacts['src'] = $this->repository->find($id));
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