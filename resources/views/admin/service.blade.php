@extends('admin.master')

@section('content')
    <title>Services | Admin</title>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Users <small>Some examples to get you started</small></h3>
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
                            <h2>List Services</h2>
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
                            <table id="datatable-responsive"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item )
                                            <tr>
                                                <td>
                                                    <a href="#{{ $item->id }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </td>
                                                <td><button type="button" class="btn btn-success btn-xs">Success</button></td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>View</a>
                                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>Edit</a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</a>
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
