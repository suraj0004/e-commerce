@extends('layouts.shop.app')

@push('css')
<style>
    div.single-slider{
        display: none;
    }
</style>
@endpush

@section('content')
<div class="row">
    @foreach ($categories as $category)
    <div class="col-md-3 col-sm-6">
        <figure class="card card-product-grid">

            <div class="img-wrap">
                <img src="{{Storage::disk('dynamic_images')->url($category->image->image)}}">
            </div>
            <figcaption class="info-wrap border-top text-center">
                <a href="#" class="title ">{{$category->name}}</a>
                <div class="price mt-2">Free</div> <!-- price-wrap.// -->
            </figcaption>
		</figure> <!-- card // -->
	</div> <!-- col.// -->
    @endforeach
	{{-- <div class="col-md-3 col-sm-6">
		<figure class="card card-product-grid">
			<div class="img-wrap">
				<img src="bootstrap-ecommerce-html/images/items/2.jpg">
				<span class="topbar">
					<a href="#" class="float-right"><i class="fa fa-heart"></i></a>
				</span>
				<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
			</div>
			<figcaption class="info-wrap border-top">
				<a href="#" class="title">Leather Sleeve - Macbook 13’’</a>
				<div class="price mt-2">$3753.00</div> <!-- price-wrap.// -->
			</figcaption>
		</figure> <!-- card // -->
	</div> <!-- col.// -->
	<div class="col-md-3 col-sm-6">
		<figure class="card card-product-grid">
			<div class="img-wrap">
				<span class="topbar">
					<span class="badge badge-success"> NEW </span>
				</span>
				<img src="bootstrap-ecommerce-html/images/items/3.jpg">
			</div>
			<figcaption class="info-wrap border-top">
				<a href="#" class="title">H&amp;M Polo Shirt Slim Fit</a>
					<div class="price-wrap mt-2">
						<span class="price">$12.99</span>
						<small class="price-old">$14.99</small>
					</div> <!-- price-wrap.// -->
			</figcaption>
		</figure> <!-- card // -->
	</div> <!-- col.// -->
	<div class="col-md-3 col-sm-6">
		<figure class="card card-product-grid">
			<div class="img-wrap">
				<img src="bootstrap-ecommerce-html/images/items/4.jpg">
			</div>
			<figcaption class="info-wrap border-top text-center">
				<small class="text-uppercase font-weight-bolder text-warning">ELECTRONICS</small>
				<p><a href="#" class="title">IKEA Poäng Swivel Chair</a></p>
			</figcaption>
		</figure> <!-- card // -->
	</div> <!-- col.// --> --}}
</div><!-- row.// -->
@endsection

@push('js')

@endpush
