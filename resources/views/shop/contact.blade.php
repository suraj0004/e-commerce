@extends('layouts.shop.app')

@push('css')
<style>
    div.single-slider{
        display: none;
    }
</style>
@endpush

@section('content')
<section id="contact-us" class="contact-us section">
    <div class="container">
        @if (session('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> {{ session('status') }} </h5>

                </div>
            @endif


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i>{{ $error }}</h5>
                    </div>
                @endforeach
            @endif
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h4>Get in touch</h4>
                                <h3>Write us a message</h3>
                            </div>
                            {{-- <form class="form" method="post" action="mail/mail.php"> --}}
                            <form class="form" method="post" action="{{route('contact.store')}}" id="contact_form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Name<span>*</span></label>
                                            <input name="name" type="text" placeholder="Name" id="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Subjects<span>*</span></label>
                                            <input name="subject" type="text" placeholder="Subject" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Email<span>*</span></label>
                                            <input name="email" type="email" placeholder="Email" id="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Your Phone<span>*</span></label>
                                            <input name="phone" type="text" placeholder="Phone No." id="phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <label>your message<span>*</span></label>
                                            <textarea name="message" placeholder="Message" id="message"></textarea>
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
    <div class="map-section">
		<div id="myMap"></div>
	</div>
@endsection

@push('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
	<script src="{{ asset('js/gmap.min.js')}}"></script>
	<script src="{{ asset('js/map-script.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#contact_form').submit(function (e) {
                e.preventDefault();

                var name = $('#name').val();
                var subject = $('#subject').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var message = $('#message').val();

                const payload = {
                    name: name,
                    subject: subject,
                    email: email,
                    phone: phone,
                    message: message
                };

                $.ajax({
                    type: "POST",
                    url: "{{route('contact.store')}}",
                    data: payload,

                    success: function (response) {
                        $('#contact_form').trigger('reset');
                        console.log(response);
                    },
                    error: function(response){
                        // alert(response.responseJSON.error);
                        var error = '';
                        for(var i = 0; i < response.responseJSON.error.length; i++){
                            error += response.responseJSON.error[i] + '\n';
                        }
                        alert(error);
                    }
                });
            });
        });
    </script>
@endpush
