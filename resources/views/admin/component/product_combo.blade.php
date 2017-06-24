<div class="row">
          @foreach ($products as $product)
        	<div class="col-xs-12 col-sm-6 col-md-3">
            <div class="col-item">
                <div class="post-img-content">
                    {{ Html::image(config('settings.url_upload_img') . $product->images->first()->url,null,['class' => 'img-responsive',])}}
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-md-6">
                            <h5>{{ $product->name }}</h5>
                        </div>
                    </div>
                    <div class="separator clear-left">
                        {{-- <p class="btn-add" >
                            <i class="fa fa-shopping-cart" ></i>Add</a></p> --}}
                            <button type="button" class="btn-add fa fa fa-exchange" id="btn_product_get" value="{{ $product }}"> Add</button>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
