@extends('dashboard.admin')

@section('content')


<div class="card">

    <div class="card-header">
        <h4>Contact Page  </h4>
       
        <hr>
        {{-- <a href="{{url('contact')}}" class="btn btn-primary">Contact Messages</a> --}}
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>User_id</th>
                    <th>User_Name</th>
                    {{-- <th>Edit</th> --}}
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        {{$item->message}}
                    </td>
                    <td>
                        {{$item->user_id}}
                    </td>
                    <td>
                        {{$item->user->name}}
                    </td>
                    
                    <td>
                        <form action="{{route('remove.destroy', $item->id)}}" method="POST" >
                            @csrf
                            @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Remove Message">
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