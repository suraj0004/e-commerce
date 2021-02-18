@extends('layouts.shop.app')

@section('content')
    <div class="blockDorado1 blockPosition dor-bg-white">
        <div class="container">
            <div class="row">
                <div class="dor-banner-home">
                    <div class="dor-banner-home-inner">
                        <div class="dor-banner-home-wrapper">
                            <div class="dor-banner-home-item col-lg-4 col-sm-4 col-xs-12">
                                <div class="dor-banner-data"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/home-banner-01.jpg"
                                            alt="" class="lazy" width="403" height="210" /></a></div>
                            </div>
                            <div class="dor-banner-home-item col-lg-4 col-sm-4 col-xs-12">
                                <div class="dor-banner-data"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/home-banner-02.jpg"
                                            alt="" class="lazy" width="403" height="210" /></a></div>
                            </div>
                            <div class="dor-banner-home-item col-lg-4 col-sm-4 col-xs-12">
                                <div class="dor-banner-data"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/home-banner-03.jpg"
                                            alt="" class="lazy" width="403" height="210" /></a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="DorTabProductCate01 blockPosition dor-bg-white">
        <div class="container">
            <div class="row">
                <div id="dor-tab-product-category" class="show-hover2">
                    <div class="title-header-tab hidden">
                        <h3>Top Products</h3>
                        <p>Share your single post here. You can choose the latest posts or other catalogs to show on
                            your homepage</p>
                    </div>
                    <div class="dor-tab-product-category-wrapper">
                        <ul role="tablist" class="nav nav-tabs" id="dorTabAjax" data-defaulttab="new_product"
                            data-ajaxurl="http://bionic.doradothemes.com/modules/dor_ajaxtabproductcategory/productcategory-ajax.php">
                            <li class="first_item  active " data-rel="tab_new_product">
                                <a aria-expanded="false" data-toggle="tab" id="cate-tab-data-new_product-tab"
                                    href="#cate-tab-data-new_product">New Arrivals</a>
                            </li>
                            <li class=" " data-rel="tab_feature_product">
                                <a aria-expanded="false" data-toggle="tab" id="cate-tab-data-feature_product-tab"
                                    href="#cate-tab-data-feature_product">Featured</a>
                            </li>
                            <li class=" " data-rel="tab_special_product">
                                <a aria-expanded="false" data-toggle="tab" id="cate-tab-data-special_product-tab"
                                    href="#cate-tab-data-special_product">Must Have</a>
                            </li>
                            <li class="last_item " data-rel="tab_mostview_product">
                                <a aria-expanded="false" data-toggle="tab" id="cate-tab-data-mostview_product-tab"
                                    href="#cate-tab-data-mostview_product">Most View</a>
                            </li>


                        </ul>
                        <div class="tab-content" id="dorTabProductCategoryContent">
                            <div aria-labelledby="cate-tab-data-new_product-tab" id="cate-tab-data-new_product"
                                class="tab-pane fade  active  in">
                                <div class="productTabContent_new_product dor-content-items">
                                    <div class="row">
                                    </div>
                                </div>
                                <a href="#" class="load-more-tab dor-icon-float-away hidden" data-page="2" data-limit="4"
                                    data-ajax="http://bionic.doradothemes.com/modules/dor_ajaxtabproductcategory/productcategory-ajax.php"
                                    onclick="return false" data-toggle="tooltip" data-placement="top"
                                    data-original-title="Load more...">
                                    <span class="clt-left"></span><span><i class="fa fa-plus"></i></span><span
                                        class="clt-right"></span>
                                </a>
                            </div>
                            <div aria-labelledby="cate-tab-data-feature_product-tab" id="cate-tab-data-feature_product"
                                class="tab-pane fade  in">
                                <div class="productTabContent_feature_product dor-content-items">
                                    <div class="row">
                                    </div>
                                </div>
                                <a href="#" class="load-more-tab dor-icon-float-away hidden" data-page="2" data-limit="4"
                                    data-ajax="http://bionic.doradothemes.com/modules/dor_ajaxtabproductcategory/productcategory-ajax.php"
                                    onclick="return false" data-toggle="tooltip" data-placement="top"
                                    data-original-title="Load more...">
                                    <span class="clt-left"></span><span><i class="fa fa-plus"></i></span><span
                                        class="clt-right"></span>
                                </a>
                            </div>
                            <div aria-labelledby="cate-tab-data-special_product-tab" id="cate-tab-data-special_product"
                                class="tab-pane fade  in">
                                <div class="productTabContent_special_product dor-content-items">
                                    <div class="row">
                                    </div>
                                </div>
                                <a href="#" class="load-more-tab dor-icon-float-away hidden" data-page="2" data-limit="4"
                                    data-ajax="http://bionic.doradothemes.com/modules/dor_ajaxtabproductcategory/productcategory-ajax.php"
                                    onclick="return false" data-toggle="tooltip" data-placement="top"
                                    data-original-title="Load more...">
                                    <span class="clt-left"></span><span><i class="fa fa-plus"></i></span><span
                                        class="clt-right"></span>
                                </a>
                            </div>
                            <div aria-labelledby="cate-tab-data-mostview_product-tab" id="cate-tab-data-mostview_product"
                                class="tab-pane fade  in">
                                <div class="productTabContent_mostview_product dor-content-items">
                                    <div class="row">
                                    </div>
                                </div>
                                <a href="#" class="load-more-tab dor-icon-float-away hidden" data-page="2" data-limit="4"
                                    data-ajax="http://bionic.doradothemes.com/modules/dor_ajaxtabproductcategory/productcategory-ajax.php"
                                    onclick="return false" data-toggle="tooltip" data-placement="top"
                                    data-original-title="Load more...">
                                    <span class="clt-left"></span><span><i class="fa fa-plus"></i></span><span
                                        class="clt-right"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blockDorGroups clearfix">
        <div class="container">
            <div class="row">
                <div id="countdown-data" class="gst-row row-carbon-fiber ovh col-lg-9 col-sm-9 col-xs-12"
                    data-ajaxurl="http://bionic.doradothemes.com/modules/dor_dailydeals/dailydeals-ajax.php">
                    <div class="dailydeal-content">
                    </div>
                </div>

                <div class="dor-banner-deal col-lg-3 col-sm-3 col-xs-12">
                    <div class="dor-banner-deal-item">
                        <div class="dor-banner-deal-item-inner">
                            <div class="dor-banner-deal-item-wrapper">
                                <div class="item-deal-banner"><a href="#'"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/Banner-main-01.jpg"
                                            alt="" class="owl-lazy" width="450" height="699" /></a></div>
                                <div class="item-deal-banner"><a href="#'"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/Banner-main-02.jpg"
                                            alt="" class="owl-lazy" width="450" height="699" /></a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="blockDorado7 blockPosition dor-bg-white">
        <div class="container">
            <div class="row">
                <div class="dor-banner-small">
                    <div class="dor-banner-small-inner">
                        <div class="dor-banner-small-wrapper">
                            <div class="dor-banner-small-item"><a href="#"><img
                                        data-src="http://bionic.doradothemes.com/img/cms/dorado/Banner-Small-02.jpg" alt=""
                                        class="lazy" width="630" height="180" /></a></div>
                            <div class="dor-banner-small-item"><a href="#"><img
                                        data-src="http://bionic.doradothemes.com/img/cms/dorado/Banner-Small-01.jpg" alt=""
                                        class="lazy" width="630" height="180" /></a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="dorTopProductCategory" class="dorTopProductCategory clearfix show-hover2"
        data-defaulttab="http://bionic.doradothemes.com/modules/dor_topproductcategory/topproductcategory-ajax.php"
        data-cateId="4">
        <div class="container">
            <div class="row">
                <div class="dorTopProductCategoryData">
                    <div class="fancy-heading text-left top-list-title">
                        <h3><span>Top Cellphones</span></h3>
                    </div>
                    <div class="dor-topproduct-category-inner">
                        <div class="dor-topproduct-category-wrapper">
                            <div class="protab-contents">
                                <div class="image-banner-top col-lg-4 col-sm-4 col-xs-12">
                                    <div class="image-banner-top-inner">
                                        <div class="image-banner-top-wrapper">
                                            <ul>
                                                <li>
                                                    <div class="image-top-banner"><img
                                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/category/banner-cate-1-3.jpg"
                                                            alt="" class="owl-lazy"></div>
                                                </li>
                                                <li>
                                                    <div class="image-top-banner"><img
                                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/category/banner-cate-1.jpg"
                                                            alt="" class="owl-lazy"></div>
                                                </li>
                                                <li>
                                                    <div class="image-top-banner"><img
                                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/category/banner-cate-1-2.jpg"
                                                            alt="" class="owl-lazy"></div>
                                                </li>
                                            </ul>
                                            <a href="4-cellphone.html" title="Cellphone" class="shopall"><span>Shop
                                                    all products</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dor-topproduct-category-data col-lg-8 col-sm-8 col-xs-12">
                                    <div class="dor-topproduct-cate-inner">
                                        <div class="dor-topproduct-cate-wrapper">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="dorTopProductCategory2" class="dorTopProductCategory clearfix show-hover2"
        data-defaulttab="http://bionic.doradothemes.com/modules/dor_topproductcategory2/topproductcategory-ajax.php"
        data-cateId="8">
        <div class="container">
            <div class="row">
                <div class="dorTopProductCategoryData">
                    <div class="fancy-heading text-right top-list-title">
                        <h3><span>Top Computers</span></h3>
                    </div>
                    <div class="dor-topproduct-category-inner">
                        <div class="dor-topproduct-category-wrapper">
                            <div class="protab-contents">
                                <div class="image-banner-top col-lg-4 col-sm-4 col-xs-12 pull-right">
                                    <div class="image-banner-top-inner">
                                        <div class="image-banner-top-wrapper">
                                            <ul>
                                                <li>
                                                    <div class="image-top-banner"><img
                                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/category/banner-cate-2.jpg"
                                                            alt="" class="owl-lazy"></div>
                                                </li>
                                                <li>
                                                    <div class="image-top-banner"><img
                                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/category/banner-cate-2-3.jpg"
                                                            alt="" class="owl-lazy"></div>
                                                </li>
                                                <li>
                                                    <div class="image-top-banner"><img
                                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/category/banner-cate-2-2.jpg"
                                                            alt="" class="owl-lazy"></div>
                                                </li>
                                            </ul>
                                            <a href="8-computers-tablets.html" title="Computers &amp; Tablets"
                                                class="shopall"><span>Shop all products</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dor-topproduct-category-data col-lg-8 col-sm-8 col-xs-12">
                                    <div class="dor-topproduct-cate-inner">
                                        <div class="dor-topproduct-cate-wrapper">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="dorListCategory blockPosition dor-bg-white">
        <div class="container">
            <div class="row">
                <div class="tab-category-container-sliderx">
                    <div class="container-inner row-categories dor-tab-list-category-wrapper">
                        <div class="categories-head-name">
                            <h3 class="category-lists-title">
                                <span> Popular Categories</span>
                            </h3>
                        </div>
                        <div class="tab_category_container dor-nav-dots dorButtonArrow" data-ajaxload="1"
                            data-ajaxurl="http://bionic.doradothemes.com/modules/dor_categories/ajax.php">
                        </div> <!-- .tab_container -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="dor-tab-product-category-pro" class="clearfix show-hover2">
        <div class="container">
            <div class="row">
                <div class="dor-pro-tabcontent clearfix">
                    <div class="dor-tabpro-product-category-wrapper" data-tab-id="3">
                        <h3 class="pro-list-title"><span class="tab-title-pro"><span>Hot Best Sellers</span></span>
                        </h3>
                        <div class="row-item-protab">
                            <div class="protab-lists">
                                <div class="pro-tab-head">
                                    <ul role="tablist" class="nav nav-tabs" id="dorTabAjaxPro"
                                        data-ajaxurl="http://bionic.doradothemes.com/modules/dor_tabproductcategory_pro/productcategory-ajax.php">
                                        <li><a class="first_item " aria-expanded="false" data-toggle="tab"
                                                id="cate-tab-data-pro-4-tab"
                                                href="#cate-tab-data-pro-4"><span>Cellphone</span></a></li>
                                        <li><a class=" " aria-expanded="false" data-toggle="tab"
                                                id="cate-tab-data-pro-5-tab"
                                                href="#cate-tab-data-pro-5"><span>Smartwatch</span></a></li>
                                        <li><a class=" " aria-expanded="false" data-toggle="tab"
                                                id="cate-tab-data-pro-7-tab"
                                                href="#cate-tab-data-pro-7"><span>Accessories</span></a></li>
                                        <li><a class="  active " aria-expanded="false" data-toggle="tab"
                                                id="cate-tab-data-pro-8-tab" href="#cate-tab-data-pro-8"><span>Computers
                                                    &amp; Tablets</span></a>
                                        </li>
                                        <li><a class=" " aria-expanded="false" data-toggle="tab"
                                                id="cate-tab-data-pro-12-tab"
                                                href="#cate-tab-data-pro-12"><span>Televisions</span></a></li>
                                        <li><a class="last_item " aria-expanded="false" data-toggle="tab"
                                                id="cate-tab-data-pro-13-tab"
                                                href="#cate-tab-data-pro-13"><span>Headphones</span></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="protab-contents">
                                <div class="tab-content dorTabProductCategoryContentPro"
                                    id="dorTabProductCategoryContentPro">
                                    <div data-aria-labelledby="cate-tab-data-pro-besseller_product-tab"
                                        id="cate-tab-data-pro-besseller_product" class="tab-pane fade  in">
                                        <div class="productTabContentPro_besseller_product dor-content-items">
                                            <div class="row-items">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aria-labelledby="cate-tab-data-pro-4-tab" id="cate-tab-data-pro-4"
                                        class="tab-pane fade  in">
                                        <div class="productTabContentPro_4 dor-content-items">
                                            <div class="row-items">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aria-labelledby="cate-tab-data-pro-5-tab" id="cate-tab-data-pro-5"
                                        class="tab-pane fade  in">
                                        <div class="productTabContentPro_5 dor-content-items">
                                            <div class="row-items">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aria-labelledby="cate-tab-data-pro-7-tab" id="cate-tab-data-pro-7"
                                        class="tab-pane fade  in">
                                        <div class="productTabContentPro_7 dor-content-items">
                                            <div class="row-items">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aria-labelledby="cate-tab-data-pro-8-tab" id="cate-tab-data-pro-8"
                                        class="tab-pane fade  active  in">
                                        <div class="productTabContentPro_8 dor-content-items">
                                            <div class="row-items">

                                            </div>
                                        </div>
                                    </div>
                                    <div data-aria-labelledby="cate-tab-data-pro-12-tab" id="cate-tab-data-pro-12"
                                        class="tab-pane fade  in">
                                        <div class="productTabContentPro_12 dor-content-items">
                                            <div class="row-items">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-aria-labelledby="cate-tab-data-pro-13-tab" id="cate-tab-data-pro-13"
                                        class="tab-pane fade  in">
                                        <div class="productTabContentPro_13 dor-content-items">
                                            <div class="row-items">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="dor-biz-product" class="product-biz list-products arrowStyleDot1">
        <div class="container">
            <div class="row">
                <div class="dor-biz-inner">
                    <div class="dor-biz-product">
                        <div class="biz-contents row"
                            data-ajaxurl="http://bionic.doradothemes.com/modules/dor_bizproduct/bizproduct-ajax.php">
                            <ul class="tab-biz-control hidden-lg hidden-sm hidden-md col-sm-12 col-sx-12">
                                <li><a href="#bizData-toprated_product"
                                        class="biz-tabtitle dor-underline-from-center active"><span>Top
                                            Rated</span></a></li>
                                <li><a href="#bizData-besseller_product"
                                        class="biz-tabtitle dor-underline-from-center "><span>Best Seller</span></a>
                                </li>
                                <li><a href="#bizData-feature_product"
                                        class="biz-tabtitle dor-underline-from-center "><span>Featured</span></a>
                                </li>
                            </ul>
                            <div id="bizData-toprated_product"
                                class="biz-group col-lg-4 col-sm-4 col-sx-4 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                                <div>
                                    <h3 class="biz-tabtitle"><span>Top Rated</span></h3>
                                    <div id="bizTab-toprated_product" class="biz-group-content">

                                    </div>
                                    <div class="view-more-cat-link clearfix"><a href="index.html?controller=/">View
                                            more<i class="fa fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                            <div id="bizData-besseller_product"
                                class="biz-group col-lg-4 col-sm-4 col-sx-4 col-md-4 wow fadeInUp" data-wow-delay="200ms">
                                <div>
                                    <h3 class="biz-tabtitle"><span>Best Seller</span></h3>
                                    <div id="bizTab-besseller_product" class="biz-group-content">

                                    </div>
                                    <div class="view-more-cat-link clearfix"><a href="best-sales.html">View more<i
                                                class="fa fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                            <div id="bizData-feature_product"
                                class="biz-group col-lg-4 col-sm-4 col-sx-4 col-md-4 wow fadeInUp" data-wow-delay="300ms">
                                <div>
                                    <h3 class="biz-tabtitle"><span>Featured</span></h3>
                                    <div id="bizTab-feature_product" class="biz-group-content">

                                    </div>
                                    <div class="view-more-cat-link clearfix"><a href="index.html?controller=/">View
                                            more<i class="fa fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blockDorado9 blockPosition dor-bg-white">
        <div class="container">
            <div class="row">
                <div class="dor-top-brands">
                    <div class="brands-lists">
                        <div class="brands-lists-inner">
                            <ul>
                                <li class="brand-item"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/brand/brands-1.png"
                                            alt="" class="owl-lazy" width="130" height="26" /></a></li>
                                <li class="brand-item"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/brand/brands-2.png"
                                            alt="" class="owl-lazy" width="130" height="29" /></a></li>
                                <li class="brand-item"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/brand/brands-3.png"
                                            alt="" class="owl-lazy" width="130" height="32" /></a></li>
                                <li class="brand-item"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/brand/brands-4.png"
                                            alt="" class="owl-lazy" width="130" height="24" /></a></li>
                                <li class="brand-item"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/brand/brands-5.png"
                                            alt="" class="owl-lazy" width="130" height="16" /></a></li>
                                <li class="brand-item"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/brand/brands-6.png"
                                            alt="" class="owl-lazy" width="130" height="33" /></a></li>
                                <li class="brand-item"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/brand/brands-7.png"
                                            alt="" class="owl-lazy" width="130" height="34" /></a></li>
                                <li class="brand-item"><a href="#"><img
                                            data-src="http://bionic.doradothemes.com/img/cms/dorado/brand/brands-8.png"
                                            alt="" class="owl-lazy" width="140" height="18" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section id="dor_homeviewed" class="clearfix show-hover2 dor_viewed_products">
        <div class="dor_homeviewed_inner">
            <div class="container">
                <div class="row">
                    <h3 class="title-dor-viewed"><span>Recently viewed products</span></h3>
                    <div class="dor-home-viewed-products dor-viewedproducts-inner"
                        data-ajaxurl="http://bionic.doradothemes.com/modules/dor_viewedproducts/viewedproducts-ajax.php">
                        <div class="dor-home-viewed-products-inner">
                            <div class="dor-home-viewed-products-wrapper dor-viewedproducts-data">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="DorHomeLatestNews blockPosition dor-bg-white">
        <div class="container">
            <div class="row">
                <div class="dorblogHomeAjax"
                    data-url="http://bionic.doradothemes.com/modules/smartbloghomelatestnews/ajax.php">

                </div>
            </div>
        </div>
    </div>

    <div class="dorHomepageBar blockPosition dor-bg-white">
        <div class="container">
            <div class="row">
                <div class="service-layout-box clearfix">
                    <div class="service-box-item">
                        <div class="service-feature-box">
                            <div class="service-feature-inner">
                                <div class="service-feature-wrapper">
                                    <div class="feature-img"><i class="fa fa-truck"> </i></div>
                                    <div class="feature-content">
                                        <div class="flex-content">
                                            <h3>Free Shipping</h3>
                                            <p>All orders over $99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box-item">
                        <div class="service-feature-box">
                            <div class="service-feature-inner">
                                <div class="service-feature-wrapper">
                                    <div class="feature-img"><i class="fa fa-money"> </i></div>
                                    <div class="feature-content">
                                        <div class="flex-content">
                                            <h3>Money Back Guarantee</h3>
                                            <p>100% money back guarantee</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box-item">
                        <div class="service-feature-box">
                            <div class="service-feature-inner">
                                <div class="service-feature-wrapper">
                                    <div class="feature-img"><i class="fa fa-gift"> </i></div>
                                    <div class="feature-content">
                                        <div class="flex-content">
                                            <h3>Member Gift</h3>
                                            <p>In hac habitasse platea dictum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-box-item">
                        <div class="service-feature-box">
                            <div class="service-feature-inner">
                                <div class="service-feature-wrapper">
                                    <div class="feature-img"><i class="fa fa-life-ring"> </i></div>
                                    <div class="feature-content">
                                        <div class="flex-content">
                                            <h3>Online Support 24/7</h3>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
