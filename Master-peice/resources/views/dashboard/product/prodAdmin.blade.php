@extends('dashboard.admin')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Product Page  </h4>
       
        <hr>
        <a href="{{url('add_product')}}" class="btn btn-primary">add product</a> 
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Bid Price</th>
                    <th>Max Price</th>
                    <th>Expire Date</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($product as $item) 
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->product_desc}}</td>
                    <td>{{$item->price}} JOD</td>
                    <td>{{$item->max_number}} JOD</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                         <img src="{{asset('images/'.$item->product_image)}}" alt="image" width="150px" height="100px"> 
                    </td>
                    <td>
                        <a href="{{url('edit_product/'.$item->id)}}" class="btn btn-primary">Edit</a> 
                    </td>
                    <td>
                         <form action="{{route('deleteprod.destroy', $item->id)}}" method="POST" >
                             @csrf
                            @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                          </form> 
                    </td>
                </tr>
                    
                 @endforeach 
            </tbody>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @if (session('status'))
   <script>
    Swal.fire("{{session('status')}}");
    
    </script>   
@endif
    
@endsection