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
                                <div class="image">
                                    <img src="https://via.placeholder.com/950x460" alt="#">
                                </div>

                                <div>{{-- main --}}
                                    <div class="blog-detail">
                                        <h2 class="blog-title">Title</h2>
                                    </div>
                                  <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="col-md-2">
                                        <span style="color:#9F9F9F">132 reviews</span>
                                       </div>
                                       <div class="col-md-2">
                                        <span style="color:#00B517">154 orders</span>
                                       </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="col-md-7">
                                          <span style="font-weight:500;font-size:1.5rem;">$815.00</span><span style="color:#9F9F9F">/per kg</span>
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
                                            <button type="button" class="btn">+</button>
                                            <button type="button" class="btn">1</button>
                                            <button type="button" class="btn">-</button>
                                          </div>
                                        </div>
                                        <div class="col-md-8 text-center">
                                            <label style="display: block;">Select Size</label>
                                            <input type="radio">Small
                                            <input type="radio">Medium
                                            <input type="radio">Large
                                        </div>
                                    </div>
                                    <br>
                                    <div class="text-center button">
                                    <a href="#" class="btn btn-primary"> Buy now </a>
	                                <a href="#" class="btn btn-primary">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <hr>
                                {{-- <div class="blog-detail">
                                    <h2 class="blog-title">Title</h2>
                                </div> --}}
                                <div class="share-social">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="content-tags">
                                                <h4>Tags:</h4>
                                                <ul class="tag-inner">
                                                    <li><a href="#">Glass</a></li>
                                                    <li><a href="#">Pant</a></li>
                                                    <li><a href="#">t-shirt</a></li>
                                                    <li><a href="#">swater</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="comments">
                                    <h3 class="comment-title">Comments (3)</h3>
                                    <!-- Single Comment -->
                                    <div class="single-comment">
                                        <img src="https://via.placeholder.com/80x80" alt="#">
                                        <div class="content">
                                            <h4>Alisa harm <span>At 8:59 pm On Feb 28, 2018</span></h4>
                                            <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
                                            <div class="button">
                                                <a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Comment -->
                                    <!-- Single Comment -->
                                    <div class="single-comment left">
                                        <img src="https://via.placeholder.com/80x80" alt="#">
                                        <div class="content">
                                            <h4>john deo <span>Feb 28, 2018 at 8:59 pm</span></h4>
                                            <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
                                            <div class="button">
                                                <a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Comment -->
                                    <!-- Single Comment -->
                                    <div class="single-comment">
                                        <img src="https://via.placeholder.com/80x80" alt="#">
                                        <div class="content">
                                            <h4>megan mart <span>Feb 28, 2018 at 8:59 pm</span></h4>
                                            <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
                                            <div class="button">
                                                <a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Comment -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="reply">
                                    <div class="reply-head">
                                        <h2 class="reply-title">Leave a Comment</h2>
                                        <!-- Comment Form -->
                                        <form class="form" action="#">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Your Name<span>*</span></label>
                                                        <input type="text" name="name" placeholder="" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label>Your Email<span>*</span></label>
                                                        <input type="email" name="email" placeholder="" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Your Message<span>*</span></label>
                                                        <textarea name="message" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group button">
                                                        <button type="submit" class="btn">Post comment</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Comment Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget search">
                            <div class="form">
                                <input type="email" placeholder="Search Here...">
                                <a class="button" href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">Blog Categories</h3>
                            <ul class="categor-list">
                                <li><a href="#">Men's Apparel</a></li>
                                <li><a href="#">Women's Apparel</a></li>
                                <li><a href="#">Bags Collection</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Sun Glasses</a></li>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>
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
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
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
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget newsletter">
                            <h3 class="title">Newslatter</h3>
                            <div class="letter-inner">
                                <h4>Subscribe & get news <br> latest updates.</h4>
                                <div class="form-inner">
                                    <input type="email" placeholder="Enter your email">
                                    <a href="#">Submit</a>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@push('js')
<script src="js/facnybox.min.js"></script>

<script src="js/ytplayer.min.js"></script>
@endpush
