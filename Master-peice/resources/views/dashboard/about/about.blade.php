@extends('dashboard.admin')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>About Page  </h4>
       
        <hr>
        <a href="{{url('add_about')}}" class="btn btn-primary">add about</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>ID</th>
                    
                    <th>Content</th>
                    <th>Image</th>
                    <th>Edit</th>
                    {{-- <th>Delete</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($about as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->about_us}}</td>
                    <td>
                        <img src="{{asset('images/'.$item->image)}}" alt="image" width="150px" height="100px">
                    </td>
                    <td>
                        <a href="{{url('edit_about/'.$item->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    {{-- <td>
                        <form action="{{route('delete.destroy', $item->id)}}" method="POST" >
                            @csrf
                            @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td> --}}
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