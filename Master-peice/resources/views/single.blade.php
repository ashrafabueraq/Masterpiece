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
    
      
<div class="py-5">
    <div class="container">
         {{-- <h3 style="border-bottom:solid 1px #a90b23; text-align:center; color:#a90b23;">{{$category->category_name}}</h3> --}}
        <a href="#">
        <div class="row" style="margin-top: 50px;">

            
   
            
            @foreach ($products as $p)
                
           
            <div class="col-md-3 mb-3" >
                <div class="card">
                    <img src="{{asset('images/'.$p->product_image)}}" alt="image">
                    {{-- <a href="{{url('sproduct/'.$p->id)}}"> --}}
                    <div class="card-body">
                      <h5>{{$p->product_name}}</h5>
                        {{-- <span class="float-start" style="color: black">{{$p->product_desc}}</span><br> --}}
                        <span class="float-start" style="color: red; font-weight:bold">{{$p->price}} JOD</span>
                       
                        {{-- <span class="float-end">end price</span> --}}
                  {{-- <form action="{{url('single/'.$p->id)}}" method="GET"> --}}
                     <button class="prima">Show</button> 
                  {{-- </form>   --}}
                    </div>
                {{-- </a> --}}
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
        margin-left: 40px;
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










    
@endsection