<div>
    @foreach ($products as $product)
        <div>
            {{ $product->id }}
        </div>
        <div>
            {{ $product->name }}
        </div>
        <div>
            {{ Html::image(config('settings.url_upload_img') . $product->images->first()->url) }}
        </div>
    @endforeach
</div>
