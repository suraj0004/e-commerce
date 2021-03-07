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

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Blog Single Sidebar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


    <section class="blog-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="blog-single-main">
                        <div class="row">
                            <div class="col-12">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner text-center">
                                      <div class="carousel-item active">
                                        <img class=" " src="https://via.placeholder.com/300x300" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class=" " src="https://via.placeholder.com/300x300" alt="Second slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class=" " src="https://via.placeholder.com/300x300" alt="Third slide">
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <i class="fa fa-chevron-left text-primary"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <i class="fa fa-chevron-right text-primary"></i>
                                    </a>
                                  </div>

                                <div>{{-- main --}}
                                    <div class="blog-detail">
                                        <h2 class="blog-title">Title</h2>
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
                                          <span style="font-weight:500;font-size:1.5rem;">$815.00</span><span style="color:#9F9F9F"></span>
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
                                <li><a href="#">Men's Apparel</a></li>
                                <li><a href="#">Women's Apparel</a></li>
                                <li><a href="#">Bags Collection</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Sun Glasses</a></li>
                            </ul>
                        </div>

                        <div class="single-widget side-tags">
                            <h3 class="title">Tags</h3>
                            <ul class="tag">
                                <li><a href="#">business</a></li>
                                <li><a href="#">wordpress</a></li>
                                <li><a href="#">html</a></li>
                                <li><a href="#">multipurpose</a></li>
                                <li><a href="#">education</a></li>
                                <li><a href="#">template</a></li>
                                <li><a href="#">Ecommerce</a></li>
                            </ul>
                        </div>
                        <div class="single-widget recent-post">
                            <h3 class="title">Recently viewed</h3>
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="image">
                                    <img src="https://via.placeholder.com/100x100" alt="#">
                                </div>
                                <div class="content">
                                    <h5><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
                                    <ul class="comment">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>Jan 11, 2020</li>
                                        <li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="image">
                                    <img src="https://via.placeholder.com/100x100" alt="#">
                                </div>
                                <div class="content">
                                    <h5><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
                                    <ul class="comment">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 05, 2019</li>
                                        <li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Single Post -->
                            <div class="single-post">
                                <div class="image">
                                    <img src="https://via.placeholder.com/100x100" alt="#">
                                </div>
                                <div class="content">
                                    <h5><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
                                    <ul class="comment">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>June 09, 2019</li>
                                        <li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Post -->
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
