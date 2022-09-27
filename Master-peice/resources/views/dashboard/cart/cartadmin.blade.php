@extends('dashboard.admin')

@section('content')


<div class="card">

    <div class="card-header">
        <h4>Cateegory Page  </h4>
       
        <hr>
        {{-- <a href="{{url('contact')}}" class="btn btn-primary">Contact Messages</a> --}}
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    {{-- <th>Max Price</th> --}}
                    <th>User_id</th>
                    {{-- <th>User_Name</th> --}}
                    <th>Email User</th>
                    {{-- <th>Edit</th> --}}
                    {{-- <th>Remove</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->products->product_name}}</td>
                    {{-- <td>{{$item->products->price}}</td> --}}
                    <td>{{$item->products->max_number}}</td>
                    <td>{{$item->user->id}}</td>
                    {{-- <td>{{$item->user->name}}</td> --}}
                    <td>{{$item->user->email}}</td>
                    {{-- <td>{{$item->email}}</td>
                    <td>
                        {{$item->message}}
                    </td>
                    <td>
                        {{$item->user_id}}
                    </td>
                    <td>
                        {{$item->user->name}}
                    </td> --}}
                    
                    {{-- <td>
                        <form action="{{route('remove.destroy', $item->id)}}" method="POST" >
                            @csrf
                            @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Remove Message">
                        </form>
                    </td> --}}
                </tr>
                    
                @endforeach
            </tbody>
    </div>
</div>

{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('status'))
  <script>
   Swal.fire("{{session('status')}}");
   
   </script>   
@endif --}}



@endsection