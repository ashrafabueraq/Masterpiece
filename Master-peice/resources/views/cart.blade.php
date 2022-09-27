@extends('fundamental.master')

@section('content')



<div class="container" style="height: 700px;margin-top: 171px;">
    <div class="card shadow">
        @if ($cart->count() > 0)
            
      
        @php
            $total = 0 ;
        @endphp
        @foreach ($cart as $item)
            
       
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('images/'.$item->products->product_image)}}" alt="image" width="100px" height="100px">
            </div>
            <div class="col-md-3">
                
                <h4>{{$item->products->product_name}}</h4>
                 
            </div>
            <div class="col-md-3">
               
               <h5>{{$item->products->max_number}}</h5>
            </div>
            <div class="col-md-3">
                <form action="{{route('del.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Remove</button>
                </form>
            </div>
        </div>
    </div>
    @php
        $total += $item->products->max_number
    @endphp
    @endforeach
    <div class="card-footer">
        <h6>Total Price: {{$total}}</h6>

        <a href="{{url('checkout')}}" class="btn btn-outline-success">Proceed to chechout</a>
     </div>
     @else 
     <div class="card-body text-center">
       <h4> Your <i class="fa-solid fa-cart-shopping"></i>  is Empty </h4>
       <a href="{{url('/auction')}}" class="btn btn-primary">Continue Shopping</a>
     </div>
     @endif
 </div>
 
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @if (session('status'))
   <script>
    Swal.fire("{{session('status')}}");
    
    </script>   
@endif

    
@endsection