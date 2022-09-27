@extends('fundamental.master')

@section('content')


<head>
    
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

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
       @foreach ($about as $item)
           
     
     <div class="row" style="background-image: url({{asset('images/'.$item->image)}}); background-size:cover">
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
                <h1>Who We Are ? </h1>
                <p>      
                    {{$item->about_us}}       
                </p>
                
            </div>

        </div>
        @endforeach

        <div class="col-lg-6 get_in_touch_col">

            <img src="{{asset('images/about.png')}}" alt="">
          
        </div>

    </div>
</div>




@endsection