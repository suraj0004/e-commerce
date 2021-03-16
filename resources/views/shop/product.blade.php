@extends('layouts.shop.app')

@push('css')
<style>
    div.single-slider{
        display: none;
    }
    div.button_group .btn{
        background-color: white;
        color: black;
    }
    div.button .btn{
        background-color:#3167EB;
        color: white;
        padding:7px;
        border-radius: 4px;
    }
    /* div.button .btn:hover{
        border:1px solid #3167EB;
        background-color:white;
        color: #3167EB;

    } */
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush

@section('content')



    <section class="blog-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="blog-single-main">
                        <div class="row">
                            <div class="col-12">
                                <div id="imageGalleryCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @foreach ($product->gallery as $image)
                                            <li data-target="#imageGalleryCarousel" data-slide-to="{{$loop->index}}" @if($loop->index == 0) class="active" @endif ></li>
                                        @endforeach
                                    </ol>
                                    <div class="carousel-inner text-center">
                                        @foreach ($product->gallery as $image)
                                            <div class="carousel-item @if($loop->index == 0) active  @endif">
                                            <img class=" " src="{{ getImageUrl($image->image) }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#imageGalleryCarousel" role="button" data-slide="prev">
                                        <i class="fa fa-chevron-left text-primary"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#imageGalleryCarousel" role="button" data-slide="next">
                                      <i class="fa fa-chevron-right text-primary"></i>
                                    </a>
                                  </div>

                                <div>{{-- main --}}
                                    <div class="blog-detail">
                                        <h2 class="blog-title"> {{$product->name}} </h2>
                                    </div>
                                  <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star text-primary"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <span style="color:#9F9F9F">132 views</span>
                                       </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="col-md-7">
                                          <span style="font-weight:500;font-size:1.5rem;">Rs. {{moneyFormatIndia($product->price)}}</span><span style="color:#9F9F9F"></span>
                                      </div>
                                  </div>
                                  <br>
                                   <div>
                                        Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.
                                   </div>
                                   <br>
                                   <div class="row">
                                        <div class="col-sm-3"><b>Model#</b></div>
                                        <div class="col-sm-9">Odsy-1000</div>
                                   </div>
                                   <div class="row">
                                    <div class="col-sm-3"><b>Color</b></div>
                                    <div class="col-sm-9">Brown</div>
                                   </div>
                                   <div class="row">
                                     <div class="col-sm-3"><b>Delivery</b></div>
                                     <div class="col-sm-9">Russia, USA, and Europe</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                         <label style="display: block;">Quantity</label>
                                         <div class="btn-group btn-group-sm button_group" role="group">
                                            <button type="button" class="btn" onclick="addQuantity()">+</button>
                                            <button type="button" class="btn" disabled> <span id="quantity_preview">1</span> <input type="hidden" name="quantity" id="quantity" value="1"> </button>
                                            <button type="button" class="btn" onclick="subQuantity()">-</button>
                                          </div>
                                        </div>
                                        @auth
                                        <div class="col-md-4 text-center">
                                            <button type="button" class="btn btn-primary"> Buy now </button>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <button type="button" class="btn btn-primary">Add to cart <i class="fa fa-shopping-cart"></i></button>
                                        </div>
                                        @endauth
                                        @guest
                                            <div class="col-md-8 text-center">
                                                <a href="{{route('login')}}" class="btn btn-primary"> Login </a>
                                            </div>
                                        @endguest
                                    </div>
                                </div>
                                <hr>

                            </div>
                            <div class="col-12">
                                <div class="comments">
                                    <h3 class="comment-title">Reviews (3)</h3>
                                    <!-- Single Comment -->
                                    <div class="single-comment">
                                        <img src="https://via.placeholder.com/80x80" alt="#">
                                        <div class="content">
                                            <h4>Alisa harm
                                                <span >
                                                <i class="fa fa-star text-primary"></i>
                                                <i class="fa fa-star text-primary"></i>
                                                <i class="fa fa-star text-primary"></i>
                                                <i class="fa fa-star text-primary"></i>
                                                <i class="fa fa-star-o"></i>
                                                 </span>
                                            <span>At 8:59 pm On Feb 28, 2018</span></h4>
                                            <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">

                        <div class="single-widget category">
                            <h3 class="title"> Categories</h3>
                            <ul class="categor-list">
                                @foreach ($product->categories as $category)
                                    <li><a href="{{ route('category_product',['slug' => $category->slug]) }}"> {{$category->name}} </a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="single-widget side-tags">
                            <h3 class="title">Tags</h3>
                            <ul class="tag">
                                @foreach ($product->tags as $tag)
                                    <li><a href="#"> {{$tag->name}} </a></li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="single-widget recent-post">
                            <h3 class="title">Products you may like</h3>
                            @foreach ($similar_products as $product)
                               <a href="{{ route('single_product',['slug' => $product->slug ]) }}">
                                <div class="single-post">
                                    <div class="image">
                                        <img src="{{ getImageUrl($product->image->image) }}" alt="#">
                                    </div>
                                    <div class="content">
                                        <h5>{{ $product->name }}</h5>
                                        <div>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                               </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@push('js')
<script src="js/facnybox.min.js"></script>

<script src="js/ytplayer.min.js"></script>
<script>
    function addQuantity() {
        var quantity = document.getElementById("quantity");
        quantity.value = Number(quantity.value) + 1;
        document.getElementById("quantity_preview").innerHTML = quantity.value;
    }
    function subQuantity() {
        var quantity = document.getElementById("quantity");
        if( Number(quantity.value) > 1){
            quantity.value = Number(quantity.value) - 1;
        }
        document.getElementById("quantity_preview").innerHTML = quantity.value;
    }
</script>
@endpush
