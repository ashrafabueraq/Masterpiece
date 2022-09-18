@extends('dashboard.admin')

@section('content')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="card">
    @if ($message = Session::get('status'))
    <div style="color: rgb(28, 167, 28);">
      
        <p style="text-align: center; font-weight: bold">  <i class="fa-regular fa-circle-check"></i> {{$message}} </p>
    </div>    
    @endif
    <div class="card-header">
        <h4>Edit Category</h4>
    </div>
    <div class="card-body">
        <form action="{{route('edit.update', $category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$category->category_name}}">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control">{{$category->category_description}} </textarea>
                </div>

                <div class="col-md-6 mb-3">
                 
                    <input type="checkbox" name="Status" {{$category->status == 1 ? 'checked' : ''}}>
                    <label for="">Accept</label>
                </div>
              

                <div class="col-md-12 mb-3">
                    @if ($category->category_image)
                    <img src="{{asset('images/'.$category->category_image)}}" alt="image" width="150px">
                      
                    @endif
                    
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
    
@endsection