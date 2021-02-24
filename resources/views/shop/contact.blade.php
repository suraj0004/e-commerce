@extends('layouts.shop.app')

@push('css')
    <link href="{{ asset('css/contact-form.css') }}" rel="stylesheet" type="text/css" />
@endpush

@endsection

@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Get in touch</h4>
									<h3>Write us a message</h3>
								</div>
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Subjects<span>*</span></label>
												<input name="subject" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="company_name" type="text" placeholder="">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>your message<span>*</span></label>
												<textarea name="message" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Send Message</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Call us Now:</h4>
									<ul>
										<li>+123 456-789-1120</li>
										<li>+522 672-452-1120</li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></li>
										<li><a href="mailto:info@yourwebsite.com">support@yourwebsite.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Our Address:</h4>
									<ul>
										<li>KA-62/1, Travel Agency, 45 Grand Central Terminal, New York.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->

	<!-- Map Section -->
	<div class="map-section">
		<div id="myMap"></div>
	</div>
	<!--/ End Map Section -->
@endsection

@push('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMH_Sh8EdCWkG1OFhAih3FFhbkRYuo-0U"></script>
    <script src="{{ asset('js/jquery.googlemap.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#mapContact").googleMap();
            $("#mapContact").addMarker({
                coords: [48.895651, 2.290569],
                url: 'http://localhost:8000'
            });
        });

    </script>

    <script>
        function contact_us_form() {

            var name = document.getElementById("contactname");
            var email = document.getElementById("email");
            var message = document.getElementById("message");
            var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (name.value == "") {
                name.style = "border:2px solid red"

                document.getElementById("contactname_error").innerHTML = "please enter your name";
                return false

            }
            if (name.value.length < 2 || name.value.length > 30) {
                name.style = "border:2px solid red"
                document.getElementById("contactname_error").innerHTML = "length must be between 2 and 30"
                return false
            }
            if (email.value == "") {
                email.style = "border:2px solid red"
                document.getElementById("email_error").innerHTML = "enter your email";

                return false
            } else if (!pattern.test(email.value)) {
                email.style = "border:2px solid red"
                document.getElementById("email_error").innerHTML = "invalid";

                return false

            }

            if (message.value == "") {
                message.style = "border:2px solid red"
                document.getElementById("message_error").innerHTML = "Message cannot be empty";
                return false
            }
            if ((message.value).length < 10) {
                message.style = "border:2px solid red"
                document.getElementById("message_error").innerHTML = "minimum 10 words are required";
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
            // if (c.value == "") {
            //     c.style = "border:2px solid red;"
            //     document.getElementById("contact_web_error").innerHTML = "please enter your website";
            //     return false
            // }
            // if (c.value.length <= 7) {
            //     c.style = "border:2px solid red;"
            //     document.getElementById("contact_web_error").innerHTML = "please enter correct website";
            //     return false

            // }

        }

    </script>
@endpush
