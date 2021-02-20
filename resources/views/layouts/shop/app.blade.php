<!doctype html>
<html lang="en">


<!-- Mirrored from bionic.doradothemes.com/en/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2021 09:22:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>


    <meta charset="utf-8">


    <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title>Bionic Store</title>
    <meta name="description" content="Shop powered by PrestaShop">
    <meta name="keywords" content="">



    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="icon" type="image/vnd.microsoft.icon" href="{{config('app.url')}}/img/favicon.ico?1507612767">
    <link rel="shortcut icon" type="image/x-icon" href="{{config('app.url')}}/img/favicon.ico?1507612767">



    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="stylesheet" href="{{ asset('css/theme-main.css') }}" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('css/topbar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/oregon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/aboutus.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/color.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />


    @yield('css')

    <script type="text/javascript">
        var DOR = {
            "dorFloatHeader": 1,
            "dorSubscribe": 1,
            "dorOptReload": 1,
            "dorCategoryShow": "grid",
            "dorLazyLoad": "1",
            "dorZoomImage": "1",
            "id_shop": 1
        };
        var DORCOMPARE = {
            "compared_products": [],
            "maxitem": 3,
            "linkModule": "http:\/\/bionic.doradothemes.com\/en\/module\/dorcompare\/compare"
        };
        var DORSLIDER = {
            "effect": "1",
            "autoplay": true,
            "arrow": true,
            "nav": "1",
            "speed": "1000",
            "pause": 3,
            "wrap": true,
            "thumbWidth": "1300",
            "thumbHeight": "400"
        };
        var DORTRACKING = {
            "linkModule": "http:\/\/bionic.doradothemes.com\/en\/order-tracking"
        };
        var prestashop = {
            "cart": {
                "products": [],
                "totals": {
                    "total": {
                        "type": "total",
                        "label": "Total",
                        "amount": 0,
                        "value": "$0.00"
                    },
                    "total_including_tax": {
                        "type": "total",
                        "label": "Total (tax incl.)",
                        "amount": 0,
                        "value": "$0.00"
                    },
                    "total_excluding_tax": {
                        "type": "total",
                        "label": "Total (tax excl.)",
                        "amount": 0,
                        "value": "$0.00"
                    }
                },
                "subtotals": {
                    "products": {
                        "type": "products",
                        "label": "Subtotal",
                        "amount": 0,
                        "value": "$0.00"
                    },
                    "discounts": null,
                    "shipping": {
                        "type": "shipping",
                        "label": "Shipping",
                        "amount": 0,
                        "value": "Free"
                    },
                    "tax": {
                        "type": "tax",
                        "label": "Taxes",
                        "amount": 0,
                        "value": "$0.00"
                    }
                },
                "products_count": 0,
                "summary_string": "0 items",
                "labels": {
                    "tax_short": "(tax excl.)",
                    "tax_long": "(tax excluded)"
                },
                "id_address_delivery": 0,
                "id_address_invoice": 0,
                "is_virtual": false,
                "vouchers": {
                    "allowed": 0,
                    "added": []
                },
                "discounts": [],
                "minimalPurchase": 0,
                "minimalPurchaseRequired": ""
            },
            "currency": {
                "name": "US Dollar",
                "iso_code": "USD",
                "iso_code_num": "840",
                "sign": "$"
            },
            "customer": {
                "lastname": null,
                "firstname": null,
                "email": null,
                "last_passwd_gen": null,
                "birthday": null,
                "newsletter": null,
                "newsletter_date_add": null,
                "ip_registration_newsletter": null,
                "optin": null,
                "website": null,
                "company": null,
                "siret": null,
                "ape": null,
                "outstanding_allow_amount": 0,
                "max_payment_days": 0,
                "note": null,
                "is_guest": 0,
                "id_shop": null,
                "id_shop_group": null,
                "id_default_group": 3,
                "date_add": null,
                "date_upd": null,
                "reset_password_token": null,
                "reset_password_validity": null,
                "id": null,
                "is_logged": false,
                "gender": {
                    "type": null,
                    "name": null,
                    "id": null
                },
                "risk": {
                    "name": null,
                    "color": null,
                    "percent": null,
                    "id": null
                },
                "addresses": []
            },
            "language": {
                "name": "English (English)",
                "iso_code": "en",
                "locale": "en-US",
                "language_code": "en-us",
                "is_rtl": "0",
                "date_format_lite": "m\/d\/Y",
                "date_format_full": "m\/d\/Y H:i:s",
                "id": 1
            },
            "page": {
                "title": "",
                "canonical": null,
                "meta": {
                    "title": "Bionic Store",
                    "description": "Shop powered by PrestaShop",
                    "keywords": "",
                    "robots": "index"
                },
                "page_name": "index",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-US": true,
                    "currency-USD": true,
                    "layout-full-width": true,
                    "page-index": true,
                    "tax-display-disabled": true
                },
                "admin_notifications": []
            },
            "shop": {
                "name": "Bionic Store",
                "email": "doradothemes@gmail.com",
                "registration_number": false,
                "long": false,
                "lat": false,
                "logo": "\/img\/bionic-store-logo-1507612767.jpg",
                "stores_icon": "\/img\/logo_stores.png",
                "favicon": "\/img\/favicon.ico",
                "favicon_update_time": "1507612767",
                "address": {
                    "formatted": "Bionic Store<br>United States",
                    "address1": false,
                    "address2": false,
                    "postcode": false,
                    "city": false,
                    "state": null,
                    "country": "United States"
                },
                "phone": false,
                "fax": false
            },
            "urls": {
                "base_url": "http:\/\/bionic.doradothemes.com\/",
                "current_url": "http:\/\/bionic.doradothemes.com\/en\/",
                "shop_domain_url": "http:\/\/bionic.doradothemes.com",
                "img_ps_url": "http:\/\/bionic.doradothemes.com\/img\/",
                "img_cat_url": "http:\/\/bionic.doradothemes.com\/img\/c\/",
                "img_lang_url": "http:\/\/bionic.doradothemes.com\/img\/l\/",
                "img_prod_url": "http:\/\/bionic.doradothemes.com\/img\/p\/",
                "img_manu_url": "http:\/\/bionic.doradothemes.com\/img\/m\/",
                "img_sup_url": "http:\/\/bionic.doradothemes.com\/img\/su\/",
                "img_ship_url": "http:\/\/bionic.doradothemes.com\/img\/s\/",
                "img_store_url": "http:\/\/bionic.doradothemes.com\/img\/st\/",
                "img_col_url": "http:\/\/bionic.doradothemes.com\/img\/co\/",
                "img_url": "http:\/\/bionic.doradothemes.com\/themes\/dor_bionic1\/assets\/img\/",
                "css_url": "http:\/\/bionic.doradothemes.com\/themes\/dor_bionic1\/assets\/css\/",
                "js_url": "http:\/\/bionic.doradothemes.com\/themes\/dor_bionic1\/assets\/js\/",
                "pic_url": "http:\/\/bionic.doradothemes.com\/upload\/",
                "pages": {
                    "address": "http:\/\/bionic.doradothemes.com\/en\/address",
                    "addresses": "http:\/\/bionic.doradothemes.com\/en\/addresses",
                    "authentication": "http:\/\/bionic.doradothemes.com\/en\/login",
                    "cart": "http:\/\/bionic.doradothemes.com\/en\/cart",
                    "category": "http:\/\/bionic.doradothemes.com\/en\/index.php?controller=category",
                    "cms": "http:\/\/bionic.doradothemes.com\/en\/index.php?controller=cms",
                    "contact": "http:\/\/bionic.doradothemes.com\/en\/contact-us",
                    "discount": "http:\/\/bionic.doradothemes.com\/en\/discount",
                    "guest_tracking": "http:\/\/bionic.doradothemes.com\/en\/guest-tracking",
                    "history": "http:\/\/bionic.doradothemes.com\/en\/order-history",
                    "identity": "http:\/\/bionic.doradothemes.com\/en\/identity",
                    "index": "http:\/\/bionic.doradothemes.com\/en\/",
                    "my_account": "http:\/\/bionic.doradothemes.com\/en\/my-account",
                    "order_confirmation": "http:\/\/bionic.doradothemes.com\/en\/order-confirmation",
                    "order_detail": "http:\/\/bionic.doradothemes.com\/en\/index.php?controller=order-detail",
                    "order_follow": "http:\/\/bionic.doradothemes.com\/en\/order-follow",
                    "order": "http:\/\/bionic.doradothemes.com\/en\/order",
                    "order_return": "http:\/\/bionic.doradothemes.com\/en\/index.php?controller=order-return",
                    "order_slip": "http:\/\/bionic.doradothemes.com\/en\/credit-slip",
                    "pagenotfound": "http:\/\/bionic.doradothemes.com\/en\/page-not-found",
                    "password": "http:\/\/bionic.doradothemes.com\/en\/password-recovery",
                    "pdf_invoice": "http:\/\/bionic.doradothemes.com\/en\/index.php?controller=pdf-invoice",
                    "pdf_order_return": "http:\/\/bionic.doradothemes.com\/en\/index.php?controller=pdf-order-return",
                    "pdf_order_slip": "http:\/\/bionic.doradothemes.com\/en\/index.php?controller=pdf-order-slip",
                    "prices_drop": "http:\/\/bionic.doradothemes.com\/en\/prices-drop",
                    "product": "http:\/\/bionic.doradothemes.com\/en\/index.php?controller=product",
                    "search": "http:\/\/bionic.doradothemes.com\/en\/search",
                    "sitemap": "http:\/\/bionic.doradothemes.com\/en\/sitemap",
                    "stores": "http:\/\/bionic.doradothemes.com\/en\/stores",
                    "supplier": "http:\/\/bionic.doradothemes.com\/en\/supplier",
                    "register": "http:\/\/bionic.doradothemes.com\/en\/login?create_account=1",
                    "order_login": "http:\/\/bionic.doradothemes.com\/en\/order?login=1"
                },
                "theme_assets": "\/themes\/dor_bionic1\/assets\/",
                "actions": {
                    "logout": "http:\/\/bionic.doradothemes.com\/en\/?mylogout="
                }
            },
            "configuration": {
                "display_taxes_label": false,
                "low_quantity_threshold": 3,
                "is_b2b": false,
                "is_catalog": false,
                "show_prices": true,
                "opt_in": {
                    "partner": true
                },
                "quantity_discount": {
                    "type": "discount",
                    "label": "Discount"
                },
                "voucher_enabled": 0,
                "return_enabled": 0,
                "number_of_days_for_return": 14
            },
            "field_required": [],
            "breadcrumb": {
                "links": [{
                    "title": "Home",
                    "url": "http:\/\/bionic.doradothemes.com\/en\/"
                }],
                "count": 1
            },
            "link": {
                "protocol_link": "http:\/\/",
                "protocol_content": "http:\/\/"
            },
            "time": 1612689733,
            "static_token": "34b11c3ac3b44ecd83062701f9ddcf1b",
            "token": "74f202a69d98cd0d35b672f0eaea950c"
        };

    </script>



    <style type="text/css">
        /****Top Nav***/
        /***Header****/


        /****Footer****/


        /*****Mega Menu*****/




        /*****End Mega Menu*****/

    </style>



</head>



<body id="index"
    class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled proCateCol2 proDetailCol1   dorHoverProduct2">



    <main class="full">


        <section id="topbar" class="dor-topbar-wrapper">

            <div id="dor-topbar01" class="dor-topbar-wrapper">
                <div class="dor-topbar-inner">
                    <div class="container">
                        <div class="row">
                            <div class="dor-topbar-line">
                                <div class="dor-topbar-line-inner">
                                    <div class="dor-topbar-line-wrapper row">
                                        <div class="topbar-infomation col-lg-8 col-sm-8 pull-left">
                                            <ul>
                                                <li class="time-work"><span><i class="fas fa-business-time"></i> Work
                                                        time:
                                                        Monday - Sunday: 08AM - 06PM</span></li>
                                                <li class="phone-shop&quot;"><span><i class="fas fa-phone"></i> +06
                                                        6666 8888</span></li>
                                                <li class="mail-shop"><span><i class="fas fa-envelope-square"></i>
                                                        support@bionic.com</span></li>
                                            </ul>
                                        </div>
                                        <div class="topbar-infomation-right col-lg-4 col-sm-4 pull-right">
                                            <ul>
                                                <li class="store-location"><span><i class="fas fa-location-arrow"></i>
                                                        Store
                                                        Location</span></li>
                                                <li class="free-ship"><span><i class="fas fa-shipping-fast"></i> Free
                                                        Shipping on Orders $100+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" rel="nofollow" class="select-setting hidden pull-right"><i
                                    class="material-icons">&#xE8B8;</i></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <header id="header" class="header-absolute miniCartv1">

            <div id="dor-header01" class="header-content-wrapper dor-header">

                <div class="header-banner">

                </div>



                <div class="header-top no-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 dor-main-logo">
                                <div class="main-logo-inner">
                                    <div class="main-logo-wrapper">
                                        <div class="item-logo" id="_desktop_logo">
                                            <h1 class="h1-logo no-margin">
                                                <a href="#">
                                                    <img class="logo img-responsive"
                                                        src="{{ asset('img/bionic-store-logo.jpg') }}""
                                                        alt=" Bionic Store">
                                                </a>
                                            </h1>
                                        </div>
                                        <div class="item-logo top-logo" id="_mobile_logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dor-mainmenu-inner col-md-8">
                                <div class="head-dormenu">
                                    <nav class="dor-megamenu col-lg-12 col-sx-12 col-sm-12">
                                        <div class="navbar navbar-default " role="navigation">
                                            <!-- Brand and toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle open_menu">
                                                    <i class="material-icons">&#xE8FE;</i>
                                                </button>
                                            </div>
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div id="dor-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
                                                <div class="close_menu" style="display:none;">
                                                    <span class="btn-close"><i
                                                            class="material-icons">&#xE14C;</i></span>
                                                </div>
                                                <div class="mobile-logo-menu hidden-lg hidden-md">
                                                    <a href="{{config('app.url')}}/" title="Bionic Store">
                                                        <img class="logo img-responsive" src="asset('/img/logo-menu.png"
                                                            alt="Bionic Store" />
                                                    </a>
                                                </div>
                                                <ul class="nav navbar-nav megamenu">
                                                    <li class=" "><a target="_self" data-rel="7"
                                                            href="{{route('home')}}"><span class="menu-title">Home</span></a>
                                                    </li>
                                                    <li class=" parent dropdown aligned-fullwidth"><a
                                                            class="dropdown-toggle" data-toggle="dropdown"
                                                            target="_self" data-rel="3" href="3-shop.html"><span
                                                                class="menu-title">Shop</span><b
                                                                class="caret"></b></a><span
                                                            class="caretmobile hidden"></span>
                                                        <ul class="dropdown-menu level1 megamenu-content" role="menu"
                                                            style="width:300px;">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div
                                                                                class="widget-html block menu-category-image-top">
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="cate-image-menu"><img
                                                                                            src="../img/cms/dorado/menu/cate01.png"
                                                                                            alt="" width="350"
                                                                                            height="215" /></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div
                                                                                class="widget-html block menu-category-image-top">
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="cate-image-menu"><img
                                                                                            src="../img/cms/dorado/menu/cate02.png"
                                                                                            alt="" width="350"
                                                                                            height="215" /></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div
                                                                                class="widget-html block menu-category-image-top">
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="cate-image-menu"><img
                                                                                            src="../img/cms/dorado/menu/cate03.png"
                                                                                            alt="" width="350"
                                                                                            height="215" /></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div
                                                                                class="widget-html block menu-category-image-top">
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="cate-image-menu"><img
                                                                                            src="../img/cms/dorado/menu/cate05.png"
                                                                                            alt="" width="350"
                                                                                            height="215" /></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div
                                                                                class="widget-html block menu-category-image-top">
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="cate-image-menu"><img
                                                                                            src="../img/cms/dorado/menu/cate04.png"
                                                                                            alt="" width="350"
                                                                                            height="215" /></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div
                                                                                class="widget-html block menu-category-image-top">
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="cate-image-menu"><img
                                                                                            src="../img/cms/dorado/menu/cate06.png"
                                                                                            alt="" width="350"
                                                                                            height="215" /></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div class="widget-subcategories block ">
                                                                                <div class="widget-heading title_block">
                                                                                    <a href="4-cellphone.html"
                                                                                        title="Cellphones" class="img">
                                                                                        Cellphones
                                                                                    </a>
                                                                                    <span
                                                                                        class="caretmobile hidden"></span>
                                                                                </div>
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="widget-heading hidden">
                                                                                        <a href="4-cellphone.html"
                                                                                            title="Cellphone"
                                                                                            class="img">Cellphone</a>
                                                                                        <span
                                                                                            class="caretmobile hidden"></span>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li class="clearfix">
                                                                                            <a href="18-apple-mobiles"
                                                                                                title="Apple Mobiles"
                                                                                                data-rel="sub-18"
                                                                                                class="img">
                                                                                                Apple Mobiles
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="19-samsung-mobiles.html"
                                                                                                title="Samsung Mobiles"
                                                                                                data-rel="sub-19"
                                                                                                class="img">
                                                                                                Samsung Mobiles
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="20-huawei-mobiles"
                                                                                                title="Huawei Mobiles"
                                                                                                data-rel="sub-20"
                                                                                                class="img">
                                                                                                Huawei Mobiles
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="21-nokia-mobiles.html"
                                                                                                title="Nokia Mobiles"
                                                                                                data-rel="sub-21"
                                                                                                class="img">
                                                                                                Nokia Mobiles
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="22-pixel-mobiles.html"
                                                                                                title="Pixel Mobiles"
                                                                                                data-rel="sub-22"
                                                                                                class="img">
                                                                                                Pixel Mobiles
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="23-sony-mobiles.html"
                                                                                                title="Sony Mobiles"
                                                                                                data-rel="sub-23"
                                                                                                class="img">
                                                                                                Sony Mobiles
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div class="widget-subcategories block ">
                                                                                <div class="widget-heading title_block">
                                                                                    <a href="8-computers-tablets.html"
                                                                                        title="Computers" class="img">
                                                                                        Computers
                                                                                    </a>
                                                                                    <span
                                                                                        class="caretmobile hidden"></span>
                                                                                </div>
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="widget-heading hidden">
                                                                                        <a href="8-computers-tablets.html"
                                                                                            title="Computers &amp; Tablets"
                                                                                            class="img">Computers &amp;
                                                                                            Tablets</a>
                                                                                        <span
                                                                                            class="caretmobile hidden"></span>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li class="clearfix">
                                                                                            <a href="9-laptops.html"
                                                                                                title="Laptops"
                                                                                                data-rel="sub-9"
                                                                                                class="img">
                                                                                                Laptops
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="10-desktops.html"
                                                                                                title="Desktops"
                                                                                                data-rel="sub-10"
                                                                                                class="img">
                                                                                                Desktops
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="11-ultrabooks.html"
                                                                                                title="Ultrabooks"
                                                                                                data-rel="sub-11"
                                                                                                class="img">
                                                                                                Ultrabooks
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="14-tablets.html"
                                                                                                title="Tablets"
                                                                                                data-rel="sub-14"
                                                                                                class="img">
                                                                                                Tablets
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="15-all-in-one.html"
                                                                                                title="All In One"
                                                                                                data-rel="sub-15"
                                                                                                class="img">
                                                                                                All In One
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="16-keyboard-mouse.html"
                                                                                                title="Keyboard &amp; Mouse"
                                                                                                data-rel="sub-16"
                                                                                                class="img">
                                                                                                Keyboard &amp; Mouse
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div class="widget-subcategories block ">
                                                                                <div class="widget-heading title_block">
                                                                                    <a href="5-smartwatch.html"
                                                                                        title="Smartwatches"
                                                                                        class="img">
                                                                                        Smartwatches
                                                                                    </a>
                                                                                    <span
                                                                                        class="caretmobile hidden"></span>
                                                                                </div>
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="widget-heading hidden">
                                                                                        <a href="5-smartwatch.html"
                                                                                            title="Smartwatch"
                                                                                            class="img">Smartwatch</a>
                                                                                        <span
                                                                                            class="caretmobile hidden"></span>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li class="clearfix">
                                                                                            <a href="25-apple-watches.html"
                                                                                                title="Apple Watches"
                                                                                                data-rel="sub-25"
                                                                                                class="img">
                                                                                                Apple Watches
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="26-samsung-watches.html"
                                                                                                title="Samsung Watches"
                                                                                                data-rel="sub-26"
                                                                                                class="img">
                                                                                                Samsung Watches
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="27-moto-360-watches.html"
                                                                                                title="Moto 360 Watches"
                                                                                                data-rel="sub-27"
                                                                                                class="img">
                                                                                                Moto 360 Watches
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="28-sony-watches.html"
                                                                                                title="Sony Watches"
                                                                                                data-rel="sub-28"
                                                                                                class="img">
                                                                                                Sony Watches
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="29-asus-zenwatch.html"
                                                                                                title="ASUS ZenWatch"
                                                                                                data-rel="sub-29"
                                                                                                class="img">
                                                                                                ASUS ZenWatch
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="30-huawei-watches.html"
                                                                                                title="Huawei Watches"
                                                                                                data-rel="sub-30"
                                                                                                class="img">
                                                                                                Huawei Watches
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div class="widget-subcategories block ">
                                                                                <div class="widget-heading title_block">
                                                                                    <a href="12-televisions.html"
                                                                                        title="Televisions" class="img">
                                                                                        Televisions
                                                                                    </a>
                                                                                    <span
                                                                                        class="caretmobile hidden"></span>
                                                                                </div>
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="widget-heading hidden">
                                                                                        <a href="12-televisions.html"
                                                                                            title="Televisions"
                                                                                            class="img">Televisions</a>
                                                                                        <span
                                                                                            class="caretmobile hidden"></span>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li class="clearfix">
                                                                                            <a href="32-samsung-electronics.html"
                                                                                                title="Samsung Electronics"
                                                                                                data-rel="sub-32"
                                                                                                class="img">
                                                                                                Samsung Electronics
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="33-lg-electronics.html"
                                                                                                title="LG Electronics"
                                                                                                data-rel="sub-33"
                                                                                                class="img">
                                                                                                LG Electronics
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="34-sony-electronics.html"
                                                                                                title="Sony Electronics"
                                                                                                data-rel="sub-34"
                                                                                                class="img">
                                                                                                Sony Electronics
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="35-tcl-electronics.html"
                                                                                                title="TCL Electronics"
                                                                                                data-rel="sub-35"
                                                                                                class="img">
                                                                                                TCL Electronics
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="36-sharp-electronics.html"
                                                                                                title="Sharp Electronics"
                                                                                                data-rel="sub-36"
                                                                                                class="img">
                                                                                                Sharp Electronics
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="37-leeco-electronics.html"
                                                                                                title="LeEco Electronics"
                                                                                                data-rel="sub-37"
                                                                                                class="img">
                                                                                                LeEco Electronics
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div class="widget-subcategories block ">
                                                                                <div class="widget-heading title_block">
                                                                                    <a href="13-headphones.html"
                                                                                        title="Headphones" class="img">
                                                                                        Headphones
                                                                                    </a>
                                                                                    <span
                                                                                        class="caretmobile hidden"></span>
                                                                                </div>
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="widget-heading hidden">
                                                                                        <a href="13-headphones.html"
                                                                                            title="Headphones"
                                                                                            class="img">Headphones</a>
                                                                                        <span
                                                                                            class="caretmobile hidden"></span>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li class="clearfix">
                                                                                            <a href="39-apple-beat.html"
                                                                                                title="Apple Beat"
                                                                                                data-rel="sub-39"
                                                                                                class="img">
                                                                                                Apple Beat
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="40-sennheiser.html"
                                                                                                title="Sennheiser"
                                                                                                data-rel="sub-40"
                                                                                                class="img">
                                                                                                Sennheiser
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="41-samsung.html"
                                                                                                title="Samsung"
                                                                                                data-rel="sub-41"
                                                                                                class="img">
                                                                                                Samsung
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="42-panasonic.html"
                                                                                                title="Panasonic"
                                                                                                data-rel="sub-42"
                                                                                                class="img">
                                                                                                Panasonic
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="43-sound-intone.html"
                                                                                                title="Sound Intone"
                                                                                                data-rel="sub-43"
                                                                                                class="img">
                                                                                                Sound Intone
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="44-jelly-comb.html"
                                                                                                title="Jelly Comb"
                                                                                                data-rel="sub-44"
                                                                                                class="img">
                                                                                                Jelly Comb
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="widget-content">
                                                                            <div class="widget-subcategories block ">
                                                                                <div class="widget-heading title_block">
                                                                                    <a href="7-accessories.html"
                                                                                        title="Accessories" class="img">
                                                                                        Accessories
                                                                                    </a>
                                                                                    <span
                                                                                        class="caretmobile hidden"></span>
                                                                                </div>
                                                                                <div class="widget-inner block_content">
                                                                                    <div class="widget-heading hidden">
                                                                                        <a href="7-accessories.html"
                                                                                            title="Accessories"
                                                                                            class="img">Accessories</a>
                                                                                        <span
                                                                                            class="caretmobile hidden"></span>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li class="clearfix">
                                                                                            <a href="46-mobiles.html"
                                                                                                title="Mobiles"
                                                                                                data-rel="sub-46"
                                                                                                class="img">
                                                                                                Mobiles
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="47-tablets.html"
                                                                                                title="Tablets"
                                                                                                data-rel="sub-47"
                                                                                                class="img">
                                                                                                Tablets
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="48-laptops.html"
                                                                                                title="Laptops"
                                                                                                data-rel="sub-48"
                                                                                                class="img">
                                                                                                Laptops
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="49-computers.html"
                                                                                                title="Computers"
                                                                                                data-rel="sub-49"
                                                                                                class="img">
                                                                                                Computers
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="50-televisions.html"
                                                                                                title="Televisions"
                                                                                                data-rel="sub-50"
                                                                                                class="img">
                                                                                                Televisions
                                                                                            </a>
                                                                                        </li>
                                                                                        <li class="clearfix">
                                                                                            <a href="51-macbook.html"
                                                                                                title="Macbook"
                                                                                                data-rel="sub-51"
                                                                                                class="img">
                                                                                                Macbook
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class=" "><a target="_self" data-rel="7"
                                                            href="{{route('contact')}}"><span
                                                                class="menu-title">Contact Us</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="dor-header-setting-inner col-md-2">

                                <div class="head-dorsetting pull-right">

                                    <nav class="header-nav">
                                        <div class="hidden-sm-down-">
                                            <div class="right-nav">
                                                <div class="nav-search-button hidden"><button type="button"><i
                                                            class="pe-7s-search"></i></button></div>


                                                <div class="user-info selection-options-wrapper">
                                                    <label class="hidden">Account</label>
                                                    <span class="line-selected hidden"><i class="far fa-user-circle"
                                                            style="font-size: 3rem;"></i><span
                                                            class="select-hidden hidden">Account</span></span>
                                                    <ul class="toogle_content">


                                                        @auth
                                                            <li><a class="link-myaccount" href="my-account"
                                                                    title="View my customer account"><i
                                                                        class="fas fa-user-circle"></i>My account</a></li>
                                                            <li><a class="link-wishlist wishlist_block"
                                                                    href="logincefa.html" title="My wishlist"><i
                                                                        class="far fa-heart"></i>My wishlist</a></li>
                                                            <li>
                                                                <a class="link-mycart" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                                                    title="My cart">
                                                                    <i class="fas fa-sign-out-alt"></i>Log Out</a>

                                                                <form id="logout-form" action="{{ route('logout') }}"
                                                                    method="POST" class="d-none">
                                                                    @csrf
                                                                </form>

                                                            </li>
                                                        @endauth

                                                        @guest
                                                            <li><a href="{{ route('login') }}" class=""><i
                                                                        class="fas fa-sign-out-alt"></i>Sign in </a>
                                                            </li>
                                                            <li><a href="{{ route('register') }}" class=""><i
                                                                        class="fas fa-sign-in-alt"></i>Sign up </a>
                                                            </li>
                                                        @endguest





                                                    </ul>
                                                </div>




                                                <div class="nav-cart">
                                                    <div id="_desktop_cart">
                                                        <div class="blockcart cart-preview"
                                                            data-refresh-url="//bionic.doradothemes.com/en/module/ps_shoppingcart/ajax">
                                                            <div class="header">
                                                                <a rel="nofollow" href="cart75f4.html?action=show">
                                                                    <i class="fas fa-shopping-cart"
                                                                        style="font-size: 3rem;"></i>
                                                                    <span class="hidden-sm-down hidden">Cart</span>
                                                                    <span class="cart-products-count">0</span>
                                                                </a>
                                                            </div>
                                                            <div class="body none-minicart">
                                                                <button type="button" id="close-mini-cart"><i
                                                                        class="pe-7s-close"></i></button>
                                                                <div class="header-title-mini-cart">
                                                                    <div class="header-mini-cart-text">
                                                                        <h2>Bionic</h2>
                                                                    </div>
                                                                </div>
                                                                <div id="cart-mini-content-lists"
                                                                    class="scroll-div-cart">
                                                                    <ul class="minicart-product-lists">
                                                                    </ul>
                                                                    <div class="mini-cart-footer">
                                                                        <div class="cart-subtotals">
                                                                            <div class="products">
                                                                                <span class="label">Subtotal</span>
                                                                                <span class="value">$0.00</span>
                                                                            </div>
                                                                            <div class="shipping">
                                                                                <span class="label">Shipping</span>
                                                                                <span class="value">Free</span>
                                                                            </div>
                                                                            <div class="tax">
                                                                                <span class="label">Taxes</span>
                                                                                <span class="value">$0.00</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cart-total">
                                                                            <span class="label">Total</span>
                                                                            <span class="value">$0.00</span>
                                                                        </div>
                                                                        <div class="button-act-minicart">
                                                                            <a rel="nofollow"
                                                                                href="cart75f4.html?action=show"
                                                                                class="mini-cart-view clearfix">View
                                                                                cart</a>
                                                                            <a rel="nofollow" href="cart.html"
                                                                                class="mini-cart-checkout clearfix">Checkout</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="no-item-cart">
                                                                        <span class="no-items">There are no more items
                                                                            in your cart</span>
                                                                    </div>

                                                                    <div class="no-item-cart-ajax hidden">
                                                                        <span class="no-items">There are no more items
                                                                            in your cart</span>
                                                                    </div>

                                                                    <div id="custom-block-mini-cart">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="pull-xs-right" id="_mobile_cart"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden-md-up text-xs-center mobile hidden">
                                            <div class="pull-xs-left" id="menu-icon">
                                                <i class="material-icons d-inline">&#xE5D2;</i>
                                            </div>
                                            <div class="pull-xs-right" id="_mobile_user_info"></div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </nav>

                                </div>
                            </div>
                        </div>
                        <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
                            <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                            <div class="js-top-menu-bottom">
                                <div id="_mobile_contact_link"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-piz-line no-padding">
                    <div class="container">
                        <div class="row">
                            <div id="dor-verticalmenu" class="block block-info nopadding closes">

                                <div class="dor-vertical-title">
                                    <div class="vertical-menu-head">
                                        <div class="vertical-menu-head-inner">
                                            <div class="vertical-menu-head-wrapper">
                                                <div class="fa-icon-menu"><i class="fas fa-caret-down"></i></div>
                                                <h3 class="dor_title_block"><span>Shop by Category</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dor-verticalmenu block_content">
                                    <div class="navbar navbar-default">
                                        <div class="controll-vertical-mobile clearfix hidden">
                                            <div class="navbar-header vertical-menu-header hidden">
                                                <button type="button" class="navbar-toggle open_menu">
                                                    <i class="material-icons">&#xE8FE;</i>
                                                </button>
                                            </div>
                                            <div class="close_menu_vertical" style="display:none;">
                                                <span class="btn-close"><i class="material-icons">&#xE14C;</i></span>
                                            </div>
                                            <div class="mobile-logo-menu hidden-lg hidden-md">
                                                <a href="{{config('app.url')}}/" title="Bionic Store">
                                                    <img class="logo img-responsive" src="asset('/img/logo-menu.png"
                                                        alt="Bionic Store" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="verticalmenu" role="navigation">
                                            <div class="navbar-header">
                                                <div class="navbar-collapse navbar-ex1-collapse">
                                                    <ul class="nav navbar-nav verticalmenu">
                                                        <li class="bold "><a target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons"></i></span><span
                                                                    class="menu-title">Hot of the Day</span><span
                                                                    class="menu-label-hot"><span>hot</span></span></a>
                                                        </li>
                                                        <li class=" parent dropdown aligned-left"><a
                                                                class="dropdown-toggle-" data-toggle="dropdown-"
                                                                target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons"></i></span><span
                                                                    class="menu-title">Computers &
                                                                    Laptops</span></a><span
                                                                class="expand dropdown-toggle" data-toggle="dropdown"><b
                                                                    class="caret"></b></span>
                                                            <ul class="dropdown-menu level1 verticalmenu-content"
                                                                role="menu"
                                                                style="background-image:url(../img/cms/dorado/menu/ver_bg_computer.png);background-repeat:no-repeat;width:750px;">
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="widget-content">
                                                                                <div class="widget-links block">
                                                                                    <div
                                                                                        class="widget-heading title_block">
                                                                                        Computers
                                                                                    </div>
                                                                                    <div
                                                                                        class="widget-inner block_content">
                                                                                        <div id="tabs1334605578"
                                                                                            class="panel-group">
                                                                                            <ul class="nav-links"
                                                                                                data-id="myTab">

                                                                                                <li><a
                                                                                                        href="3-shop.html">Mac
                                                                                                        Computer</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Windows
                                                                                                        Computer</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">PC
                                                                                                        Computer</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">All
                                                                                                        In One</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Desktops</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Microsof
                                                                                                        Surface</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="widget-content">
                                                                                <div class="widget-links block">
                                                                                    <div
                                                                                        class="widget-heading title_block">
                                                                                        Laptops &amp; Notebook
                                                                                    </div>
                                                                                    <div
                                                                                        class="widget-inner block_content">
                                                                                        <div id="tabs680683121"
                                                                                            class="panel-group">
                                                                                            <ul class="nav-links"
                                                                                                data-id="myTab">

                                                                                                <li><a
                                                                                                        href="3-shop.html">Apple
                                                                                                        Mackbook</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Microsoft
                                                                                                        Surfacebook</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Lenovo
                                                                                                        Thinkpad</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Samsung
                                                                                                        Laptops</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Xiaomi
                                                                                                        Notebook</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="{{config('app.url')}}/store2/en/3-shop">Chromebooks</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class=" parent dropdown aligned-left"><a
                                                                class="dropdown-toggle-" data-toggle="dropdown-"
                                                                target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons"></i></span><span
                                                                    class="menu-title">Cameras & Photo</span></a><span
                                                                class="expand dropdown-toggle" data-toggle="dropdown"><b
                                                                    class="caret"></b></span>
                                                            <ul class="dropdown-menu level1 verticalmenu-content"
                                                                role="menu"
                                                                style="background-image:url(../img/cms/dorado/menu/ver_bg_camera.png);background-repeat:no-repeat;width:750px;">
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="widget-content">
                                                                                <div class="widget-links block">
                                                                                    <div
                                                                                        class="widget-heading title_block">
                                                                                        Cameras &amp; Photography
                                                                                    </div>
                                                                                    <div
                                                                                        class="widget-inner block_content">
                                                                                        <div id="tabs1229766884"
                                                                                            class="panel-group">
                                                                                            <ul class="nav-links"
                                                                                                data-id="myTab">

                                                                                                <li><a
                                                                                                        href="3-shop.html">All
                                                                                                        Cameras &amp;
                                                                                                        Photography</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Digital
                                                                                                        SLRs</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Point
                                                                                                        &amp; Shoot
                                                                                                        Cameras</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Lenses</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Camera
                                                                                                        Accessories</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Security
                                                                                                        &amp;
                                                                                                        Surveillance</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Binoculars
                                                                                                        &amp;
                                                                                                        Telescopes</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Camcorders</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="widget-content">
                                                                                <div class="widget-links block">
                                                                                    <div
                                                                                        class="widget-heading title_block">
                                                                                        The Best Cameras
                                                                                    </div>
                                                                                    <div
                                                                                        class="widget-inner block_content">
                                                                                        <div id="tabs1827528805"
                                                                                            class="panel-group">
                                                                                            <ul class="nav-links"
                                                                                                data-id="myTab">

                                                                                                <li><a
                                                                                                        href="3-shop.html">Nikon
                                                                                                        D850</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Fujifilm
                                                                                                        X-T2</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Sony
                                                                                                        Alpha A9</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Olympus
                                                                                                        OM-D E-M10 Mark
                                                                                                        II</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Panasonic
                                                                                                        Lumix ZS100</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Canon
                                                                                                        EOS Rebel
                                                                                                        T7i</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">GoPro
                                                                                                        Hero5 Black</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class=" parent dropdown aligned-left"><a
                                                                class="dropdown-toggle-" data-toggle="dropdown-"
                                                                target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons"></i></span><span
                                                                    class="menu-title">Smart Phones & Tablets
                                                                </span></a><span class="expand dropdown-toggle"
                                                                data-toggle="dropdown"><b class="caret"></b></span>
                                                            <ul class="dropdown-menu level1 verticalmenu-content"
                                                                role="menu"
                                                                style="background-image:url(../img/cms/dorado/menu/ver_bg_smartphone.png);background-repeat:no-repeat;width:650px;">
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="widget-content">
                                                                                <div class="widget-links block">
                                                                                    <div
                                                                                        class="widget-heading title_block">
                                                                                        Mobiles &amp; Tablets
                                                                                    </div>
                                                                                    <div
                                                                                        class="widget-inner block_content">
                                                                                        <div id="tabs1062322817"
                                                                                            class="panel-group">
                                                                                            <ul class="nav-links"
                                                                                                data-id="myTab">

                                                                                                <li><a
                                                                                                        href="3-shop.html">All
                                                                                                        Mobile
                                                                                                        Phones</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Smartphones</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">IOS
                                                                                                        Mobiles</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Android
                                                                                                        Mobiles</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Windows
                                                                                                        Mobiles</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Refurbished
                                                                                                        Mobiles</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Mobile
                                                                                                        Accessories</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Cases
                                                                                                        &amp; Covers</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="widget-content">
                                                                                <div class="widget-links block">
                                                                                    <div
                                                                                        class="widget-inner block_content">
                                                                                        <div id="tabs1284846901"
                                                                                            class="panel-group">
                                                                                            <ul class="nav-links"
                                                                                                data-id="myTab">

                                                                                                <li><a
                                                                                                        href="3-shop.html">All
                                                                                                        Tablets</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Tablet
                                                                                                        Accessories</a>
                                                                                                </li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Landline
                                                                                                        Phones</a></li>

                                                                                                <li><a
                                                                                                        href="3-shop.html">Wearable
                                                                                                        Devices</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class=" "><a target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons"></i></span><span
                                                                    class="menu-title">TV & Audio</span></a></li>
                                                        <li class=" "><a target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons"></i></span><span
                                                                    class="menu-title">Games & Consoles</span></a></li>
                                                        <li class=" "><a target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons"></i></span><span
                                                                    class="menu-title">Smart Watch &
                                                                    Wearables</span></a></li>
                                                        <li class=" "><a target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons"></i></span><span
                                                                    class="menu-title">Car Electronic & Auto</span></a>
                                                        </li>
                                                        <li class=" "><a target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons"></i></span><span
                                                                    class="menu-title">Accesories</span></a></li>
                                                        <li class=" "><a target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons">wb_sunny</i></span><span
                                                                    class="menu-title">Gadgets</span></a></li>
                                                        <li class=" "><a target="_self" href="#"><span
                                                                    class="menu-icon material-icon"><i
                                                                        class="material-icons">3d_rotation</i></span><span
                                                                    class="menu-title">Virtual Reality</span></a></li>
                                                    </ul>
                                                    <div class="show-more-ver-menu">
                                                        <a href="#"><span class="show-more">More Categories</span><span
                                                                class="hidden hide-more">Hide Categories</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- pos search module TOP -->
                            <div id="dor_search_top"
                                class="center_column col-lg-4 col-md-4 col-xs-12 col-sm-12 clearfix">
                                <form method="get" action="#" id="searchbox" class="form-inline">
                                    <div class="dor_search form-group">
                                        <input class="search_query form-control" type="text" id="dor_query_top"
                                            name="search_query" value="" placeholder="Type your search here..."
                                            autocomplete="off" />
                                        <div class="pos_search form-group no-uniform ">
                                            <div class="choose-category-lists">
                                                <div class="choose-category-lists-inner">
                                                    <div class="choose-category-lists-wrapper">
                                                        <div class="choose-category-lists-content">
                                                            <span data-bind="label">All Category</span>&nbsp;<span
                                                                class="caret"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="dropdown-menu search-category-lists scroll-div" role="menu">
                                                <li><a href="#" data-value="0">All Category</a></li>
                                                <li><a href="#" data-value="2">&ndash;Home </a></li>
                                                <li><a href="#" data-value="3">&ndash;&ndash;Shop </a></li>
                                                <li><a href="#" data-value="4">&ndash;&ndash;&ndash;Cellphone </a></li>
                                                <li><a href="#" data-value="18">&ndash;&ndash;&ndash;&ndash;Apple
                                                        Mobiles </a></li>
                                                <li><a href="#" data-value="19">&ndash;&ndash;&ndash;&ndash;Samsung
                                                        Mobiles </a></li>
                                                <li><a href="#" data-value="20">&ndash;&ndash;&ndash;&ndash;Huawei
                                                        Mobiles </a></li>
                                                <li><a href="#" data-value="21">&ndash;&ndash;&ndash;&ndash;Nokia
                                                        Mobiles </a></li>
                                                <li><a href="#" data-value="22">&ndash;&ndash;&ndash;&ndash;Pixel
                                                        Mobiles </a></li>
                                                <li><a href="#" data-value="23">&ndash;&ndash;&ndash;&ndash;Sony Mobiles
                                                    </a></li>
                                                <li><a href="#" data-value="24">&ndash;&ndash;&ndash;&ndash;HTC Mobiles
                                                    </a></li>
                                                <li><a href="#" data-value="8">&ndash;&ndash;&ndash;Computers & Tablets
                                                    </a></li>
                                                <li><a href="#" data-value="9">&ndash;&ndash;&ndash;&ndash;Laptops </a>
                                                </li>
                                                <li><a href="#" data-value="10">&ndash;&ndash;&ndash;&ndash;Desktops
                                                    </a></li>
                                                <li><a href="#" data-value="11">&ndash;&ndash;&ndash;&ndash;Ultrabooks
                                                    </a></li>
                                                <li><a href="#" data-value="14">&ndash;&ndash;&ndash;&ndash;Tablets </a>
                                                </li>
                                                <li><a href="#" data-value="15">&ndash;&ndash;&ndash;&ndash;All In One
                                                    </a></li>
                                                <li><a href="#" data-value="16">&ndash;&ndash;&ndash;&ndash;Keyboard &
                                                        Mouse </a></li>
                                                <li><a href="#" data-value="17">&ndash;&ndash;&ndash;&ndash;Monitors &
                                                        Cards </a></li>
                                                <li><a href="#" data-value="5">&ndash;&ndash;&ndash;Smartwatch </a></li>
                                                <li><a href="#" data-value="25">&ndash;&ndash;&ndash;&ndash;Apple
                                                        Watches </a></li>
                                                <li><a href="#" data-value="26">&ndash;&ndash;&ndash;&ndash;Samsung
                                                        Watches </a></li>
                                                <li><a href="#" data-value="27">&ndash;&ndash;&ndash;&ndash;Moto 360
                                                        Watches </a></li>
                                                <li><a href="#" data-value="28">&ndash;&ndash;&ndash;&ndash;Sony Watches
                                                    </a></li>
                                                <li><a href="#" data-value="29">&ndash;&ndash;&ndash;&ndash;ASUS
                                                        ZenWatch </a></li>
                                                <li><a href="#" data-value="30">&ndash;&ndash;&ndash;&ndash;Huawei
                                                        Watches </a></li>
                                                <li><a href="#" data-value="31">&ndash;&ndash;&ndash;&ndash;Pebble Time
                                                    </a></li>
                                                <li><a href="#" data-value="7">&ndash;&ndash;&ndash;Accessories </a>
                                                </li>
                                                <li><a href="#" data-value="46">&ndash;&ndash;&ndash;&ndash;Mobiles </a>
                                                </li>
                                                <li><a href="#" data-value="47">&ndash;&ndash;&ndash;&ndash;Tablets </a>
                                                </li>
                                                <li><a href="#" data-value="48">&ndash;&ndash;&ndash;&ndash;Laptops </a>
                                                </li>
                                                <li><a href="#" data-value="49">&ndash;&ndash;&ndash;&ndash;Computers
                                                    </a></li>
                                                <li><a href="#" data-value="50">&ndash;&ndash;&ndash;&ndash;Televisions
                                                    </a></li>
                                                <li><a href="#" data-value="51">&ndash;&ndash;&ndash;&ndash;Macbook </a>
                                                </li>
                                                <li><a href="#" data-value="52">&ndash;&ndash;&ndash;&ndash;Surface </a>
                                                </li>
                                                <li><a href="#" data-value="12">&ndash;&ndash;&ndash;Televisions </a>
                                                </li>
                                                <li><a href="#" data-value="32">&ndash;&ndash;&ndash;&ndash;Samsung
                                                        Electronics </a></li>
                                                <li><a href="#" data-value="33">&ndash;&ndash;&ndash;&ndash;LG
                                                        Electronics </a></li>
                                                <li><a href="#" data-value="34">&ndash;&ndash;&ndash;&ndash;Sony
                                                        Electronics </a></li>
                                                <li><a href="#" data-value="35">&ndash;&ndash;&ndash;&ndash;TCL
                                                        Electronics </a></li>
                                                <li><a href="#" data-value="36">&ndash;&ndash;&ndash;&ndash;Sharp
                                                        Electronics </a></li>
                                                <li><a href="#" data-value="37">&ndash;&ndash;&ndash;&ndash;LeEco
                                                        Electronics </a></li>
                                                <li><a href="#" data-value="38">&ndash;&ndash;&ndash;&ndash;Toshiba
                                                        Electronics </a></li>
                                                <li><a href="#" data-value="13">&ndash;&ndash;&ndash;Headphones </a>
                                                </li>
                                                <li><a href="#" data-value="39">&ndash;&ndash;&ndash;&ndash;Apple Beat
                                                    </a></li>
                                                <li><a href="#" data-value="40">&ndash;&ndash;&ndash;&ndash;Sennheiser
                                                    </a></li>
                                                <li><a href="#" data-value="41">&ndash;&ndash;&ndash;&ndash;Samsung </a>
                                                </li>
                                                <li><a href="#" data-value="42">&ndash;&ndash;&ndash;&ndash;Panasonic
                                                    </a></li>
                                                <li><a href="#" data-value="43">&ndash;&ndash;&ndash;&ndash;Sound Intone
                                                    </a></li>
                                                <li><a href="#" data-value="44">&ndash;&ndash;&ndash;&ndash;Jelly Comb
                                                    </a></li>
                                                <li><a href="#" data-value="45">&ndash;&ndash;&ndash;&ndash;AmazonBasics
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <button type="submit" name="submit_search" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                    <label for="dor_query_top"></label>
                                    <input type="hidden" name="controller" value="search" />
                                    <input type="hidden" name="orderby" value="position" />
                                    <input type="hidden" name="orderby" value="categories" />
                                    <input type="hidden" name="orderway" value="desc" />
                                    <input type="hidden" name="valSelected" value="0" />
                                </form>
                            </div>
                            <!-- /pos search module TOP -->


                            <a href="order-tracking.html" class="order-tracking-top-link"><i
                                    class="fab fa-usps"></i><span>Track Your Order</span></a>
                        </div>
                    </div>
                </div>


            </div>


        </header>


        <aside id="notifications">
            <div class="container">



            </div>
        </aside>


        <!-- Block Banner Show -->

        <!-- End Block Banner Show -->











        <section id="wrapper" style="min-height: 500px">
            @yield('content')
        </section>

        <footer id="footer">



            <div id="loginFormSmart" class="dor-formsmart">
                <span class="button b-close"><span>X</span></span>
                <form id="login-form" action="{{config('app.url')}}/login" method="post">
                    <h2 class="title-heading"><img src="../modules/dor_smartuser/img/logo.png" alt=""></h2>
                    <h3>WELCOME TO OUR WONDERFUL WORLD</h3>
                    <p class="smart-sign-txt">Did you know that we ship to over <span>24 different countries</span></p>

                    <section>
                        <input name="back" value="my-account" type="hidden">
                        <a href="#" class="smart-fb-btn btn"> <i class="fa fa-facebook btn-icon"></i>Login with
                            Facebook</a>
                        <p class="line-smart signup"> OR SIGN IN </p>
                        <div class="form-group row ">
                            <label class="col-md-3 form-control-label required hidden">
                                Email
                            </label>
                            <div class="col-md-12">
                                <input class="form-control" name="email" value="" required="" type="email"
                                    placeholder="Email">
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-md-3 form-control-label required hidden">Password</label>
                            <div class="col-md-12">
                                <div class="input-group js-parent-focus">
                                    <input class="form-control js-child-focus js-visible-password" name="password"
                                        value="" required="" type="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="smartdor-footer form-footer text-xs-center clearfix">
                            <input name="submitLogin" value="1" type="hidden">
                            <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                <span class="fa fa-lightbulb-o"></span>Sign in
                            </button>
                        </div>
                        <div class="auth-dor-moreinfo clearfix hidden">
                            <p>* Denotes mandatory field.</p>
                            <p>** At least one telephone number is required.</p>
                        </div>
                        <div class="dor-button-connect">
                            <a href="#" onclick="return false" class="smartRegister reActLogReg"><i aria-hidden="true"
                                    class="fa fa-user-plus"></i> Register</a>
                            <a rel="nofollow" title="Recover your forgotten password" class="lost_password_smart"
                                onclick="return false" href="#"><i aria-hidden="true" class="fa fa-key"></i> Forgot your
                                password?</a>
                        </div>
                    </section>

                </form>
            </div>

            <div id="registerFormSmart" class="dor-formsmart">
                <span class="button b-close"><span>X</span></span>
                <form action="{{config('app.url')}}/login?create_account=1" id="customer-form"
                    class="js-customer-form" method="post">
                    <h2 class="title-heading"><img src="../modules/dor_smartuser/img/logo.png" alt=""></h2>
                    <h3>WELCOME TO OUR WONDERFUL WORLD</h3>
                    <p class="smart-sign-txt">Did you know that we ship to over <span>24 different countries</span></p>
                    <section>
                        <input name="id_customer" value="" type="hidden">
                        <a href="#" class="smart-fb-btn btn"> <i class="fa fa-facebook btn-icon"></i>Register with
                            Facebook</a>
                        <p class="line-smart signup"> OR SIGN UP </p>
                        <div class="form-group row hidden">
                            <label class="col-md-3 form-control-label">Social title</label>
                            <div class="col-md-12 form-control-valign">
                                <label class="radio-inline">
                                    <span class="custom-radio">
                                        <input name="id_gender" value="1" type="radio">
                                        <span></span>
                                    </span>
                                    Mr.
                                </label>
                                <label class="radio-inline">
                                    <span class="custom-radio">
                                        <input name="id_gender" value="2" type="radio">
                                        <span></span>
                                    </span>
                                    Mrs.
                                </label>
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="form-group form-group-smart row ">
                            <div class="col-md-6">
                                <div class="field-group-smart">
                                    <input class="form-control" placeholder="First name" name="firstname" value=""
                                        required="" type="text">
                                </div>
                                <div class="col-md-3 form-control-comment"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-group-smart">
                                    <input class="form-control" placeholder="Last name" name="lastname" value=""
                                        required="" type="text">
                                </div>
                                <div class="col-md-3 form-control-comment"></div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-md-3 form-control-label required hidden">Email</label>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Email" name="email" value="" required=""
                                    type="email">
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-md-3 form-control-label required hidden">Password</label>
                            <div class="col-md-12">
                                <div class="input-group js-parent-focus">
                                    <input class="form-control js-child-focus js-visible-password"
                                        placeholder="Password" name="password" value="" required="" type="password">
                                </div>
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="form-group row hidden">
                            <label class="col-md-3 form-control-label">Birthdate</label>
                            <div class="col-md-12">
                                <input class="form-control" name="birthday" value="" placeholder="MM/DD/YYYY"
                                    type="text">
                                <span class="form-control-comment">
                                    (E.g.: 05/31/1970)
                                </span>
                            </div>
                            <div class="col-md-3 form-control-comment">Optional</div>
                        </div>
                        <div class="form-group row hidden">
                            <label class="col-md-3 form-control-label"></label>
                            <div class="col-md-12 hidden">
                                <span class="custom-checkbox">
                                    <input name="optin" value="1" type="checkbox">
                                    <span><i class="material-icons checkbox-checked"></i></span>
                                    <label>Receive offers from our partners</label>
                                </span>
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="form-group row hidden">
                            <label class="col-md-3 form-control-label">
                            </label>
                            <div class="col-md-12">
                                <span class="custom-checkbox">
                                    <input name="newsletter" value="1" type="checkbox">
                                    <span><i class="material-icons checkbox-checked"></i></span>
                                    <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that
                                            purpose, please find our contact info in the legal notice.</em></label>
                                </span>
                            </div>
                            <div class="col-md-3 form-control-comment"></div>
                        </div>
                        <div class="smartdor-footer form-footer clearfix">
                            <input name="submitCreate" value="1" type="hidden">
                            <label class="col-md-3 form-control-label"></label>
                            <button class="btn btn-primary form-control-submit pull-xs-left"
                                data-link-action="save-customer" type="submit">
                                <i class="fa fa-user-plus"></i>Sign up
                            </button>
                        </div>
                        <div class="dor-button-connect clearfix">
                            <a href="#" onclick="return false" class="smartLogin reActLogReg"> <i
                                    class="fa fa-lightbulb-o"></i> Login</a>
                            <a rel="nofollow" title="Recover your forgotten password" class="lost_password_smart"
                                onclick="return false" href="#"><i aria-hidden="true" class="fa fa-key"></i> Forgot your
                                password?</a>
                        </div>
                    </section>
                </form>
            </div>
            <div id="smartForgotPass" class="dor-formsmart">
                <span class="button b-close"><span>X</span></span>
                <div class="center_column" id="center_column_smart">
                    <div class="box">
                        <form action="{{config('app.url')}}/password-recovery" method="post">
                            <h2 class="title-heading"><img src="../modules/dor_smartuser/img/logo.png" alt=""></h2>
                            <h3>WELCOME TO OUR WONDERFUL WORLD</h3>
                            <p class="smart-sign-txt">Did you know that we ship to over <span>24 different
                                    countries</span></p>
                            <div class="smartdor-header">
                                <p>Please enter the email address you used to register. You will receive a temporary
                                    link to reset your password.</p>
                            </div>
                            <section class="form-fields">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required hidden">Email address</label>
                                    <div class="col-md-12">
                                        <input name="email" id="email" value="" placeholder="Email address"
                                            class="form-control" required="" type="email">
                                    </div>
                                </div>
                                <div class="smartdor-footer form-footer text-xs-center">
                                    <button class="form-control-submit btn btn-primary" name="submit" type="submit">
                                        <i class="fa fa-key" aria-hidden="true"></i> Retrieve Password
                                    </button>
                                </div>
                                <div class="dor-button-connect clearfix">
                                    <a href="#" onclick="return false" class="smartLogin reActLogReg"> <i
                                            class="fa fa-lightbulb-o"></i> Login</a>
                                    <a href="#" onclick="return false" class="smartRegister reActLogReg"><i
                                            aria-hidden="true" class="fa fa-user-plus"></i> Register</a>
                                </div>
                            </section>

                        </form>
                    </div>
                </div>
            </div>
            <div class="block_newsletter col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="title-block text-center">
                            <h2>Join our newsletter</h2>
                            <p>Sign up for our newsletter and get&nbsp;<span>20% off</span>&nbsp;your next order. Pretty
                                sweet, we know.</p>
                        </div>
                        <form id="main-newsletter-footer" action="#" method="post">
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="btn btn-primary pull-xs-right hidden-xs-down" name="submitNewsletter"
                                        type="submit" value="Subscribe">
                                    <input class="btn btn-primary pull-xs-right hidden-sm-up" name="submitNewsletter"
                                        type="submit" value="OK">
                                    <div class="input-wrapper">
                                        <input name="email" type="text" value="" placeholder="Type your email here">
                                    </div>
                                    <input type="hidden" name="action" value="0">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-xs-12">
                                    <p class="hidden">You may unsubscribe at any moment. For that purpose, please find
                                        our contact info in the legal notice.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="dor-our-newsletter" id="block_newsletter_footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-newsletter-fields">
                            <h4><i class="fa fa-send-o" aria-hidden="true"></i>Join Our Newsletter</h4>
                            <ul id="footer_newsletter_block" class="col-lg-5 col-sm-7 col-xs-10">
                                <li class="item">
                                    <form id="newsletter-footer" action="{{config('app.url')}}/#footer"
                                        method="post">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="input-wrapper"><input name="email" value=""
                                                        placeholder="Type your email here" type="text" /></div>
                                                <input class="btn btn-primary pull-xs-right hidden-xs-down"
                                                    name="submitNewsletter" value="Subscribe" type="submit" /> <input
                                                    class="btn btn-primary pull-xs-right hidden-sm-up"
                                                    name="submitNewsletter" value="OK" type="submit" /> <input
                                                    name="action" value="0" type="hidden" />
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            <p>sign up for our newsletter and get <span>25%</span> off your next order. Pretty sweet, we
                                know</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dor-main-footer">
                <div class="container">
                    <div class="row">


                        <div class="block-social col-lg-4 col-md-12 col-sm-12">
                            <ul>
                            </ul>
                        </div>



                    </div>
                </div>
                <div class="footer-container dorFooterInner">
                    <div class="container">
                        <div class="row">

                            <section class="footer-group-link footer-block col-xs-12 col-sm-4"
                                id="block_contact_footer">
                                <h4 class="hidden-sm-down hidden">Our Store</h4>
                                <div class="title clearfix hidden-md-up" data-target="#footer_contact_block"
                                    data-toggle="collapse"><span class="h3">Our Store</span> <span
                                        class="pull-xs-right"> <span class="navbar-toggler collapse-icons"> <i
                                                class="material-icons add"></i> <i class="material-icons remove"></i>
                                        </span> </span></div>
                                <ul class="toggle-footer collapse" id="footer_contact_block">
                                    <li class="item logo-footer"><a href="{{config('app.url')}}/"
                                            title="Wiliam Store"><img src="../img/cms/dorado/bionic-store-footer.png"
                                                alt="" width="139" height="34" /></a></li>
                                    <li class="item">

                                        <div class="footer-our-store"><i class="fas fa-question" style="    position: absolute;
                                            transform: translate(10px, 15px);
                                            font-size: 130%;"></i><span class="pe-7s-headphones"> </span>
                                            <div class="our-store-info">
                                                <h5>Get Question ? Contact Us 24/7</h5>
                                                <p>(+60) 6789 6789 / 6666 8888</p>
                                                <p>contact@bionic.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item contact-us-info-footer">
                                        <h5>Contact Info</h5>
                                        <p>Bionic London Oxford Street 1000 United Kingdom</p>
                                    </li>
                                </ul>
                            </section>
                            <section class="footer-group-link footer-block col-xs-12 col-sm-3"
                                id="block_quickshop_links_footer">
                                <h4 class="hidden-sm-down">Quick Shop</h4>
                                <div class="title clearfix hidden-md-up" data-target="#footer_quickshop_block"
                                    data-toggle="collapse"><span class="h3">Quick Shop</span> <span
                                        class="pull-xs-right"> <span class="navbar-toggler collapse-icons"> <i
                                                class="material-icons add"></i> <i class="material-icons remove"></i>
                                        </span> </span></div>
                                <ul class="toggle-footer collapse" id="footer_quickshop_block">
                                    <li class="item"><a href="#" title="Clothing">Clothing</a></li>
                                    <li class="item"><a href="#" title="Jewellery">Jewellery</a></li>
                                    <li class="item"><a href="#" title="Shoes">Shoes</a></li>
                                    <li class="item"><a href="#" title="Accessories">Accessories</a></li>
                                    <li class="item"><a href="#" title="Collections">Collections</a></li>
                                    <li class="item"><a href="#" title="Hot Sales">Hot Sales</a></li>
                                </ul>
                            </section>
                            <section class="footer-group-link footer-block col-xs-12 col-sm-3"
                                id="block_infomation_links_footer">
                                <h4 class="hidden-sm-down">Information</h4>
                                <div class="title clearfix hidden-md-up" data-target="#footer_infomation"
                                    data-toggle="collapse"><span class="h3">Information</span> <span
                                        class="pull-xs-right"> <span class="navbar-toggler collapse-icons"> <i
                                                class="material-icons add"></i> <i class="material-icons remove"></i>
                                        </span> </span></div>
                                <ul class="toggle-footer collapse" id="footer_infomation">
                                    <li class="item"><a href="#" title="My account">My account</a></li>
                                    <li class="item"><a href="#" title="Order history">Order history</a></li>
                                    <li class="item"><a href="#" title="Wishlist">Wishlist</a></li>
                                    <li class="item"><a href="#" title="Returns">Returns</a></li>
                                    <li class="item"><a href="#" title="Privacy policy">Privacy policy</a></li>
                                    <li class="item"><a href="#" title="Site map">Site map</a></li>
                                </ul>
                            </section>
                            <section class="footer-group-link footer-block col-xs-12 col-sm-3"
                                id="block_ourpolicy_links_footer">
                                <h4 class="hidden-sm-down">Our Policy</h4>
                                <div class="title clearfix hidden-md-up" data-target="#footer_ourpolicy"
                                    data-toggle="collapse"><span class="h3">Our Policy</span> <span
                                        class="pull-xs-right"> <span class="navbar-toggler collapse-icons"> <i
                                                class="material-icons add"></i> <i class="material-icons remove"></i>
                                        </span> </span></div>
                                <ul class="toggle-footer collapse" id="footer_ourpolicy">
                                    <li class="item"><a href="#" title="Help & Contact">Help & Contact</a></li>
                                    <li class="item"><a href="#" title="Shipping & taxes">Shipping & taxes</a></li>
                                    <li class="item"><a href="#" title="Return policy">Return policy</a></li>
                                    <li class="item"><a href="#" title="About Us">About Us</a></li>
                                    <li class="item"><a href="#" title="Affiliates">Affiliates</a></li>
                                    <li class="item"><a href="#" title="Legal Notice">Legal Notice</a></li>
                                </ul>
                            </section>


                        </div>
                        <div class="row">



                        </div>
                    </div>
                </div>
                <div class="doradoFooterAdv clearfix">
                    <div class="container">
                        <div class="row">

                            <div class="footer-copyright-payment clearfix">
                                <div class="footer-bottom-info-wapper clearfix">
                                    <div class="col-lg-6 col-sm-6 col-sx-12">Copyright 2018 <a
                                            href="http://doradothemes.com/" title="Dorado Themes">Bionic</a> - All
                                        Rights Reserved</div>
                                    <div class="col-lg-6 col-sm-6 col-sx-12 pull-right  footer-payment-line">
                                        <div class="payment">
                                            <ul>
                                                <li><a href="#"><img src="../img/cms/dorado/payment/payment-01.png"
                                                            alt="" width="46" height="28" /></a></li>
                                                <li><a href="#"><img src="../img/cms/dorado/payment/payment-02.png"
                                                            alt="" width="46" height="28" /></a></li>
                                                <li><a href="#"><img src="../img/cms/dorado/payment/payment-03.png"
                                                            alt="" width="46" height="28" /></a></li>
                                                <li><a href="#"><img src="../img/cms/dorado/payment/payment-04.png"
                                                            alt="" width="46" height="28" /></a></li>
                                                <li><a href="#"><img src="../img/cms/dorado/payment/payment-05.png"
                                                            alt="" width="46" height="28" /></a></li>
                                                <li><a href="#"><img src="../img/cms/dorado/payment/payment-06.png"
                                                            alt="" width="46" height="28" /></a></li>
                                                <li><a href="#"><img src="../img/cms/dorado/payment/payment-07.png"
                                                            alt="" width="46" height="28" /></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </main>
    <div class="dor-page-loading">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <script type="text/javascript" src="{{ asset('js/bottom.js') }}"></script>



    <script type="text/javascript">
        // $(document).ready(function() {
        //     plugins = new Object;
        //     plugins.adobe_director = (PluginDetect.getVersion("Shockwave") != null) ? 1 : 0;
        //     plugins.adobe_flash = (PluginDetect.getVersion("Flash") != null) ? 1 : 0;
        //     plugins.apple_quicktime = (PluginDetect.getVersion("QuickTime") != null) ? 1 : 0;
        //     plugins.windows_media = (PluginDetect.getVersion("WindowsMediaPlayer") != null) ? 1 : 0;
        //     plugins.sun_java = (PluginDetect.getVersion("java") != null) ? 1 : 0;
        //     plugins.real_player = (PluginDetect.getVersion("RealPlayer") != null) ? 1 : 0;

        //     navinfo = {
        //         screen_resolution_x: screen.width,
        //         screen_resolution_y: screen.height,
        //         screen_color: screen.colorDepth
        //     };
        //     for (var i in plugins)
        //         navinfo[i] = plugins[i];
        //     navinfo.type = "navinfo";
        //     navinfo.id_guest = "2646530";
        //     navinfo.token = "c3d5f9a9aadfd065b0b70711a7d4e6b88c4f7b07";
        //     $.post("indexc3cb.html?controller=statistics", navinfo);
        // });

    </script>
    <script type="text/javascript">
        // var time_start;
        // $(window).load(
        //     function() {
        //         time_start = new Date();
        //     }
        // );
        // $(window).unload(
        //     function() {
        //         var time_end = new Date();
        //         var pagetime = new Object;
        //         pagetime.type = "pagetime";
        //         pagetime.id_connections = "2616273";
        //         pagetime.id_page = "1";
        //         pagetime.time_start = "2021-02-07 04:22:13";
        //         pagetime.token = "c74d54f6e35097a8ce4c9e85c809200912546b45";
        //         pagetime.time = time_end - time_start;
        //         $.post("indexc3cb.html?controller=statistics", pagetime);
        //     }
        // );



    </script>

    <!-- Subscribe Popup 1 -->
    <section class="subscribe-me">
        <a href="#close" onclick="return false" class="sb-close-btn close popup-cls b-close"><i
                class="fa-times fa"></i></a>
        <div class="modal-content subscribe-1 wht-clr">
            <div class="login-wrap text-center">
                <h2><i class="fa fa-send-o" aria-hidden="true"></i>Join Our Newsletter</h2>
                <p>sign up for our newsletter and get <span>25%</span> off your next order. Pretty sweet, we know</p>
                <div class="login-form spctop-30">
                    <form class="subscribe" action="#" method="post">
                        <div class="form-group">
                            <input class="inputNew form-control grey newsletter-input" id="dorNewsletter-input"
                                type="text" name="email" size="18" value="" placeholder="Your email address" />
                        </div>
                        <div class="form-group">
                            <button class="alt fancy-button" type="submit" name="submitNewsletter"> <span
                                    class="fa fa-envelope"></span> Subscribe </button>
                            <input type="hidden" name="action" value="0" />
                        </div>
                        <div class="form-group checkAgainSubs"><input type="checkbox" name="notShowSubs"> <span>Don't
                                show this popup again</span></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe Popup 1 -->
    <div id="to-top" class="to-top"> <i class="fa fa-angle-up"></i> </div>






    @yield('js')
</body>


<!-- Mirrored from bionic.doradothemes.com/en/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2021 09:23:19 GMT -->

</html>
