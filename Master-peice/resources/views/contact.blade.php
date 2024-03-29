@extends('fundamental.master')

@section('content')

<head>
    
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<div class="container contact_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Map Container -->

     <div class="row" style="background-image: url(images/contact.jpg); background-size:cover">
        <div class="col">
            <div id="google_map">
                <div class="map_container">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div> 
    <br> <br>

    <!-- Contact Us -->

    <div class="row">

        <div class="col-lg-6 contact_col">
            <div class="contact_contents">
                <h1>Contact Us</h1>
                <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                <div>
                    <p>(+962) 778-091939</p>
                    <p>ashrafabueraq97@gmail.com</p>
                </div>
                {{-- <div>
                    <p>mm</p>
                </div> --}}
                {{-- <div>
                    <p>Open hours: 8.00-18.00 Mon-Fri</p>
                    <p>Sunday: Closed</p>
                </div> --}}
            </div>

            <!-- Follow Us -->

            <div class="follow_us_contents">
                <h1>Follow Us</h1>
                <ul class="social d-flex flex-row">
                    <li><a href="#" style="background-color: #3a61c9"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#" style="background-color: #41a1f6"><i class="fa-brands fa-twitter"></i></i></a></li>
                    <li><a href="#" style="background-color: #fb4343"><i class="fa-brands fa-google-plus-g"></i></a></li>
                    <li><a href="#" style="background-color: #8f6247"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>

        </div>

        <div class="col-lg-6 get_in_touch_col">
            <div class="get_in_touch_contents">
                <h1>Get In Touch With Us!</h1>
                <p>Fill out the form below to recieve a free and confidential.</p>
                <form action="{{route('cont.store')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
                        <input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
                        {{-- <input id="input_website" class="form_input input_website input_ph" type="url" name="name" placeholder="Website" required="required" data-error="Name is required."> --}}
                        <textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
                    </div>
                    <div>
                        <button id="review_submit" type="submit" class="red_button message_submit_btn trans_300">send message</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- Newsletter -->

{{-- <div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="post">
                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                        <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                        <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('status'))

<script>
   Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: "{{session('status')}}",
  footer: '<a href="/login">Sign in</a> . or . <a href="/register">Sign up</a> '
})



</script>
    
@endif

@if (session('success'))

<script>
   Swal.fire({
  position: 'center',
  icon: 'success',
  title: "{{session('success')}}",
  showConfirmButton: false,
  timer: 1500
})
</script>
    
@endif

    
@endsection