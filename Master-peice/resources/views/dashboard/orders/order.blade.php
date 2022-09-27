@extends('dashboard.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h4 class="text-white">New Order</h4>
              </div>
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Tracking Number</th>
                        <th>Total Price</th>
                        <th>status</th>
                         <th> Action</th> 
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $item) 
                      <tr>
                        <td>{{$item->fname}}00015</td>
                        <td>{{$item->total_price}}</td>
                         <td>{{$item->status == '0' ? 'Pending' : 'Completed'}}</td> 
                        <td><a href="{{url('orderdetails/'.$item->id)}}" class="btn btn-primary">View</a></td>
                      </tr>
    
                      @endforeach
                    </tbody>
                  </table>                              
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection