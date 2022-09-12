
@extends('fundamental.master')

@section('content')

<head>

    
<link rel="stylesheet" type="text/css" href=" {{asset('styles/categories_styles.css')}}">
<link rel="stylesheet" type="text/css" href=" {{asset(' styles/categories_responsive.css')}}">

</head>






<div class="container product_section_container">
    <div class="row">

                         
        <div class="div-img">    
            <img src="{{asset('images/rolex_bg.jpg')}}" width="100%" height="400px">     
           <div style="background-color: #f0f8ff29"> <h1 class="hcat">All Products</h1> </div>    
        
        </div>
        <div class="col product_section clearfix">

            <!-- Breadcrumbs -->

             <div class="breadcrumbs d-flex flex-row align-items-center">
                {{-- <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                  
                </ul> --}}
            </div> 

        

            <!-- Sidebar -->

            {{-- <div class="sidebar">
                <div class="sidebar_section">
                    <div class="sidebar_title">
                        <h5>Product Category</h5>
                    </div>
                    <ul class="sidebar_categories">
                         <li><a href="{{url('/auction')}}">All</a></li> 
                        @foreach ($category as $c)
                        <li><a href="{{url('single/'.$c->category_name)}}">{{$c->category_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div> --}}


            
			<div class="main_content">



						

			 <div class="product-grid">

                @foreach ($products as $pro)
                    
               

					<div class="product-item men">
						<div class="product discount product_filter">
							<div class="product_image">
								<img src="{{asset('images/'.$pro->product_image)}}" alt="img">
							</div>
						
							
							<div class="product_info">
								<h6 class="product_name"><a href="single.html">{{$pro->product_desc}}</a></h6>
								<div class="product_price">{{$pro->price}}</div>
							</div>
						</div>
						<div class="red_button add_to_cart_button"><a href="{{url('sproduct/'.$pro->id)}}">Bid Now</a></div>
					</div>

                @endforeach

                    


              </div>
			</div>
        </div>
    </div>
</div>

<br/>

<style>
      .div-img{
        position: relative;
        top: 45px;
        width: 100%; 
        height:100%;
        filter: drop-shadow(2px 4px 6px black);
    
        
    }
    .hcat{
        color: #a90b23;
        text-align:center;
        

    }
    </style>

	


@endsection

