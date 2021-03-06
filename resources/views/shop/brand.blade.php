@extends('layouts.shop.app')

@push('css')
    <style>
        div.single-slider {
            display: none;
        }

    </style>
@endpush

@section('content')

    <div class="row p-3">

        @foreach ($brands as $brand)
            <div class="col-md-3 col-sm-6">
                <figure class="card card-product-grid">
                    @if ($brand->products->count() > 0)
                        <p class="font-weight-bold text-danger">Total Products:{{ $brand->name }}
                            {{ $brand->products->count() }}
                        </p>
                        @else
                        <p class="font-weight-bold text-danger">Total Products:No Products</p>
                    @endif
                    <div class="img-wrap"> <img src="{{ Storage::disk('dynamic_images')->url($brand->image->image) }}">
                    </div>
                    <figcaption class="info-wrap border-top">
                        <a href="{{asset('product')}}" class="title">{{ $brand->name }}</a>
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col.// -->
        @endforeach

    </div><!-- row.// -->
@endsection

@push('js')

@endpush
