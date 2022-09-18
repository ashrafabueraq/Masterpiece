@extends('dashboard.admin')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="card">
  
    <div class="card-header">
        <h4>Add User</h4>
    </div>
    <div class="card-body">
        <form action="{{route('add_users.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>


                <div class="col-md-12 mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

              


                <div class="col-md-3 mb-3">
                  
                    <input type="checkbox" name="admin" id="admin">
                    <label for="admin">Admin</label>
                </div>
              

                <div class="col-md-12 mb-3">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

    
@endsection