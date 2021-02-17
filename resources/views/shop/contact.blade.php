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
                                <form action="http:localhost:8000/contact-us" method="post"
                                    enctype="multipart/form-data" onsubmit="return contact_us_form()">
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
                                                    <h3 class="page-subheading">Send Message</h3>
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
                                                                <div class="text-danger" id="contactname_error"> </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-control-label">Email address</label>
                                                            <input class="form-control" name="from" type="text" value="" id="email"
                                                                placeholder="">
                                                                <div class="text-danger" id="email_error"></div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="contactweb">Website</label>
                                                            <input class="form-control grey" type="text" id="contactweb"
                                                                name="contactweb" value="" placeholder="" />
                                                                <div id="contact_web_error" class="text-danger"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-area">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Message</label>
                                                            <textarea id="message" class="form-control" name="message"
                                                                placeholder="" rows="7"></textarea>
                                                                <div id="message_error" class="text-danger"></div>
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

<script>
    function contact_us_form(){

        var a=document.getElementById("contactname");
        var b=document.getElementById("email");
        var c=document.getElementById("contactweb");
        var d=document.getElementById("message");
        var pattern= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(a.value==""){
            a.style="border:2px solid red;"

            document.getElementById("contactname_error").innerHTML="<h4>please enter your name</h4>";
            return false

        }
        if(a.value.length<2 || a.value.length>30){
            a.style="border:2px solid red;"
            document.getElementById("contactname_error").innerHTML="length must be between 2 and 30"
            return false
        }
        if(b.value==""){
            b.style="border:2px solid red;"
            document.getElementById("email_error").innerHTML="enter your email";

        return false
        }
         else if(!pattern.test(b.vlaue))
         {
            b.style="border:2px solid red;"
            document.getElementById("email_error").innerHTML="invalid";

        return false

        }






        // if((b.value).indexOf('@')<=0){
        //     b.style="border:2px solid red;"
        //     document.getElementById("email_error").innerHTML="invalid @ position";
        //     return false;
        // }
        // if((b.value).charAt(b.length-3)!='.'){
        //     b.style="border:2px solid red;"
        //     document.getElementById("email_error").innerHTML="invalid . position";
        //     return false;
        // }

        // //  }
        // if(b.value.indexOf('@')<1|| b.value.indexOf('.')<b.value.indexOf('@')+2||b.value.indexOf('.')+2>b.value.length){
        //     b.style="border:2px solid red;"
        //     document.getElementById("email_error").innerHTML="invalid email address";

        // }
        if(c.value==""){
            c.style="border:2px solid red;"
            document.getElementById("contact_web_error").innerHTML="please enter your website";
            return false
        }
        if(c.value.length<=7){
            c.style="border:2px solid red;"
            document.getElementById("contact_web_error").innerHTML="please enter correct website";
            return false

        }
        if(d.value==""){
            d.style="border:2px solid red;"
            document.getElementById("message_error").innerHTML="text area cannot be empty";
            return false
        }
        if((d.value).length<10){
            d.style="border:2px solid red;"
            document.getElementById("message_error").innerHTML="minimum 10 words are required";
            return false
        }
    }
</script>
@endsection
