@extends('fundamental.master')

@section('content')

<head>
<link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/single_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/single_responsive.css')}}">
</head>



<div class="container single_product_container">

    <div class="div-img">
         <img src="{{asset('images/'.$category->category_image)}}" width="100%" height="400px"> 
        <div style="background-color: #f0f8ff29"> <h1 class="hcat">{{$category->category_name}}</h1> </div>
    
    </div>

    {{-- <div class="row">
        <div class="col"> --}}

            <!-- Breadcrumbs -->

            {{-- <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="{{url('single/'.$category->category_name)}}">{{$category->category_name}}</a></li> --}}
                    {{-- <li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product</a></li> --}}
                {{-- </ul>
            </div>

        </div>
    </div> --}}


    {{-- <div style="width: 100%">

        <img src="{{asset('images/'.$category->category_image)}}">
        
    </div> --}}


    {{-- @foreach ($products as $prod) --}}
        
    

    {{-- <div class="row" >
        
            <div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-3 thumbnails_col order-lg-1 order-2"> --}}
							{{-- <div class="single_product_thumbnails">
								<ul>
									<li><img src="images/single_1_thumb.jpg" alt="" data-image="images/single_1.jpg"></li>
									<li class="active"><img src="images/single_2_thumb.jpg" alt="" data-image="images/single_2.jpg"></li>
									<li><img src="images/single_3_thumb.jpg" alt="" data-image="images/single_3.jpg"></li>
								</ul>
							</div> --}}
						{{-- </div>
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url({{asset('images/'.$prod->product_image)}});"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
        <div class="col-lg-5">
            <div class="product_details">
                <div class="product_details_title">
                    <h2> {{$prod->product_name}}</h2>
                    <p>{{$prod->product_desc}}</p>
                </div>
                <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                    <div class="product_price">Timer : {{$prod->created_at}}</div> <br />
                </div>
                <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                    <div class="product_price">{{$prod->price}} JOD</div> <br />
                </div>
                <div class="product_price"> </div>
                <ul class="star_rating">
             
                </ul>
           
                <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center" style="display: flex; justify-content: center">
                    <div class="red_button" style="width: 250px;"><a href="#">Bid Now</a></div>
                
                </div>
            </div>
        </div>

        
    </div>

    @endforeach --}}


      
<div class="py-5">
    <div class="container">
         {{-- <h3 style="border-bottom:solid 1px #a90b23; text-align:center; color:#a90b23;">{{$category->category_name}}</h3> --}}
        <a href="#">
        <div class="row" style="margin-top: 50px;">

            
   
            
            @foreach ($products as $p)
                
       
            <div class="col-md-3 mb-3" >
                <div class="card">
                    <img src="{{asset('images/'.$p->product_image)}}" alt="image">
                    <div class="card-body">
                        <h5>{{$p->product_name}}</h5>
                        {{-- <span class="float-start" style="color: black">{{$p->product_desc}}</span><br> --}}
                        <span class="float-start" style="color: red; font-weight:bold">{{$p->price}} JOD</span>
                       
                        {{-- <span class="float-end">end price</span> --}}
                        <button class="prima">Show</button>

                    </div>
                </div>
            </div>

            @endforeach
           

            
            

        </div>
    </a>

        
    </div>
</div> 

    

</div>


<style>
    
    .card{
        border-radius:15px;
        transition: all 0.75s;
        box-shadow: 0 0 3px 0 #00000073;
        overflow: hidden;

    }
     .card:hover{
        transform: scale(1.1);
        box-shadow: 0 11px 14px rgb(0 0 0 / 25%), 0 8px 20px rgb(0 0 0 /10%)
    
    }
    .prima{
        border-radius: 40px;
        border: none;
        background: linear-gradient(45deg, #fe5f28, #a90b23);
        color: white;
        margin-left: 60px;
        cursor: pointer;
        width: 75px;
        height: 37px;
        
    }
    .prima:hover{

     
        background: linear-gradient(45deg, #a90b23,#fe5f28);

    }
    .div-img{
        position: relative;
        top: 45px;
        width: 100%; 
        height:100%;
        filter: drop-shadow(2px 4px 6px black);
        /* background-size: cover */
        /* background-image:url({{asset('images/'.$category->category_image)}}) */
        
    }
    .hcat{
        color: #a90b23;
        text-align:center;
        

    }
  
    
</style>







<!-- Tabs -->

{{-- <div class="tabs_section_container">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabs_container">
                    <ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
                        <li class="tab active" data-active-tab="tab_1"><span>Description</span></li>
                        <li class="tab" data-active-tab="tab_2"><span>Additional Information</span></li>
                        <li class="tab" data-active-tab="tab_3"><span>Reviews (2)</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col"> --}}

                <!-- Tab Description -->

                {{-- <div id="tab_1" class="tab_container active">
                    <div class="row">
                        <div class="col-lg-5 desc_col">
                            <div class="tab_title">
                                <h4>Description</h4>
                            </div>
                            <div class="tab_text_block">
                                <h2>Pocket cotton sweatshirt</h2>
                                <p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
                            </div>
                            <div class="tab_image">
                                <img src="images/desc_1.jpg" alt="">
                            </div>
                            <div class="tab_text_block">
                                <h2>Pocket cotton sweatshirt</h2>
                                <p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 desc_col">
                            <div class="tab_image">
                                <img src="images/desc_2.jpg" alt="">
                            </div>
                            <div class="tab_text_block">
                                <h2>Pocket cotton sweatshirt</h2>
                                <p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
                            </div>
                            <div class="tab_image desc_last">
                                <img src="images/desc_3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- Tab Additional Info -->
{{-- 
                <div id="tab_2" class="tab_container">
                    <div class="row">
                        <div class="col additional_info_col">
                            <div class="tab_title additional_info_title">
                                <h4>Additional Information</h4>
                            </div>
                            <p>COLOR:<span>Gold, Red</span></p>
                            <p>SIZE:<span>L,M,XL</span></p>
                        </div>
                    </div>
                </div> --}}

                <!-- Tab Reviews -->

                {{-- <div id="tab_3" class="tab_container">
                    <div class="row"> --}}

                        <!-- User Reviews -->

                        {{-- <div class="col-lg-6 reviews_col">
                            <div class="tab_title reviews_title">
                                <h4>Reviews (2)</h4>
                            </div> --}}

                            <!-- User Review -->

                            {{-- <div class="user_review_container d-flex flex-column flex-sm-row">
                                <div class="user">
                                    <div class="user_pic"></div>
                                    <div class="user_rating">
                                        <ul class="star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_date">27 Aug 2016</div>
                                    <div class="user_name">Brandon William</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div> --}}

                            <!-- User Review -->
{{-- 
                            <div class="user_review_container d-flex flex-column flex-sm-row">
                                <div class="user">
                                    <div class="user_pic"></div>
                                    <div class="user_rating">
                                        <ul class="star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="review_date">27 Aug 2016</div>
                                    <div class="user_name">Brandon William</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Add Review -->

                        {{-- <div class="col-lg-6 add_review_col">

                            <div class="add_review">
                                <form id="review_form" action="post">
                                    <div>
                                        <h1>Add Review</h1>
                                        <input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
                                        <input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
                                    </div>
                                    <div>
                                        <h1>Your Rating:</h1>
                                        <ul class="user_star_rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                        <textarea id="review_message" class="input_review" name="message"  placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
                                    </div>
                                    <div class="text-left text-sm-right">
                                        <button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div> --}}

<!-- Benefit -->

{{-- <div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>free shipping</h6>
                        <p>Suffered Alteration in Some Form</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>cach on delivery</h6>
                        <p>The Internet Tend To Repeat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>45 days return</h6>
                        <p>Making it Look Like Readable</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>opening all week</h6>
                        <p>8AM - 09PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

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



    
@endsection