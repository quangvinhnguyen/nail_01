
  @extends('admin.master')

   @section('content')
   
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add new </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    {{ Form::open([
                        'class' => 'form-horizontal form-label-left',
                        'novalidate' => true,
                        'action' =>['Admin\ProductsController@update',$src->id],
                        'method' => 'put',
                    ])}}
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         {{ Form::text('name',$src->name,[
                             'class' => 'form-control col-md-7 col-xs-12',
                             'data-validate-length-range'=>'6',
                             'name'=>'name', 
                             'placeholder'=>'your product name', 
                             'required' => 'required'])
                         }}
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         {{ Form::number('Price',$src->price,[
                             'class' => 'form-control col-md-7 col-xs-12',
                             'name'=>'price', 
                             'placeholder'=>'$0.00', 
                             'required' => 'required'])
                         }}
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">status <span class="required">*</span>
                        </label>
                        {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                         {{ Form::text('status',$src->status,[
                             'class' => 'form-control col-md-7 col-xs-12',
                             'data-validate-length-range'=>'6',
                             'name'=>'status', 
                             'placeholder'=>'...', 
                             'required' => 'required'])
                         }}
                        </div> --}}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                {{ Form::select('status',config('settings.status_show'), config('settings.status.active'), [
                                    'class' => 'form-control col-md-7 col-xs-12',
                                    'name'=>'status', 
                                    'required' => 'required',
                                ]) }}
                            </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">service
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      
                        {{Form::select('service_id',$items->pluck('title','id'),$src->service_id,[
                         'class' => 'form-control'
                        ])}}
                        </div>
                      </div>
                         <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         {{ Form::textarea('description',$src->description,[
                             'class' => 'form-control col-md-7 col-xs-12',
                             'data-validate-length-range'=>'6',
                             'name'=>'description', 
                             'placeholder'=>'', 
                             'required' => 'required'])
                         }}
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Images <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-xs-12">
                             @include('admin.form_upload') 
                                <script>
                                  {%   var existingfiles = {{$json}}; { %}
                                </script>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="{{ action('Admin\ProductsController@index') }}" class="btn btn-primary">Cancel </a>
                          {{ Form::submit('submit', ['class' => 'btn btn-success','id'=>'send']) }}
                        </div>
                      </div>
                        
                    {{ Form::close() }}
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 <!-- /page content -->

@endsection