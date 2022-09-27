@extends('dashboard.admin')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="card">
  
    <div class="card-header">
        <h4>Add Product</h4>
    </div>
    <div class="card-body">
        <form action="{{route('add_prod.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="price">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Max Price</label>
                    <input type="number" class="form-control" name="max_price">
                </div>

                
                <div class="col-md-6 mb-3">
                    <label for="">Expire Date</label>
                    <input type="date" class="form-control" name="date">
                </div>



                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control"> </textarea>
                </div>

               {{-- 
                 <div class="col-md-6 mb-3">
                    <label for="">Time</label>
                    <input type="time" class="form-control" name="time">
                </div>  --}}

                <div class="col-md-3 mb-3">
                  
                    <input type="checkbox" name="Status">
                    <label for="">Accept</label>
                </div>
                <div class="col-md-3 mb-3">
                <select class="form-select" name="cate_id" aria-label="Default select example">
                    <option selected>Select a Category</option>
                    @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                    @endforeach
                   
                    
                  </select>
                </div>

                <div class="col-md-12 mb-3">
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @if (session('status'))
   <script>
    Swal.fire("{{session('status')}}");
    
    </script>   
@endif
    

    
@endsection