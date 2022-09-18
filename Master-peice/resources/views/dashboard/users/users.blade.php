@extends('dashboard.admin')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Cateegory Page  </h4>
       
        <hr>
        <a href="{{url('add_user')}}" class="btn btn-primary">Add User</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role_as</th>
                   
                    {{-- <th>Edit</th> --}}
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}} </td>
                    <td> {{$item->phone}}</td> 
                    <td>{{$item->address}}</td> 
                    <td>{{$item->role_as}} </td>

                   {{--  <td>
                        <a href="{{route('edit_category.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                    </td> --}}
                    <td>
                        <form action="{{route('deleteuser.destroy', $item->id)}}" method="POST" >
                            @csrf
                            @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete User">
                        </form>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @if (session('success'))
   <script>
    Swal.fire("{{session('success')}}");
    
    </script>   
@endif
    
@endsection