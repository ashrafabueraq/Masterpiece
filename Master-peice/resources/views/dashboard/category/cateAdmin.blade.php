@extends('dashboard.admin')

@section('content')
{{-- @if ($message = Session::get('status'))
<div class="alert alert-success" role="alert">
  
     <i class="fa-regular fa-circle-check"></i> {{$message}} 
</div>    
@endif --}}
<div class="card">

    <div class="card-header">
        <h4>Cateegory Page  </h4>
       
        <hr>
        <a href="{{url('add_category')}}" class="btn btn-primary">add category</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->category_name}}</td>
                    <td>{{$item->category_description}}</td>
                    <td>
                        <img src="{{asset('images/'.$item->category_image)}}" alt="image" width="150px" height="100px">
                    </td>
                    <td>
                        <a href="{{route('edit_category.edit',$item->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('deletecate.destroy', $item->id)}}" method="POST" >
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