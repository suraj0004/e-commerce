@extends('layouts.shop.app')

@push('css')

@endpush

@section('content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Brand Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section class="shop-home-list section">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                    <div class="single-product">
                        <div class="product-img">
                            <a href="{{route('product')}}">
                                <img class="default-img" src="{{ Storage::disk('dynamic_images')->url($product->image->image) }}"  alt="#">
                                <img class="hover-img" src="{{ Storage::disk('dynamic_images')->url($product->gallery[0]->image) }}"  alt="#">
                                <span class="price-dec"> {{$product->categories[0]->name}} </span>
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{route('product')}}">{{$product->name}}</a></h3>
                            <div class="product-price">
                                <span> Rs. {{ $product->price }}</span>
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
