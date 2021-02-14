@extends('layouts.shop.app')

@section('content')
<div class="container">
    <div class="row">





        <div id="content-wrapper" class="left-column col-12">

            <section id="main">


                <div class="block-category card card-block hidden-sm-down">
                    <div id="category-description" class="text-muted">
                        <div class="dor-category-description">
                            <div class="dor-category-description-inner">
                                <div class="dor-category-description-data">
                                    <p><strong>You will find here all products collections.</strong></p>
                                    <p>This category includes all the basics of your wardrobe and much more:
                                    </p>
                                    <p>cellphone, laptop, headphone, smartwatch, TV!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category-cover">
                        <img src="https://picsum.photos/1200/400?random={{ mt_rand(1, 100) }}" alt="">
                    </div>
                </div>
                <div class="text-xs-center hidden-md-up">
                    <h1 class="h1">Shop</h1>
                </div>


            </section>


            <section id="products">

                <div>

                    <div id="js-product-list-top" class="row products-selection">
                        <div class="clearfix">
                            <div class="dor-display-cate">
                                <div class="show-display-control">
                                    <a href="#" rel="nofollow" class="displayGrid active" data-id="grid"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Grid"><i class="material-icons"></i></a>
                                    <a href="#" rel="nofollow" class="displayList" data-id="list"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="List"><i class="material-icons"></i></a>
                                </div>
                            </div>
                            <div class="col-md-3 hidden-sm-down total-products">
                                <p>There are 25 products.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="row">


                                    <span class="col-sm-4 col-md-5 hidden-sm-down sort-by">Sort by:</span>
                                    <div class="col-sm-8 col-xs-8 col-md-7 products-sort-order dropdown">
                                        <a class="select-title" rel="nofollow" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Relevance <i class="material-icons pull-xs-right"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a rel="nofollow"
                                                href="http://bionic.doradothemes.com/store2/en/3-shop?cate_type=1&amp;order=product.position.asc"
                                                class="select-list current js-search-link">
                                                Relevance
                                            </a>
                                            <a rel="nofollow"
                                                href="http://bionic.doradothemes.com/store2/en/3-shop?cate_type=1&amp;order=product.name.asc"
                                                class="select-list js-search-link">
                                                Name, A to Z
                                            </a>
                                            <a rel="nofollow"
                                                href="http://bionic.doradothemes.com/store2/en/3-shop?cate_type=1&amp;order=product.name.desc"
                                                class="select-list js-search-link">
                                                Name, Z to A
                                            </a>
                                            <a rel="nofollow"
                                                href="http://bionic.doradothemes.com/store2/en/3-shop?cate_type=1&amp;order=product.price.asc"
                                                class="select-list js-search-link">
                                                Price, low to high
                                            </a>
                                            <a rel="nofollow"
                                                href="http://bionic.doradothemes.com/store2/en/3-shop?cate_type=1&amp;order=product.price.desc"
                                                class="select-list js-search-link">
                                                Price, high to low
                                            </a>
                                        </div>
                                    </div>


                                    <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
                                        <button id="search_filter_toggler" class="btn btn-secondary">
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 hidden-md-up text-xs-center showing">
                                Showing 1-25 of 31 item(s)
                            </div>
                        </div>
                    </div>

                </div>


                <div class="hidden-sm-down">
                    <section id="js-active-search-filters" class="hide">

                        <h1 class="h6 active-filter-title">Active filters</h1>


                    </section>

                </div>


                <div>

                    <div id="js-product-list">
                        <div class="products row">


                            <article class="ajax_block_product product-miniature js-product-miniature"
                                data-id-product="9" data-id-product-attribute="49" itemscope=""
                                itemtype="http://schema.org/Product">
                                <div class="product-container">
                                    <div class="dor-display-product-info">
                                        <div class="left-block">
                                            <div class="product-image-container">

                                                <a href="http://bionic.doradothemes.com/store2/en/shop/9-49-apple-macbook-pro-2017.html#/1-storage-16gb/11-color-black"
                                                    class="thumbnail product-thumbnail product_img_link">
                                                    <img class="img-responsive thumbnail-image-1 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/50-home_default/apple-macbook-pro-2017.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/50-home_default/apple-macbook-pro-2017.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/50-large_default/apple-macbook-pro-2017.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/50-home_default/apple-macbook-pro-2017.jpg">
                                                    <img class="img-responsive thumbnail-image-2 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/52-home_default/apple-macbook-pro-2017.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/52-home_default/apple-macbook-pro-2017.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/52-large_default/apple-macbook-pro-2017.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/52-home_default/apple-macbook-pro-2017.jpg">
                                                </a>


                                                <div class="box-items">
                                                    <a class="new-box box-status"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/9-apple-macbook-pro-2017.html">
                                                        <span class="new-label">New</span>
                                                    </a>
                                                    <a class="sale-box box-status"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/9-apple-macbook-pro-2017.html">
                                                        <span class="sale-label">Sale!</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="show-btn-products">

                                                <div class="control-action-buttons">
                                                    <div class="action-button">
                                                        <ul>

                                                            <li class="icon-line-quickview">
                                                                <a href="#"
                                                                    class="quick-view countdown-view-detail"
                                                                    data-link-action="quickview"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="View detail">
                                                                    <i class="material-icons"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <div class="product-cate"><span>Shop</span></div>

                                            <h5 class="product-title-item" itemprop="name"><a
                                                    href="http://bionic.doradothemes.com/store2/en/shop/9-49-apple-macbook-pro-2017.html#/1-storage-16gb/11-color-black"
                                                    class="product-name">Apple Macbook Pro 2017</a></h5>

                                            <div class="review-price-product">
                                                <div class="hook-reviews">

                                                    <div class="comments_note">
                                                        <div class="star_content clearfix">
                                                            <div class="star"><i class="fas fa-star"></i></div>
                                                            <div class="star"><i class="far fa-star"></i></div>
                                                            <div class="star"><i class="fas fa-star-of-life"></i></div>
                                                            <div class="star"><i class="fas fa-star-half-alt"></i></div>
                                                            <div class="star"><i class="fas fa-certificate"></i></div>
                                                        </div>
                                                        <div class="dor-num-reviews hidden">
                                                            <span>0 Review</span>
                                                            <i>/</i><a href="#" class="add-your-review">Add
                                                                Your Review</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dor-show-value-product clearfix">

                                                    <div class="content_price">
                                                        <div class="product-price-and-shipping">


                                                            <span class="regular-price">$1,200.00</span>
                                                            <span class="discount-percentage"
                                                                style="top: 13.75px;">-50%</span>


                                                            <span itemprop="price"
                                                                class="price">$600.00</span>


                                                        </div>
                                                    </div>

                                                    <div class="highlighted-informations hidden-sm-down">

                                                        <div class="variant-links">
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/9-47-apple-macbook-pro-2017.html#/3-storage-64gb/8-color-white"
                                                                class="color" title="White"
                                                                style="background-color: rgb(255, 255, 255); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">White</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/9-46-apple-macbook-pro-2017.html#/3-storage-64gb/11-color-black"
                                                                class="color" title="Black"
                                                                style="background-color: rgb(67, 74, 84); color: rgb(221, 221, 221);"><span
                                                                    class="sr-only">Black</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/9-48-apple-macbook-pro-2017.html#/3-storage-64gb/16-color-yellow"
                                                                class="color" title="Yellow"
                                                                style="background-color: rgb(241, 196, 15); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Yellow</span></a>
                                                            <span class="js-count count"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-description-short hidden"
                                                itemprop="description">
                                                <p>Apple takes a complete product life cycle approach to
                                                    determining our environmental impact.</p>
                                                <p style="font-size:14px;font-weight:400;"><strong>Macbook
                                                        Pro 2017 embodies Apple’s continuing environmental
                                                        progress. It is designed with the following features
                                                        to reduce environmental impact:</strong></p>
                                                <ul>
                                                    <li>Mercury-free</li>
                                                    <li>Arsenic-free display glass</li>
                                                    <li>Brominated flame retardant–free</li>
                                                    <li>PVC-free</li>
                                                    <li>Beryllium-free</li>
                                                    <li>Highly recyclable stainless steel</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <ul class="product-flags hidden">
                                            <li class="on-sale">On sale!</li>
                                            <li class="new" style="top: 1.25px;">New</li>
                                        </ul>

                                    </div>
                                    <div class="product-more-options">
                                        <form action="http://bionic.doradothemes.com/store2/en/cart"
                                            method="post" class="dor-addcart-button">
                                            <div class="add">
                                                <input type="hidden" name="token"
                                                    value="34b11c3ac3b44ecd83062701f9ddcf1b">
                                                <input name="id_product" value="9" type="hidden">
                                                <input type="hidden" name="id_customization" value="0">
                                                <a href="http://bionic.doradothemes.com/store2/en/cart"
                                                    class="cart-button button ajax_add_to_cart_button btn btn-default add-to-cart"
                                                    data-button-action="add-to-cart"
                                                    data-title="Add to cart">
                                                    <i class="material-icons shopping-cart"></i>
                                                    <span class="hidden">Add to cart</span>
                                                </a>
                                            </div>
                                        </form>
                                        <div class="option-quick-add">
                                            <div class="icon-line-wishlist-fel">
                                                <div class="dor-wishlist">
                                                    <a class="addToDorWishlist" href="#"
                                                        onclick="WishlistCart('wishlist_block_list', 'add', jQuery(this).closest('.js-product-miniature').attr('data-id-product'), jQuery(this).closest('.js-product-miniature').attr('data-id-product-attribute'), 1, 0); return false;"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Add to Wishlist">
                                                        <i class="material-icons"></i>
                                                        <span class="wishlist-txt">Wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="icon-line-compare-fel">
                                                <div class="compare">
                                                    <a class="add_to_compare"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/9-apple-macbook-pro-2017.html"
                                                        data-productid="9" data-toggle="tooltip" title=""
                                                        data-original-title="Add compare"><i
                                                            class="fa fa-random"></i><span
                                                            class="compare-button-txt">Compare</span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>




                            <article class="ajax_block_product product-miniature js-product-miniature"
                                data-id-product="10" data-id-product-attribute="98" itemscope=""
                                itemtype="http://schema.org/Product">
                                <div class="product-container">
                                    <div class="dor-display-product-info">
                                        <div class="left-block">
                                            <div class="product-image-container">

                                                <a href="http://bionic.doradothemes.com/store2/en/shop/10-98-dell-xps-15-infinityedge.html#/3-storage-64gb/11-color-black"
                                                    class="thumbnail product-thumbnail product_img_link">
                                                    <img class="img-responsive thumbnail-image-1 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/55-home_default/dell-xps-15-infinityedge.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/55-home_default/dell-xps-15-infinityedge.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/55-large_default/dell-xps-15-infinityedge.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/55-home_default/dell-xps-15-infinityedge.jpg">
                                                    <img class="img-responsive thumbnail-image-2 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/54-home_default/dell-xps-15-infinityedge.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/54-home_default/dell-xps-15-infinityedge.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/54-large_default/dell-xps-15-infinityedge.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/54-home_default/dell-xps-15-infinityedge.jpg">
                                                </a>


                                                <div class="box-items">
                                                    <a class="new-box box-status"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/10-dell-xps-15-infinityedge.html">
                                                        <span class="new-label">New</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="show-btn-products">

                                                <div class="control-action-buttons">
                                                    <div class="action-button">
                                                        <ul>

                                                            <li class="icon-line-quickview">
                                                                <a href="#"
                                                                    class="quick-view countdown-view-detail"
                                                                    data-link-action="quickview"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="View detail">
                                                                    <i class="material-icons"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <div class="product-cate"><span>Shop</span></div>

                                            <h5 class="product-title-item" itemprop="name"><a
                                                    href="http://bionic.doradothemes.com/store2/en/shop/10-98-dell-xps-15-infinityedge.html#/3-storage-64gb/11-color-black"
                                                    class="product-name">Dell XPS 15 InfinityEdge</a></h5>

                                            <div class="review-price-product">
                                                <div class="hook-reviews">

                                                    <div class="comments_note">
                                                        <div class="star_content clearfix">
                                                            <div class="star"><i class="fas fa-star"></i></div>
                                                            <div class="star"><i class="far fa-star"></i></div>
                                                            <div class="star"><i class="fas fa-star-of-life"></i></div>
                                                            <div class="star"><i class="fas fa-star-half-alt"></i></div>
                                                            <div class="star"><i class="fas fa-certificate"></i></div>
                                                        </div>
                                                        <div class="dor-num-reviews hidden">
                                                            <span>0 Review</span>
                                                            <i>/</i><a href="#" class="add-your-review">Add
                                                                Your Review</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dor-show-value-product clearfix">

                                                    <div class="content_price">
                                                        <div class="product-price-and-shipping">


                                                            <span class="regular-price">$1,500.00</span>
                                                            <span class="discount-percentage"
                                                                style="top: 10px;">-30%</span>


                                                            <span itemprop="price"
                                                                class="price">$1,050.00</span>


                                                        </div>
                                                    </div>

                                                    <div class="highlighted-informations hidden-sm-down">

                                                        <div class="variant-links">
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/10-101-dell-xps-15-infinityedge.html#/3-storage-64gb/5-color-grey"
                                                                class="color" title="Grey"
                                                                style="background-color: rgb(170, 178, 189); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Grey</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/10-104-dell-xps-15-infinityedge.html#/3-storage-64gb/8-color-white"
                                                                class="color" title="White"
                                                                style="background-color: rgb(255, 255, 255); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">White</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/10-98-dell-xps-15-infinityedge.html#/3-storage-64gb/11-color-black"
                                                                class="color" title="Black"
                                                                style="background-color: rgb(67, 74, 84); color: rgb(221, 221, 221);"><span
                                                                    class="sr-only">Black</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/10-107-dell-xps-15-infinityedge.html#/3-storage-64gb/24-color-pink"
                                                                class="color" title="Pink"
                                                                style="background-color: rgb(252, 202, 205); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Pink</span></a>
                                                            <span class="js-count count"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-description-short hidden"
                                                itemprop="description">
                                                <p>DoradoThemes takes a complete product life cycle approach
                                                    to determining our environmental impact.</p>
                                                <p style="font-size:14px;font-weight:400;"><strong>Bionic
                                                        embodies DoradoThemes’s continuing environmental
                                                        progress. It is designed with the following features
                                                        to reduce environmental impact:</strong></p>
                                                <ul>
                                                    <li>Mercury-free</li>
                                                    <li>Arsenic-free display glass</li>
                                                    <li>Brominated flame retardant–free</li>
                                                    <li>PVC-free</li>
                                                    <li>Beryllium-free</li>
                                                    <li>Highly recyclable stainless steel</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <ul class="product-flags hidden">
                                            <li class="discount">Reduced price</li>
                                            <li class="new" style="top: -2.5px;">New</li>
                                        </ul>

                                    </div>
                                    <div class="product-more-options">
                                        <form action="http://bionic.doradothemes.com/store2/en/cart"
                                            method="post" class="dor-addcart-button">
                                            <div class="add">
                                                <input type="hidden" name="token"
                                                    value="34b11c3ac3b44ecd83062701f9ddcf1b">
                                                <input name="id_product" value="10" type="hidden">
                                                <input type="hidden" name="id_customization" value="0">
                                                <a href="http://bionic.doradothemes.com/store2/en/cart"
                                                    class="cart-button button ajax_add_to_cart_button btn btn-default add-to-cart"
                                                    data-button-action="add-to-cart"
                                                    data-title="Add to cart">
                                                    <i class="material-icons shopping-cart"></i>
                                                    <span class="hidden">Add to cart</span>
                                                </a>
                                            </div>
                                        </form>
                                        <div class="option-quick-add">
                                            <div class="icon-line-wishlist-fel">
                                                <div class="dor-wishlist">
                                                    <a class="addToDorWishlist" href="#"
                                                        onclick="WishlistCart('wishlist_block_list', 'add', jQuery(this).closest('.js-product-miniature').attr('data-id-product'), jQuery(this).closest('.js-product-miniature').attr('data-id-product-attribute'), 1, 0); return false;"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Add to Wishlist">
                                                        <i class="material-icons"></i>
                                                        <span class="wishlist-txt">Wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="icon-line-compare-fel">
                                                <div class="compare">
                                                    <a class="add_to_compare"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/10-dell-xps-15-infinityedge.html"
                                                        data-productid="10" data-toggle="tooltip" title=""
                                                        data-original-title="Add compare"><i
                                                            class="fa fa-random"></i><span
                                                            class="compare-button-txt">Compare</span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>




                            <article class="ajax_block_product product-miniature js-product-miniature"
                                data-id-product="11" data-id-product-attribute="110" itemscope=""
                                itemtype="http://schema.org/Product">
                                <div class="product-container">
                                    <div class="dor-display-product-info">
                                        <div class="left-block">
                                            <div class="product-image-container">

                                                <a href="http://bionic.doradothemes.com/store2/en/shop/11-110-huawei-watch-s2-classic.html#/3-storage-64gb/11-color-black"
                                                    class="thumbnail product-thumbnail product_img_link">
                                                    <img class="img-responsive thumbnail-image-1 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/58-home_default/huawei-watch-s2-classic.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/58-home_default/huawei-watch-s2-classic.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/58-large_default/huawei-watch-s2-classic.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/58-home_default/huawei-watch-s2-classic.jpg">
                                                    <img class="img-responsive thumbnail-image-2 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/59-home_default/huawei-watch-s2-classic.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/59-home_default/huawei-watch-s2-classic.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/59-large_default/huawei-watch-s2-classic.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/59-home_default/huawei-watch-s2-classic.jpg">
                                                </a>


                                                <div class="box-items">
                                                    <a class="new-box box-status"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/11-huawei-watch-s2-classic.html">
                                                        <span class="new-label">New</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="show-btn-products">

                                                <div class="control-action-buttons">
                                                    <div class="action-button">
                                                        <ul>

                                                            <li class="icon-line-quickview">
                                                                <a href="#"
                                                                    class="quick-view countdown-view-detail"
                                                                    data-link-action="quickview"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="View detail">
                                                                    <i class="material-icons"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <div class="product-cate"><span>Shop</span></div>

                                            <h5 class="product-title-item" itemprop="name"><a
                                                    href="http://bionic.doradothemes.com/store2/en/shop/11-110-huawei-watch-s2-classic.html#/3-storage-64gb/11-color-black"
                                                    class="product-name">Huawei Watch S2 Classic</a></h5>

                                            <div class="review-price-product">
                                                <div class="hook-reviews">

                                                    <div class="comments_note">
                                                        <div class="star_content clearfix">
                                                            <div class="star"><i class="fas fa-star"></i></div>
                                                            <div class="star"><i class="far fa-star"></i></div>
                                                            <div class="star"><i class="fas fa-star-of-life"></i></div>
                                                            <div class="star"><i class="fas fa-star-half-alt"></i></div>
                                                            <div class="star"><i class="fas fa-certificate"></i></div>
                                                        </div>
                                                        <div class="dor-num-reviews hidden">
                                                            <span>0 Review</span>
                                                            <i>/</i><a href="#" class="add-your-review">Add
                                                                Your Review</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dor-show-value-product clearfix">

                                                    <div class="content_price">
                                                        <div class="product-price-and-shipping">


                                                            <span itemprop="price"
                                                                class="price">$560.00</span>


                                                        </div>
                                                    </div>

                                                    <div class="highlighted-informations hidden-sm-down">

                                                        <div class="variant-links">
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/11-113-huawei-watch-s2-classic.html#/3-storage-64gb/5-color-grey"
                                                                class="color" title="Grey"
                                                                style="background-color: rgb(170, 178, 189); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Grey</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/11-116-huawei-watch-s2-classic.html#/3-storage-64gb/8-color-white"
                                                                class="color" title="White"
                                                                style="background-color: rgb(255, 255, 255); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">White</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/11-110-huawei-watch-s2-classic.html#/3-storage-64gb/11-color-black"
                                                                class="color" title="Black"
                                                                style="background-color: rgb(67, 74, 84); color: rgb(221, 221, 221);"><span
                                                                    class="sr-only">Black</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/11-119-huawei-watch-s2-classic.html#/3-storage-64gb/24-color-pink"
                                                                class="color" title="Pink"
                                                                style="background-color: rgb(252, 202, 205); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Pink</span></a>
                                                            <span class="js-count count"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-description-short hidden"
                                                itemprop="description">
                                                <p>Huawei takes a complete product life cycle approach to
                                                    determining our environmental impact.</p>
                                                <p style="font-size:14px;font-weight:400;"><strong>S2
                                                        Classic embodies Huawei’s continuing environmental
                                                        progress. It is designed with the following features
                                                        to reduce environmental impact:</strong></p>
                                                <ul>
                                                    <li>Mercury-free</li>
                                                    <li>Arsenic-free display glass</li>
                                                    <li>Brominated flame retardant–free</li>
                                                    <li>PVC-free</li>
                                                    <li>Beryllium-free</li>
                                                    <li>Highly recyclable stainless steel</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <ul class="product-flags hidden">
                                            <li class="new">New</li>
                                        </ul>

                                    </div>
                                    <div class="product-more-options">
                                        <form action="http://bionic.doradothemes.com/store2/en/cart"
                                            method="post" class="dor-addcart-button">
                                            <div class="add">
                                                <input type="hidden" name="token"
                                                    value="34b11c3ac3b44ecd83062701f9ddcf1b">
                                                <input name="id_product" value="11" type="hidden">
                                                <input type="hidden" name="id_customization" value="0">
                                                <a href="http://bionic.doradothemes.com/store2/en/cart"
                                                    class="cart-button button ajax_add_to_cart_button btn btn-default add-to-cart"
                                                    data-button-action="add-to-cart"
                                                    data-title="Add to cart">
                                                    <i class="material-icons shopping-cart"></i>
                                                    <span class="hidden">Add to cart</span>
                                                </a>
                                            </div>
                                        </form>
                                        <div class="option-quick-add">
                                            <div class="icon-line-wishlist-fel">
                                                <div class="dor-wishlist">
                                                    <a class="addToDorWishlist" href="#"
                                                        onclick="WishlistCart('wishlist_block_list', 'add', jQuery(this).closest('.js-product-miniature').attr('data-id-product'), jQuery(this).closest('.js-product-miniature').attr('data-id-product-attribute'), 1, 0); return false;"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Add to Wishlist">
                                                        <i class="material-icons"></i>
                                                        <span class="wishlist-txt">Wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="icon-line-compare-fel">
                                                <div class="compare">
                                                    <a class="add_to_compare"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/11-huawei-watch-s2-classic.html"
                                                        data-productid="11" data-toggle="tooltip" title=""
                                                        data-original-title="Add compare"><i
                                                            class="fa fa-random"></i><span
                                                            class="compare-button-txt">Compare</span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>




                            <article class="ajax_block_product product-miniature js-product-miniature"
                                data-id-product="12" data-id-product-attribute="122" itemscope=""
                                itemtype="http://schema.org/Product">
                                <div class="product-container">
                                    <div class="dor-display-product-info">
                                        <div class="left-block">
                                            <div class="product-image-container">

                                                <a href="http://bionic.doradothemes.com/store2/en/shop/12-122-google-pixel-2xl-2017.html#/3-storage-64gb/11-color-black"
                                                    class="thumbnail product-thumbnail product_img_link">
                                                    <img class="img-responsive thumbnail-image-1 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/62-home_default/google-pixel-2xl-2017.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/62-home_default/google-pixel-2xl-2017.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/62-large_default/google-pixel-2xl-2017.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/62-home_default/google-pixel-2xl-2017.jpg">
                                                    <img class="img-responsive thumbnail-image-2 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/63-home_default/google-pixel-2xl-2017.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/63-home_default/google-pixel-2xl-2017.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/63-large_default/google-pixel-2xl-2017.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/63-home_default/google-pixel-2xl-2017.jpg">
                                                </a>


                                                <div class="box-items">
                                                    <a class="new-box box-status"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/12-google-pixel-2xl-2017.html">
                                                        <span class="new-label">New</span>
                                                    </a>
                                                    <a class="sale-box box-status"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/12-google-pixel-2xl-2017.html">
                                                        <span class="sale-label">Sale!</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="show-btn-products">

                                                <div class="control-action-buttons">
                                                    <div class="action-button">
                                                        <ul>

                                                            <li class="icon-line-quickview">
                                                                <a href="#"
                                                                    class="quick-view countdown-view-detail"
                                                                    data-link-action="quickview"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="View detail">
                                                                    <i class="material-icons"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <div class="product-cate"><span>Shop</span></div>

                                            <h5 class="product-title-item" itemprop="name"><a
                                                    href="http://bionic.doradothemes.com/store2/en/shop/12-122-google-pixel-2xl-2017.html#/3-storage-64gb/11-color-black"
                                                    class="product-name">Google Pixel 2XL 2017</a></h5>

                                            <div class="review-price-product">
                                                <div class="hook-reviews">

                                                    <div class="comments_note">
                                                        <div class="star_content clearfix">
                                                            <div class="star"><i class="fas fa-star"></i></div>
                                                            <div class="star"><i class="far fa-star"></i></div>
                                                            <div class="star"><i class="fas fa-star-of-life"></i></div>
                                                            <div class="star"><i class="fas fa-star-half-alt"></i></div>
                                                            <div class="star"><i class="fas fa-certificate"></i></div>
                                                        </div>
                                                        <div class="dor-num-reviews hidden">
                                                            <span>0 Review</span>
                                                            <i>/</i><a href="#" class="add-your-review">Add
                                                                Your Review</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dor-show-value-product clearfix">

                                                    <div class="content_price">
                                                        <div class="product-price-and-shipping">


                                                            <span itemprop="price"
                                                                class="price">$1,000.00</span>


                                                        </div>
                                                    </div>

                                                    <div class="highlighted-informations hidden-sm-down">

                                                        <div class="variant-links">
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/12-125-google-pixel-2xl-2017.html#/3-storage-64gb/5-color-grey"
                                                                class="color" title="Grey"
                                                                style="background-color: rgb(170, 178, 189); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Grey</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/12-128-google-pixel-2xl-2017.html#/3-storage-64gb/8-color-white"
                                                                class="color" title="White"
                                                                style="background-color: rgb(255, 255, 255); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">White</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/12-122-google-pixel-2xl-2017.html#/3-storage-64gb/11-color-black"
                                                                class="color" title="Black"
                                                                style="background-color: rgb(67, 74, 84); color: rgb(221, 221, 221);"><span
                                                                    class="sr-only">Black</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/12-131-google-pixel-2xl-2017.html#/3-storage-64gb/24-color-pink"
                                                                class="color" title="Pink"
                                                                style="background-color: rgb(252, 202, 205); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Pink</span></a>
                                                            <span class="js-count count"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-description-short hidden"
                                                itemprop="description">
                                                <p>Google takes a complete product life cycle approach to
                                                    determining our environmental impact.</p>
                                                <p style="font-size:14px;font-weight:400;"><strong>Pixel 2XL
                                                        embodies </strong><strong>Google’s continuing
                                                        environmental progress. It is designed with the
                                                        following features to reduce environmental
                                                        impact:</strong></p>
                                                <ul>
                                                    <li>Mercury-free</li>
                                                    <li>Arsenic-free display glass</li>
                                                    <li>Brominated flame retardant–free</li>
                                                    <li>PVC-free</li>
                                                    <li>Beryllium-free</li>
                                                    <li>Highly recyclable stainless steel</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <ul class="product-flags hidden">
                                            <li class="on-sale">On sale!</li>
                                            <li class="new" style="top: 13.75px;">New</li>
                                        </ul>

                                    </div>
                                    <div class="product-more-options">
                                        <form action="http://bionic.doradothemes.com/store2/en/cart"
                                            method="post" class="dor-addcart-button">
                                            <div class="add">
                                                <input type="hidden" name="token"
                                                    value="34b11c3ac3b44ecd83062701f9ddcf1b">
                                                <input name="id_product" value="12" type="hidden">
                                                <input type="hidden" name="id_customization" value="0">
                                                <a href="http://bionic.doradothemes.com/store2/en/cart"
                                                    class="cart-button button ajax_add_to_cart_button btn btn-default add-to-cart"
                                                    data-button-action="add-to-cart"
                                                    data-title="Add to cart">
                                                    <i class="material-icons shopping-cart"></i>
                                                    <span class="hidden">Add to cart</span>
                                                </a>
                                            </div>
                                        </form>
                                        <div class="option-quick-add">
                                            <div class="icon-line-wishlist-fel">
                                                <div class="dor-wishlist">
                                                    <a class="addToDorWishlist" href="#"
                                                        onclick="WishlistCart('wishlist_block_list', 'add', jQuery(this).closest('.js-product-miniature').attr('data-id-product'), jQuery(this).closest('.js-product-miniature').attr('data-id-product-attribute'), 1, 0); return false;"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Add to Wishlist">
                                                        <i class="material-icons"></i>
                                                        <span class="wishlist-txt">Wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="icon-line-compare-fel">
                                                <div class="compare">
                                                    <a class="add_to_compare"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/12-google-pixel-2xl-2017.html"
                                                        data-productid="12" data-toggle="tooltip" title=""
                                                        data-original-title="Add compare"><i
                                                            class="fa fa-random"></i><span
                                                            class="compare-button-txt">Compare</span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>




                            <article class="ajax_block_product product-miniature js-product-miniature"
                                data-id-product="13" data-id-product-attribute="134" itemscope=""
                                itemtype="http://schema.org/Product">
                                <div class="product-container">
                                    <div class="dor-display-product-info">
                                        <div class="left-block">
                                            <div class="product-image-container">

                                                <a href="http://bionic.doradothemes.com/store2/en/shop/13-134-hp-pavilion-27-all-in-one.html#/3-storage-64gb/11-color-black"
                                                    class="thumbnail product-thumbnail product_img_link">
                                                    <img class="img-responsive thumbnail-image-1 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/65-home_default/hp-pavilion-27-all-in-one.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/65-home_default/hp-pavilion-27-all-in-one.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/65-large_default/hp-pavilion-27-all-in-one.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/65-home_default/hp-pavilion-27-all-in-one.jpg">
                                                    <img class="img-responsive thumbnail-image-2 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/66-home_default/hp-pavilion-27-all-in-one.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/66-home_default/hp-pavilion-27-all-in-one.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/66-large_default/hp-pavilion-27-all-in-one.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/66-home_default/hp-pavilion-27-all-in-one.jpg">
                                                </a>


                                                <div class="box-items">
                                                    <a class="new-box box-status"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/13-hp-pavilion-27-all-in-one.html">
                                                        <span class="new-label">New</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="show-btn-products">

                                                <div class="control-action-buttons">
                                                    <div class="action-button">
                                                        <ul>

                                                            <li class="icon-line-quickview">
                                                                <a href="#"
                                                                    class="quick-view countdown-view-detail"
                                                                    data-link-action="quickview"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="View detail">
                                                                    <i class="material-icons"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <div class="product-cate"><span>Shop</span></div>

                                            <h5 class="product-title-item" itemprop="name"><a
                                                    href="http://bionic.doradothemes.com/store2/en/shop/13-134-hp-pavilion-27-all-in-one.html#/3-storage-64gb/11-color-black"
                                                    class="product-name">HP Pavilion 27 All In One</a></h5>

                                            <div class="review-price-product">
                                                <div class="hook-reviews">

                                                    <div class="comments_note">
                                                        <div class="star_content clearfix">
                                                            <div class="star"><i class="fas fa-star"></i></div>
                                                            <div class="star"><i class="far fa-star"></i></div>
                                                            <div class="star"><i class="fas fa-star-of-life"></i></div>
                                                            <div class="star"><i class="fas fa-star-half-alt"></i></div>
                                                            <div class="star"><i class="fas fa-certificate"></i></div>
                                                        </div>
                                                        <div class="dor-num-reviews hidden">
                                                            <span>0 Review</span>
                                                            <i>/</i><a href="#" class="add-your-review">Add
                                                                Your Review</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dor-show-value-product clearfix">

                                                    <div class="content_price">
                                                        <div class="product-price-and-shipping">


                                                            <span itemprop="price"
                                                                class="price">$1,200.00</span>


                                                        </div>
                                                    </div>

                                                    <div class="highlighted-informations hidden-sm-down">

                                                        <div class="variant-links">
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/13-137-hp-pavilion-27-all-in-one.html#/3-storage-64gb/5-color-grey"
                                                                class="color" title="Grey"
                                                                style="background-color: rgb(170, 178, 189); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Grey</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/13-140-hp-pavilion-27-all-in-one.html#/3-storage-64gb/8-color-white"
                                                                class="color" title="White"
                                                                style="background-color: rgb(255, 255, 255); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">White</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/13-134-hp-pavilion-27-all-in-one.html#/3-storage-64gb/11-color-black"
                                                                class="color" title="Black"
                                                                style="background-color: rgb(67, 74, 84); color: rgb(221, 221, 221);"><span
                                                                    class="sr-only">Black</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/13-143-hp-pavilion-27-all-in-one.html#/3-storage-64gb/24-color-pink"
                                                                class="color" title="Pink"
                                                                style="background-color: rgb(252, 202, 205); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Pink</span></a>
                                                            <span class="js-count count"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-description-short hidden"
                                                itemprop="description">
                                                <p>HP takes a complete product life cycle approach to
                                                    determining our environmental impact.</p>
                                                <p style="font-size:14px;font-weight:400;"><strong>HP
                                                        Pavilion embodies HP’s continuing environmental
                                                        progress. It is designed with the following features
                                                        to reduce environmental impact:</strong></p>
                                                <ul>
                                                    <li>Mercury-free</li>
                                                    <li>Arsenic-free display glass</li>
                                                    <li>Brominated flame retardant–free</li>
                                                    <li>PVC-free</li>
                                                    <li>Beryllium-free</li>
                                                    <li>Highly recyclable stainless steel</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <ul class="product-flags hidden">
                                            <li class="new">New</li>
                                        </ul>

                                    </div>
                                    <div class="product-more-options">
                                        <form action="http://bionic.doradothemes.com/store2/en/cart"
                                            method="post" class="dor-addcart-button">
                                            <div class="add">
                                                <input type="hidden" name="token"
                                                    value="34b11c3ac3b44ecd83062701f9ddcf1b">
                                                <input name="id_product" value="13" type="hidden">
                                                <input type="hidden" name="id_customization" value="0">
                                                <a href="http://bionic.doradothemes.com/store2/en/cart"
                                                    class="cart-button button ajax_add_to_cart_button btn btn-default add-to-cart"
                                                    data-button-action="add-to-cart"
                                                    data-title="Add to cart">
                                                    <i class="material-icons shopping-cart"></i>
                                                    <span class="hidden">Add to cart</span>
                                                </a>
                                            </div>
                                        </form>
                                        <div class="option-quick-add">
                                            <div class="icon-line-wishlist-fel">
                                                <div class="dor-wishlist">
                                                    <a class="addToDorWishlist" href="#"
                                                        onclick="WishlistCart('wishlist_block_list', 'add', jQuery(this).closest('.js-product-miniature').attr('data-id-product'), jQuery(this).closest('.js-product-miniature').attr('data-id-product-attribute'), 1, 0); return false;"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Add to Wishlist">
                                                        <i class="material-icons"></i>
                                                        <span class="wishlist-txt">Wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="icon-line-compare-fel">
                                                <div class="compare">
                                                    <a class="add_to_compare"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/13-hp-pavilion-27-all-in-one.html"
                                                        data-productid="13" data-toggle="tooltip" title=""
                                                        data-original-title="Add compare"><i
                                                            class="fa fa-random"></i><span
                                                            class="compare-button-txt">Compare</span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>




                            <article class="ajax_block_product product-miniature js-product-miniature"
                                data-id-product="14" data-id-product-attribute="146" itemscope=""
                                itemtype="http://schema.org/Product">
                                <div class="product-container">
                                    <div class="dor-display-product-info">
                                        <div class="left-block">
                                            <div class="product-image-container">

                                                <a href="http://bionic.doradothemes.com/store2/en/shop/14-146-samsung-gear-s3-classic.html#/3-storage-64gb/11-color-black"
                                                    class="thumbnail product-thumbnail product_img_link">
                                                    <img class="img-responsive thumbnail-image-1 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/68-home_default/samsung-gear-s3-classic.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/68-home_default/samsung-gear-s3-classic.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/68-large_default/samsung-gear-s3-classic.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/68-home_default/samsung-gear-s3-classic.jpg">
                                                    <img class="img-responsive thumbnail-image-2 lazy owl-lazy loaded"
                                                        style="min-height: 10px;"
                                                        data-lazy="http://bionic.doradothemes.com/store2/69-home_default/samsung-gear-s3-classic.jpg"
                                                        data-src="http://bionic.doradothemes.com/store2/69-home_default/samsung-gear-s3-classic.jpg"
                                                        alt=""
                                                        data-full-size-image-url="http://bionic.doradothemes.com/store2/69-large_default/samsung-gear-s3-classic.jpg"
                                                        width="600" height="800" data-ll-status="loaded"
                                                        src="http://bionic.doradothemes.com/store2/69-home_default/samsung-gear-s3-classic.jpg">
                                                </a>


                                                <div class="box-items">
                                                    <a class="new-box box-status"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/14-samsung-gear-s3-classic.html">
                                                        <span class="new-label">New</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="show-btn-products">

                                                <div class="control-action-buttons">
                                                    <div class="action-button">
                                                        <ul>

                                                            <li class="icon-line-quickview">
                                                                <a href="#"
                                                                    class="quick-view countdown-view-detail"
                                                                    data-link-action="quickview"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="View detail">
                                                                    <i class="material-icons"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="right-block">
                                            <div class="product-cate"><span>Shop</span></div>

                                            <h5 class="product-title-item" itemprop="name"><a
                                                    href="http://bionic.doradothemes.com/store2/en/shop/14-146-samsung-gear-s3-classic.html#/3-storage-64gb/11-color-black"
                                                    class="product-name">Samsung Gear S3 Classic</a></h5>

                                            <div class="review-price-product">
                                                <div class="hook-reviews">

                                                    <div class="comments_note">
                                                        <div class="star_content clearfix">
                                                            <div class="star"><i class="fas fa-star"></i></div>
                                                            <div class="star"><i class="far fa-star"></i></div>
                                                            <div class="star"><i class="fas fa-star-of-life"></i></div>
                                                            <div class="star"><i class="fas fa-star-half-alt"></i></div>
                                                            <div class="star"><i class="fas fa-certificate"></i></div>
                                                        </div>
                                                        <div class="dor-num-reviews hidden">
                                                            <span>0 Review</span>
                                                            <i>/</i><a href="#" class="add-your-review">Add
                                                                Your Review</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dor-show-value-product clearfix">

                                                    <div class="content_price">
                                                        <div class="product-price-and-shipping">


                                                            <span itemprop="price"
                                                                class="price">$600.00</span>


                                                        </div>
                                                    </div>

                                                    <div class="highlighted-informations hidden-sm-down">

                                                        <div class="variant-links">
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/14-149-samsung-gear-s3-classic.html#/3-storage-64gb/5-color-grey"
                                                                class="color" title="Grey"
                                                                style="background-color: rgb(170, 178, 189); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Grey</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/14-152-samsung-gear-s3-classic.html#/3-storage-64gb/8-color-white"
                                                                class="color" title="White"
                                                                style="background-color: rgb(255, 255, 255); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">White</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/14-146-samsung-gear-s3-classic.html#/3-storage-64gb/11-color-black"
                                                                class="color" title="Black"
                                                                style="background-color: rgb(67, 74, 84); color: rgb(221, 221, 221);"><span
                                                                    class="sr-only">Black</span></a>
                                                            <a href="http://bionic.doradothemes.com/store2/en/shop/14-155-samsung-gear-s3-classic.html#/3-storage-64gb/24-color-pink"
                                                                class="color" title="Pink"
                                                                style="background-color: rgb(252, 202, 205); color: rgb(34, 34, 34);"><span
                                                                    class="sr-only">Pink</span></a>
                                                            <span class="js-count count"></span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-description-short hidden"
                                                itemprop="description">
                                                <p>Samsung takes a complete product life cycle approach to
                                                    determining our environmental impact.</p>
                                                <p style="font-size:14px;font-weight:400;"><strong>Gear S3
                                                        embodies Samsung’s continuing environmental
                                                        progress. It is designed with the following features
                                                        to reduce environmental impact:</strong></p>
                                                <ul>
                                                    <li>Mercury-free</li>
                                                    <li>Arsenic-free display glass</li>
                                                    <li>Brominated flame retardant–free</li>
                                                    <li>PVC-free</li>
                                                    <li>Beryllium-free</li>
                                                    <li>Highly recyclable stainless steel</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <ul class="product-flags hidden">
                                            <li class="new">New</li>
                                        </ul>

                                    </div>
                                    <div class="product-more-options">
                                        <form action="http://bionic.doradothemes.com/store2/en/cart"
                                            method="post" class="dor-addcart-button">
                                            <div class="add">
                                                <input type="hidden" name="token"
                                                    value="34b11c3ac3b44ecd83062701f9ddcf1b">
                                                <input name="id_product" value="14" type="hidden">
                                                <input type="hidden" name="id_customization" value="0">
                                                <a href="http://bionic.doradothemes.com/store2/en/cart"
                                                    class="cart-button button ajax_add_to_cart_button btn btn-default add-to-cart"
                                                    data-button-action="add-to-cart"
                                                    data-title="Add to cart">
                                                    <i class="material-icons shopping-cart"></i>
                                                    <span class="hidden">Add to cart</span>
                                                </a>
                                            </div>
                                        </form>
                                        <div class="option-quick-add">
                                            <div class="icon-line-wishlist-fel">
                                                <div class="dor-wishlist">
                                                    <a class="addToDorWishlist" href="#"
                                                        onclick="WishlistCart('wishlist_block_list', 'add', jQuery(this).closest('.js-product-miniature').attr('data-id-product'), jQuery(this).closest('.js-product-miniature').attr('data-id-product-attribute'), 1, 0); return false;"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Add to Wishlist">
                                                        <i class="material-icons"></i>
                                                        <span class="wishlist-txt">Wishlist</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="icon-line-compare-fel">
                                                <div class="compare">
                                                    <a class="add_to_compare"
                                                        href="http://bionic.doradothemes.com/store2/en/shop/14-samsung-gear-s3-classic.html"
                                                        data-productid="14" data-toggle="tooltip" title=""
                                                        data-original-title="Add compare"><i
                                                            class="fa fa-random"></i><span
                                                            class="compare-button-txt">Compare</span></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>



                        </div>


                        <nav class="pagination">
                            <div class="col-md-4 show-page-text-number">

                                Showing 1-25 of 31 item(s)

                            </div>

                            <div class="col-md-6">

                                <ul class="page-list clearfix text-xs-center">
                                    <li>
                                        <a rel="prev"
                                            href="http://bionic.doradothemes.com/store2/en/3-shop?cate_type=1&amp;page=1"
                                            class="previous disabled js-search-link">
                                            <i class="material-icons"></i><span
                                                class="hidden">Previous</span>
                                        </a>
                                    </li>
                                    <li class="current">
                                        <a rel="nofollow"
                                            href="http://bionic.doradothemes.com/store2/en/3-shop?cate_type=1&amp;page=1"
                                            class="disabled js-search-link">
                                            1
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow"
                                            href="http://bionic.doradothemes.com/store2/en/3-shop?cate_type=1&amp;page=2"
                                            class="js-search-link">
                                            2
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="next"
                                            href="http://bionic.doradothemes.com/store2/en/3-shop?cate_type=1&amp;page=2"
                                            class="next js-search-link">
                                            <span class="hidden">Next</span><i class="material-icons"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                        </nav>

                        <div id="cate-loadmore" class="hidden">
                            <a href="#" class="load-more-data" onclick="return false">Load More</a>
                        </div>
                        <div class="hidden-md-up text-xs-right up">
                            <a href="#header" class="btn btn-secondary">
                                Back to top
                                <i class="material-icons"></i>
                            </a>
                        </div>
                    </div>

                </div>

                <div id="js-product-list-bottom">



                </div>

            </section>

        </div>



    </div>
</div>
@endsection
