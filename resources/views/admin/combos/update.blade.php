@extends('admin.master')
@section('content')
   <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="page-title">
                    <div class="title_left"></div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                {{ Form::text('search', '', ['class' => 'form-control', 'placeholder' => 'Search for...']) }}
                                <span class="input-group-btn">
                                    {{ Form::button('go', ['class' => 'btn btn-default']) }}
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
                                <h2>Update combo</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown"
                                            role="button"
                                            aria-expanded="false">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a></li>
                                            <li><a href="#">Settings 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                {{ Form::open([
                                    'class' => 'form-horizontal form-label-left',
                                    'novalidate' => true,
                                    'action' => ['Admin\CombosController@update', $combo->id],
                                    'method' => 'PUT',
                                ]) }}
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{ Form::text('title', $combo->title, [
                                                'class' => 'form-control col-md-7 col-xs-12',
                                                'data-validate-length-range' => '6',
                                                'name' => 'title',
                                                'placeholder' => 'your title',
                                                'required' => 'required',
                                            ]) }}
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Description<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{ Form::textarea('description', $combo->description, [
                                                'class' => 'form-control col-md-7 col-xs-12',
                                                'data-validate-length-range' => '6',
                                                'name' => 'description',
                                                'placeholder' => 'your title',
                                                'required' => 'required',
                                            ]) }}
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Status<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{ Form::select('status', config('settings.status_show'), $combo->status, [
                                                'class' => 'form-control col-md-7 col-xs-12',
                                                'name' => 'status',
                                                'required' => 'required',
                                            ]) }}
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                            Price
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{ Form::number('price', $combo->price, [
                                                'class' => 'form-control col-md-7 col-xs-12',
                                                'name' => 'price',
                                                'placeholder' => '$0.00',
                                                'required' => 'required',
                                            ]) }}
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                            Sale
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{ Form::number('sale', $combo->sale, [
                                                'class' => 'form-control col-md-7 col-xs-12',
                                                'name' => 'sale',
                                                'placeholder' => '0.0%',
                                            ]) }}
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                            Images
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        @php
                                            $images = $combo->images;
                                            $url =[];
                                            $name = [];
                                            $ids = [];

                                            foreach ($images as $image) {
                                                $name[] = $image->url;
                                                $ids[] = $image->id;
                                                $url[] = config('settings.url_upload_img') . $image->url;
                                            }
                                        @endphp
                                        {{ Form::file('nameImgs[]',[
                                            'id' => 'kv-explorer',
                                            'multiple ' => true,
                                            'data' => json_encode($url),
                                            'data-name' => json_encode($name),
                                            'data-ids' => json_encode($ids),
                                        ]) }}
                                    </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                            Products
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="service_id" id="service_id" class="form-control">
                                                <option>Please select product</option>
                                                @foreach ($items as $item)
                                                    <option value="{{ action('Admin\ProductsController@getProductByCategory', ['id' => $item->id]) }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                            <br/>
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="listchooseproduct" data-ids="{{ json_encode($combo->products->pluck('id')) }}">
                                                            @foreach ($combo->products as $product)
                                                                <tr id="{{ $product->id }}">
                                                                    <td align='center'>{{ $product->name }}</td>
                                                                    <td align='center'>
                                                                        {{ Form::button('', [
                                                                            'class' => 'btn-remove btn-danger fa fa-close',
                                                                        ]) }}
                                                                    </td>
                                                                    <input type='hidden' name='productIds[]' value="{{ $product->id }}">
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6" id='listProducts'></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a href="{{ action('Admin\CombosController@index') }}" class="btn btn-primary">Cancel </a>
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
