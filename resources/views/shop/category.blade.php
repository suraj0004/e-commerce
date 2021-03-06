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
<div class="row p-5">
    @foreach ($categories as $category)
    <div class="col-md-3 col-sm-6">
        <figure class="card card-product-grid">
            <div class="img-wrap">
                <img src="{{Storage::disk('dynamic_images')->url($category->image->image)}}" class="img">
            </div>
            <figcaption class="info-wrap border-top text-center">
                <a href="#" class="title ">{{$category->name}}</a>
            </figcaption>
		</figure> <!-- card // -->
	</div> <!-- col.// -->
    @endforeach
</div><!-- row.// -->
@endsection

@push('js')

@endpush
