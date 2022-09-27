@extends('fundamental.master')

@section('content')

<head><!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<div class="container"style="height: 400px;margin-top: 171px;">
    <form action="{{url('place_order')}}" method="POST">
        @csrf
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>Basic Details</h6>
                    <hr>
                    <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter First Name" name="firstname" value="{{Auth::user()->name}}">    
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter Last Name" name="lastname" value="{{Auth::user()->lname}}" required>    
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{Auth::user()->email}}">    
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone Number</label>
                            <input type="number" class="form-control @error('phone') is-invalid alert alert-danger @enderror" placeholder="Enter Phone Number" name="phone" value="{{Auth::user()->phone}}"required>  
                        </div>
                        <div class="col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="address" value="{{Auth::user()->address}}"required>    
                        </div>
                        <div class="col-md-6">
                            <label for="City">City</label>
                            <input type="text" class="form-control" placeholder="Enter Your City" name="city" value="{{Auth::user()->city}}"required>    
                        </div>
                        <div class="col-md-6">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" placeholder="Enter Your Country" name="country" value="{{Auth::user()->country}}"required>    
                        </div>
                        <div class="col-md-6">
                            <label for="pincode">Pin Code</label>
                            <input type="number" class="form-control" placeholder="Enter Pin Code" name="pincode" value="{{Auth::user()->pincode}}"required>    
                        </div>
                    </div>
                </div>   
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h6>Order Details</h6>
                    <hr>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <body>
                            @php
                            $total = 0 ;
                             @endphp
                            @foreach ($cart as $item)
                            <tr> 
                                <td>{{$item->products->product_name}}</td>
                                <td>{{$item->products->max_number}} JOD</td>
                            </tr>

                            @php
                            $total += $item->products->max_number
                            @endphp
                                
                            @endforeach

                        </body>
                    </table>
                  
                      <div class="card-footer">
                        <h5>Total Price : <span class="float-end">{{$total}} JOD</span> </h5>
                      </div>
                    
                    <hr>
                    <button type="submit" class="btn btn-primary w-100">Place Order</button>
                </div>
            
            </div>
          
        </div>
    </div>
 </form>
</div>

<style>
    /* *{
        font-family: 'Roboto', sans-serif;
    } */
    .checkout-form label{
        font-size: 12px;
        font-weight: 700;
    }
    .checkout-form input{
        font-size: 14px;
        padding: 5px;
        font-weight: 400;
    }
</style>
    
@endsection