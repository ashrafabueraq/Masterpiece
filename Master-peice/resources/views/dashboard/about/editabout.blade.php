@extends('dashboard.admin')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="card">
  
    <div class="card-header">
        <h4>Add Category</h4>
    </div>
    <div class="card-body">
        <form action="{{route('editabout.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              

                <div class="col-md-12 mb-3">
                    <label for="">Content</label>
                    <textarea name="content" rows="3" class="form-control" required>{{$about->about_us}} </textarea>
                </div>

                <div class="col-md-12 mb-3">
                    @if ($about->image)
                    <img src="{{asset('images/'.$about->image)}}" alt="image" width="150px">
                      
                    @endif
                    
                    <input type="file" name="image" class="form-control" value="{{$about->image}}" required>
                </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

    
@endsection