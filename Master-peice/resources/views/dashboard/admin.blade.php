<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

 
      <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
   
    <!-- CSS Files -->
    <link  href="{{asset('admin/css/material-dashboard.css')}}" rel="stylesheet" />

</head>
<body class="">
  <div class="wrapper ">

    @include('dashboard.layout.sidebar')

    <div class="main-panel">
 
       @include('dashboard.layout.adminav')
 
      
 
     <div class="content">
         @yield('content')
     </div>

     {{-- @include('dashboard.layout.adminfooter') --}}
    </div>
  </div>

  

  

      <!--   Core JS Files   -->
  <script src="{{asset('admin/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin/js/popper.min.js')}}"></script>
  <script src="{{asset('admin/js/bootstrap-material-design.min.js')}}"></script>
  <script src="{{asset('admin/js/perfect-scrollbar.jquery.min.js')}}"></script>






</body>
</html>