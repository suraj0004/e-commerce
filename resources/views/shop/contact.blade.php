@extends('layouts.shop.app')

@section('css')
    <link href="{{ asset('css/contact-form.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')
    <div class="container">
        <div class="row">




            <div id="content-wrapper" class="left-column col-md-12">


                <section id="main">




                    <section id="content" class="page-content card card-block">


                        <section id="contact-form-v1" class="contact-form">
                            <h1 class="h1">Contact Us</h1>
                            <div id="contact-form-style1">
                                <form action="http://bionic.doradothemes.com/en/contact-us" method="post"
                                    enctype="multipart/form-data">
                                    <fieldset>

                                        <div class="clearfix row">
                                            <label class="hidden">
                                                <span>Subject Heading</span>
                                                <select name="id_contact">
                                                    <option value="2">Customer service</option>
                                                    <option value="1">Webmaster</option>
                                                </select>
                                            </label>
                                            <div class="group-contact-form col-xs-12 col-sm-6 col-md-6">
                                                <div class="text-info-contact">
                                                    <h3 class="page-subheading">Send Massage</h3>
                                                </div>
                                                <div class="form-info-contact">
                                                    <p>If you have any questions, requests or suggestions? Please let us
                                                        know using the form below. We will reply as soon as possible to you.
                                                    </p>
                                                    <div class="form-group-input">
                                                        <div class="form-group">
                                                            <label for="contactname">Your name</label>
                                                            <input class="form-control grey" type="text" id="contactname"
                                                                name="contactname" value="" placeholder="" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Email address</label>
                                                            <input class="form-control" name="from" type="email" value=""
                                                                placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contactweb">Website</label>
                                                            <input class="form-control grey" type="text" id="contactweb"
                                                                name="contactweb" value="" placeholder="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group-area">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Message</label>
                                                            <textarea id="message" class="form-control" name="message"
                                                                placeholder="" rows="7"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="submit">
                                                        <button type="submit" name="submitMessage" id="submitMessage"
                                                            class="button btn btn-default button-medium"><span>Post
                                                                Comment<i
                                                                    class="icon-chevron-right right hidden"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="contact-map col-xs-12 col-sm-6 col-md-6">
                                                <div id="mapContact"
                                                    style="width:100%; height:350px; margin: auto; margin-top: 20px;"></div>
                                                <ul class="list-contact-info">
                                                    <li>
                                                        <i class="material-icons">&#xE55F;</i>
                                                        <div>
                                                            <h3>Address</h3>
                                                            <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <i class="material-icons">&#xE551;</i>
                                                        <div>
                                                            <h3>Phone</h3>
                                                            <p>Hotline: <strong>1900 585 888</strong></p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <i class="material-icons">&#xE0E1;</i>
                                                        <div>
                                                            <h3>Email</h3>
                                                            <p><a href="#">sale@bionic.com</a></p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <i class="material-icons">&#xE192;</i>
                                                        <div>
                                                            <p>Monday to Friday: 8h00 am - 17h00 pm</p>
                                                            <p>Saturday to Sunday: 9h00 am - 15h30 pm</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </section>


                    </section>



                    <footer class="page-footer">

                        <!-- Footer content -->

                    </footer>


                </section>


            </div>



        </div>
    </div>
@endsection

@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMH_Sh8EdCWkG1OFhAih3FFhbkRYuo-0U"></script>
<script src="{{asset('js/jquery.googlemap.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#mapContact").googleMap();
    $("#mapContact").addMarker({
        coords: [48.895651, 2.290569],
        icon: prestashop.urls.base_url+'img/cms/dorado/icon/market-map.png',
        url: 'http://doradothemes.com'
      });
  });
</script>
@endsection
