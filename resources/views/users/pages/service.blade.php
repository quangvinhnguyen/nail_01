@extends('users.master')
@section('content')
 <div class="container">
    <!-- Docs nav
    ================================================== -->
    <div class="row">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                @foreach($items as $item )
                    <li>
                        <a href="#{{ $item->id }}">
                            <i class="icon-chevron-right"></i> {{ $item->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="span9">
            <!-- Global Bootstrap settings
            ================================================== -->
            @foreach($items as $item )
                <section id="{{ $item->id }}">
                <h1>{{ $item->title }}</h1>
                    @foreach($item->products as $product)
                        <div class="span9" id="divMain">
                            </br>
                            <a>
                                <img src="images/circle.jpg" class="img-circle pull-left" style="margin:5px 15px 10px;" alt="" />
                            </a>
                           <h3> {{ $product->name }}</h3>
                            <a class="price dt-sc-button small">  </a>
                            <button type="button" class="btn btn-primary">${{ $product->price }}</button>
                        </div>
                    @endforeach
                </section>
                <hr class="bs-docs-separator">
            @endforeach
        </div>
    </div>
</div>
@endsection
