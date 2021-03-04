@extends('layouts.shop.app')

@push('css')
    <style>
        div.single-slider {
            display: none;
        }

    </style>
@endpush

@section('content')
        <div class="col-md-3 col-sm-6">
           <p class="font-weight-bold text-danger">Total Brands: {{ $counts->count()}}</p>
        </div>
    <div class="row p-3">

        @foreach ($brands as $brand)
            <div class="col-md-3 col-sm-6">
                <figure class="card card-product-grid">
                    <div class="img-wrap"> <img src="{{ Storage::disk('dynamic_images')->url($brand->image->image) }}">
                    </div>
                    <figcaption class="info-wrap border-top">
                        <a href="#" class="title">{{ $brand->name }}</a>
                    </figcaption>
                </figure> <!-- card // -->
            </div> <!-- col.// -->
        @endforeach

    </div><!-- row.// -->
@endsection

@push('js')

@endpush
