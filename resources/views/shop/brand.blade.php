@extends('layouts.shop.app')

@push('css')
    <style>
        div.single-slider {
            display: none;
        }

    </style>
@endpush

@section('content')

<section class="shop-home-list section">
    <div class="container">
        <div class="row">

            @foreach ($brands as $brand)
            <div class="col-md-4" >
                <div class="single-list" style="height: 300px;">
                    <div class="row p-2">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="list-image overlay">
                                <img src="{{ Storage::disk('dynamic_images')->url($brand->image->image) }}" height="150" width="150" alt="#">
                                <a href="{{route('brand_product',['brand_id' =>$brand->id ])}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 no-padding">
                            <div class="content">
                                <h6 class="title">{{ $brand->name }}</h6>
                                <p class="price with-discount"> Products ( {{ $brand->products->count() }} ) </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection

@push('js')

@endpush
