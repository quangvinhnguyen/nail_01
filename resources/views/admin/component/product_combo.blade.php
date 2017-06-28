<div class="row">
    @foreach ($products as $product)
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="col-item">
                <div class="post-img-content">
                    {{ Html::image($product->images->first()
                        ? config('settings.url_upload_img') . $product->images->first()->url
                        : config('settings.image_product_default'), null, [
                            'class' => 'img-responsive',
                    ]) }}
                </div>
                <div class="info">
                    <div class="row">
                        <div class="price col-md-6">
                            <h5>{{ $product->name }}</h5>
                        </div>
                    </div>
                    <div class="separator clear-left">
                        {{ Form::button('Add', [
                            'id' => 'btn_product_get',
                            'class' => 'btn-add fa fa fa-exchange',
                            'value' => $product,
                        ]) }}
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @endforeach
    {{ $products->links() }}
</div>
