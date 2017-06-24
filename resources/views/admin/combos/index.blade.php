@extends('admin.master')
@section('content')
    <title>Combos | Admin</title>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    {{-- <h3>Users <small>Some examples to get you started</small></h3> --}}
                </div>
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
                            <h2>List Combos</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                            <a href="{{ action('Admin\CombosController@create') }}"
                                class="btn btn-round btn-default">
                                Add new
                            </a>
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Sale</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($data as $p)
                                            <tr>
                                                <td>
                                                    <a href="#{{ $p->id }}">
                                                        {{ $p->name }}
                                                    </a>
                                                </td>
                                                <td>{{ $p->price }}</td>
                                                <td>{{ $p->status }}</td>
                                                <td>{{ $p->sale ? 'Is Sale' : 'N/A' }}</td>
                                                <td>
                                                    <a href="{{ action('Admin\CombosController@edit', $p->id) }}" class="btn btn-info btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                        Edit
                                                    </a>
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'action' => ['Admin\CombosController@destroy', $p->id],
                                                    ]) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs fa fa-pencil ']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
