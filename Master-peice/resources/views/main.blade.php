@extends('fundamental.master')

@section('content')

<!-- Slider -->

<div class="main_slider" style="background-image:url(images/auction.png)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_content">
                    <h2 style="color: rgb(247, 241, 241)">War Bidding</h2> 
                    <h1 style="color: rgb(250, 243, 243)"> Keep your Eye in the price</h1>
                    <div class="red_button shop_now_button"><a href="#">Auction Now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Catgory -->
<div style="margin-top:75px;">
<h2 style="text-align:center; font-whight:bold;">All Categories</h2>
<div class="banner">
    <div class="container">
        
        <div class="row">
            @foreach ($category as $item)
                
            
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url(images/{{$item->category_image}})">
                    <div class="banner_category">
                        <a href="{{url('single/'.$item->category_name)}}">{{$item->category_name}}</a>
                    </div>
                </div>
            </div>

            @endforeach
            {{-- <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url(images/watches.jpg)">
                    <div class="banner_category">
                        <a href="{{url('/single')}}">Watches</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url(images/box.png)">
                    <div class="banner_category">
                        <a href="{{url('/single')}}">Boxes</a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
</div>

<!-- New Arrivals -->

{{-- <div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title new_arrivals_title">
                    <h2> Auction Products</h2>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row align-items-center">
            <div class="col text-center">
                <div class="new_arrivals_sorting">
                    <ul class="arrivals_grid_sorting clearfix button-group filters-button-group"> --}}
                        {{-- <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li> --}}
                        {{-- @foreach ($category as $item)
                            
                        
                       <a href="{{url('/'.$item->id)}}"> <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center">{{$item->category_name}}</li>
                        @endforeach --}}
                        {{-- <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">Watches</li>
                        <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" >Boxes</li> --}}
                    {{-- </ul>
                </div>
            </div>
        </div> --}}

{{-- 
        <div class="row">
            <div class="col">
                <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }' style="display: flex">


                    @foreach ($products as $p) --}}
                        
                  

                    {{-- <div class="product-item women">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img src="{{asset('images/'.$p->product_image)}}" alt="poducts">
                            </div>
                            <div class="favorite"></div> --}}
                            {{-- <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"></div> --}}
                            {{-- <div class="product_info">
                                <h6 class="product_name"><a href="single.html">{{$p->product_name}}</a></h6>  --}}
                                {{-- <p class="product_desc">{{$p->product_desc}}</p> --}}
                                {{-- <div class="product_price">{{$p->price}} JOD</div>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a href="#">Bid Now</a></div>
                    </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</div> --}}

  
 <div class="py-5" style="margin-top: 75px">
    <div class="container">
        <h2 style="text-align: center;"> Auction Products</h2>
       
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
                        <a href="{{url('sproduct/'.$p->id)}}"> <button class="prima">Show</button></a>

                    </div>
                </div>
            </div>
        

            @endforeach
           

            
            

        </div>
    

        
    </div>
</div> 

<!-- Deal of the week -->

<div class="deal_ofthe_week">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="deal_ofthe_week_img">
                    <img src="images/w.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 text-right deal_ofthe_week_col">
                <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                    <div class="section_title">
                        <h2>Deal Of The Week</h2>
                    </div>
                    <ul class="timer">
                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="day" class="timer_num">03</div>
                            <div class="timer_unit">Day</div>
                        </li>
                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="hour" class="timer_num">15</div>
                            <div class="timer_unit">Hours</div>
                        </li>
                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="minute" class="timer_num">45</div>
                            <div class="timer_unit">Mins</div>
                        </li>
                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="second" class="timer_num">23</div>
                            <div class="timer_unit">Sec</div>
                        </li>
                    </ul>
                    <div class="red_button deal_ofthe_week_button"><a href="#">Bid Now<</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    .card{
        border-radius:15px;
        border: none;
        transition: all 0.75s;
        /* box-shadow: 0 0 3px 0 #00000073; */
        overflow: hidden;

    }
    /* .card::before{
        content: "";
        width: 60px;
        height: 520px;
        left: 10px;
        top:-70px ;
        position: absolute;
        background: linear-gradient(#00e5ff,#b400fb);
        animation: animate 5s linear infinite;

    } */
    /* @keyframes animate{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg)
        };
    } */
    /* .card::after{
        content: "";
        position: absolute;
        background: #080808;
        inset: 3px;
        border-radius:5px; 
    } */
     .card:hover{
        transform: scale(1.1);
        box-shadow: 0 11px 14px rgb(0 0 0 / 25%), 0 8px 20px rgb(0 0 0 /10%)
    
    }
    .prima{
        border-radius: 40px;
        border: none;
        background: linear-gradient(45deg, #fe5f28, #a90b23);
        color: white;
        margin-left: 50px;
        cursor: pointer;
        width: 75px;
        height: 37px;
        
    }
    .prima:hover{

        /* transition: all 1.5s;
        transform: scale(1.1); */
        background: linear-gradient(45deg, #a90b23,#fe5f28);

    }
 




</style>

    
@endsection