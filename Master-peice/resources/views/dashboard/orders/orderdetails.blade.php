@extends('dashboard.admin')

@section('content')

<head><!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h4 class="text-white">Order View
                 <a href="{{url('orderadmin')}}" class="btn btn-warning text-white float-end">Back</a>
                </h4>
                
              </div>
                <div class="card-body">
                 <div class="row">
                    <div class="col-md-6">
                        <h4>Shipping Details </h4>
                        <hr>
                        <label for="">First Name</label>
                        <div class="border p-2">{{$orders->fname}}</div>
                        <label for="">Last Name</label>
                        <div class="border p-2">{{$orders->lname}}</div>
                        <label for="">Email</label>
                        <div class="border p-2">{{$orders->email}}</div>
                        <label for="">Phone</label>
                        <div class="border p-2">{{$orders->phone}}</div>
                        <label for="">Shipping Address</label>
                        <div class="border p-2">
                          Country :  {{$orders->country}} <br>
                           City : {{$orders->city}} <br>
                           Address : {{$orders->address}} <br>
                        </div>
                        <label for="">Zip Code</label>
                        <div class="border p-2">{{$orders->pincode}}</div>

                    </div>

                    <div class="col-md-6">
                        <h4>Order Details</h4>
                        <hr>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Price</th>
                         <th> Image</th> 
                        
                      </tr>
                    </thead>
                    <tbody>
                       @foreach ($orders->orderitems as $item)
                           
                     
                      <tr>
                        <td>{{$item->products->product_name}}</td>
                        <td>{{$item->products->price}}</td>
                        <td>
                            <img src="{{asset('images/'.$item->products->product_image)}}" alt="image_product" width="50px" height="50px">
                        
                        </td>
                        
                      
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table> 
                  <div class="card-footer">
                    <h5>Total Price : {{$orders->total_price}}</h5>
                  </div>
                  </div>
                </div>                             
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection