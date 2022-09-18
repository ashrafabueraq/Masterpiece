@extends('fundamental.master')

@section('content')

<head>


    <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/single_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/single_responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


 
  

    <div class="super_container">
     


        <div class="container single_product_container">
            <div class="row">
                <div class="col">
    
                    <!-- Breadcrumbs -->
    
                    <div class="breadcrumbs d-flex flex-row align-items-center">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            {{-- <li><a href="categories.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li> --}}
                            <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product</a></li>
                        </ul>
                    </div>
    
                </div>
            </div>
    
            <div class="row">

                <div style="background-color: rgb(255, 255, 255);height:600px; width:100%; display:flex; justify-content:space-evenly">

                    <div class="div-imgg">
                     {{-- <h1 style="color: aliceblue">image</h1> --}}
                     <img src="{{asset('images/'.$product->product_image)}}">
                    </div>

                    <div class="div-desc">
                         @if ($message = Session::get('success'))
                        <div style="color: rgb(28, 167, 28);">
                            <i class="fa-regular fa-circle-check"></i> {{$message}}
                        </div>    
                        @endif

                        {{-- @if ($message = Session::get('failed'))
                        <div style="color: rgb(239, 51, 17);">
                            <i class="fa-solid fa-circle-exclamation">
                            </i>{{$message}} <a href="/login" style=" text-decoration:underline ">Sign in</a> or 
                            <a href="/register" style=" text-decoration:underline ">Sign up</a>
                        </div>
                        @endif  --}}
                        {{-- @if ($message = Session::get('stop'))
                          
                        <div style="color: rgb(239, 51, 17);">
                            <i class="fa-regular fa-circle-check"></i> {{$message}}
                        </div>  
                        @endif --}}
                        <h2>{{$product->product_name}}</h2>
                        <p class="price">Current Bid : {{$product->price}} JOD</p>
                        <p>{{$product->product_desc}}, keep your eyes in the price and don't waste the cahnce, you deserve this</p>


                        <div class="timer">
                             <span class="tl" style="font-weight: bold; padding:10px">Time Left :</span> 
                             <div class="time">
                              <h2 class="num" id="days"></h2>
                              <p class="date">Days</p>
                            </div> 
                             <div class="time">
                                <h2 class="num" id="hours"></h2>
                                <p class="date">Hours</p>

                            </div> 
                             <div class="time">
                                <h2 class="num" id="minutes"></h2>
                                <p class="date">Minutes</p>
                            </div> 
                             <div class="time">
                                <h2 class="num" id="seconds"></h2>
                                <p class="date">Seconds</p>

                            </div> 
                             

                              
                              <input type="hidden" id="date" value="{{$product->created_at}}">
                              
                              

                        </div>
                        <br>
                        

                        <form method="POST" action="{{route('spro.update', $product->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                            <label for="bid" class="youbid">Your bid : </label> <br>
                            <h5>{{$product->price}} JOD</h5>
                            {{-- <input type="number" class="form-control w-50 p3" id="bid" name="input_bid" value="{{$product->price}}" required> --}}
                            <input type="submit" class="sub" name="submit_bid" id="bid" value="Bid now">
                            


                        </form>
                        <span class="date">it's great time to bid!</span>
                      
                    </div>
                    
                
                </div>
                
            </div>


            
    
        </div>



        
    </div>

 
<style>
    .div-imgg{
        width:40%;
        /* filter: drop-shadow(2px 4px 6px black) */

    } 
    .div-desc{
         
        height:100%;
        width:40%

    }
    .price{
        color: #3f51b5;
        font-size: 15px;
        font-weight: bold;
    }
    .timer{
        height: 150px;
        width: 75%;
        background-color:  #f5f5f5;
        display: flex;
        justify-content: space-evenly;
        align-items: center
        
        
    }
    .time{
        background-color: white;
        height: 70px;
        width: 50px;
        border:1px solid #a19c9c6e;
    }
    .tl{
        position: absolute;
        bottom: 109px;
        right: 232px;
    }
    .date{
        font-size: 10px;
        text-align: center;
        color: #3f51b5;
    }
    .num{
        text-align: center;
        
    }
    .sub{
        /* border-radius: 40px; */
        border: none;
        background: linear-gradient(45deg, #3f51b5, #a90b23);
        color: white;
        font-weight: bold;
        cursor: pointer;
        width: 344px;
        height: 37px;
        margin-top: 10px;
        


    }
    .sub:hover{
        background: linear-gradient(45deg, #a90b23,#3f51b5);
    }
    .youbid{
        color: #fe5f28;
        font-family: initial;

    }

</style>


<script>

    function func(){
        var dateValue = document.getElementById('date').value;
        var date = Math.abs((new Date().getTime() / 1000).toFixed(0));
        var date2 = Math.abs((new Date(dateValue).getTime() / 1000).toFixed(0));

        var diff = date2 - date;

        var days = Math.floor(diff / 86400 );
        var hours = Math.floor(diff / 3600 ) % 24;
        var minutes = Math.floor(diff / 60 ) % 60;
        var seconds = diff % 60;

        if(hours < 10){
            hours = '0' + hours;
        }

        if(minutes < 10){
            minutes = '0' + minutes;
        }

        if(seconds < 10){
            seconds = '0' + seconds;
        }


        // document.getElementById('data').innerHTML = days + ' days, ' + hours + ' hours, '  + minutes + ' minutes, ' + seconds + ' seconds';

        document.getElementById('days').innerHTML = days;
        document.getElementById('hours').innerHTML = hours;
        document.getElementById('minutes').innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;

    }
    func();
    setInterval(func, 1000);
   
  </script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- @if (session('success'))

<script>
    Swal.fire("{{session('success')}}")

</script>
    
@endif --}}


@if (session('failed'))

<script>
   Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: "{{session('failed')}}",
  footer: '<a href="/login">Sign in</a> . or . <a href="/register">Sign up</a> '
})



</script>
    
@endif


@if (session('sorry'))

<script>
   Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: "{{session('sorry')}}",
  footer: '<a href="/home">Go To Home</a>'
})



</script>
    
@endif


@endsection