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
                            <li class="active"><a href="blog-single.html">Blog Single Sidebar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Blog Single -->
    <section class="blog-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="blog-single-main">
                        <div class="row">
                            {{-- <div class="col-12">
									<div class="image">
										<img src="https://via.placeholder.com/950x460" alt="#">
									</div>
									{{-- <div class="blog-detail">
										<h2 class="blog-title">What are the secrets to start- up success?</h2>
										<div class="blog-meta">
											<span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>Dec 24, 2018</a><a href="#"><i class="fa fa-comments"></i>Comment (15)</a></span>
										</div>
										<div class="content">
											<p>What a crazy time. I have five children in colleghigh school graduates.jpge or pursing post graduate studies  Each of my children attends college far from home, the closest of which is more than 800 miles away. While I miss being with my older children, I know that a college experience can be the source of great growth and experience can be the source of source of great growth and can provide them with even greater in future.</p>
											<blockquote> <i class="fa fa-quote-left"></i> Do what you love to do and give it your very best. Whether it's business or baseball, or the theater, or any field. If you don't love what you're doing and you can't give it your best, get out of it. Life is too short. You'll be an old man before you know it. risus. Ut tincidunt, erat eget feugiat eleifend, eros magna dapibus diam.</blockquote>
											<p>What a crazy time. I have five children in colleghigh school graduates.jpge or pursing post graduate studies  Each of my children attends college far from home, the closest of which is more than 800 miles away. While I miss being with my older children, I know that a college experience can be the source of great growth and experience can be the source of source of great growth and can provide them with even greater in future.</p>
											<p>What a crazy time. I have five children in colleghigh school graduates.jpge or pursing post graduate studies  Each of my children attends college far from home, the closest of which is more than 800 miles away. While I miss being with my older children, I know that a college experience can be the source of great growth and experience can be the source of source of great growth and can provide them with even greater in future.</p>
										</div>
									</div> --}}
                            {{-- <div class="share-social">

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

								</div> --}}
                            @foreach ($brands as $brand)

                                <div class="col-md-3 col-sm-6">
                                <figure class="card card-product-grid">
                                    <div class="img-wrap"> <img src="{{ Storage::disk('dynamic_images')->url($brand->image->image) }}"> </div>
                                    <figcaption class="info-wrap border-top">
                                        <a href="#" class="title">Bell &amp; Ross Nightlum</a>
                                        <div class="price mt-2">$299.00</div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> <!-- card // -->
                            </div> <!-- col.// -->
                             @endforeach
                            {{-- <div class="col-md-3 col-sm-6">
                                <figure class="card card-product-grid">
                                    <div class="img-wrap">
                                        <img src="{{ asset('img/1.jpg') }}">
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
                                        <img src="{{ asset('img/1.jpg') }}">
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
                                        <img src="{{ asset('img/1.jpg') }}">
                                    </div>
                                    <figcaption class="info-wrap border-top text-center">
                                        <small class="text-uppercase font-weight-bolder text-warning">ELECTRONICS</small>
                                        <p><a href="#" class="title">IKEA Poäng Swivel Chair</a></p>
                                    </figcaption>
                                </figure> <!-- card // -->
                            </div> <!-- col.// --> --}}

                            <div class="col-12">
                                <div class="comments">
                                    <h3 class="comment-title">Comments (3)</h3>
                                    <!-- Single Comment -->
                                    <div class="single-comment">
                                        <img src="https://via.placeholder.com/80x80" alt="#">
                                        <div class="content">
                                            <h4>Alisa harm <span>At 8:59 pm On Feb 28, 2018</span></h4>
                                            <p>Enthusiastically leverage existing premium quality vectors with
                                                enterprise-wide innovation collaboration Phosfluorescently leverage others
                                                enterprisee Phosfluorescently leverage.</p>
                                            <div class="button">
                                                <a href="#" class="btn"><i class="fa fa-reply"
                                                        aria-hidden="true"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Comment -->
                                    <!-- Single Comment -->
                                    <div class="single-comment left">
                                        <img src="https://via.placeholder.com/80x80" alt="#">
                                        <div class="content">
                                            <h4>john deo <span>Feb 28, 2018 at 8:59 pm</span></h4>
                                            <p>Enthusiastically leverage existing premium quality vectors with
                                                enterprise-wide innovation collaboration Phosfluorescently leverage others
                                                enterprisee Phosfluorescently leverage.</p>
                                            <div class="button">
                                                <a href="#" class="btn"><i class="fa fa-reply"
                                                        aria-hidden="true"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Comment -->
                                    <!-- Single Comment -->
                                    <div class="single-comment">
                                        <img src="https://via.placeholder.com/80x80" alt="#">
                                        <div class="content">
                                            <h4>megan mart <span>Feb 28, 2018 at 8:59 pm</span></h4>
                                            <p>Enthusiastically leverage existing premium quality vectors with
                                                enterprise-wide innovation collaboration Phosfluorescently leverage others
                                                enterprisee Phosfluorescently leverage.</p>
                                            <div class="button">
                                                <a href="#" class="btn"><i class="fa fa-reply"
                                                        aria-hidden="true"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lead">
                                        <p>Don't see the answer you are looking for?</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalCenter">
                                            Launch demo modal
                                        </button>



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
                        {{-- <div class="single-widget category">
                            <h3 class="title">Blog Categories</h3>
                            <ul class="categor-list">
                                <li><a href="#">Men's Apparel</a></li>
                                <li><a href="#">Women's Apparel</a></li>
                                <li><a href="#">Bags Collection</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Sun Glasses</a></li>
                            </ul>
                        </div> --}}
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        {{-- <div class="single-widget recent-post">
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
                        </div> --}}
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        {{-- <div class="single-widget side-tags">
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
                        </div> --}}
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        {{-- <div class="single-widget newsletter">
                            <h3 class="title">Newslatter</h3>
                            <div class="letter-inner">
                                <h4>Subscribe & get news <br> latest updates.</h4>
                                <div class="form-inner">
                                    <input type="email" placeholder="Enter your email">
                                    <a href="#">Submit</a>
                                </div>
                            </div>
                        </div> --}}
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Post Your question</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <textarea name="textarea" id="textarea"></textarea>
                <span>Your question might be answered by sellers, manufacturers, or customers who bought this product.</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
