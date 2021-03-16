@extends('layouts.shop.app')

@push('css')
<style>
    div.single-slider{
        display: none;
    }
	.img{
		height: 100px;
		width:23vw;
	}
</style>
@endpush

@section('content')
<section class="shop-home-list section ">
    <div class="container">
        <div class="row">

            @foreach ($categories as $category)
            <div class="col-md-4" >
                <div class="single-list">
                    <div class="row p-2">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="list-image overlay">
                                <img src="{{ Storage::disk('dynamic_images')->url($category->image->image) }}" height="150" width="150" alt="#">
                                <a href="{{route('category_product',['slug' =>$category->slug ])}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 no-padding">
                            <div class="content">
                                <h6 class="title"> <a  href="{{route('category_product',['slug' =>$category->slug ])}}"> {{ $category->name }} </a> </h6>
                                <p class="price with-discount"> <a  href="{{route('category_product',['slug' =>$category->slug ])}}"> Products ( {{ $category->products_count }} ) </a> </p>
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
