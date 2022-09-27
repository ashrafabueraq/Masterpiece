<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="{{url('dashboard')}}" class="simple-text logo-normal">
      E - Auction
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{Request::is('dashboard') ? 'active' : ''}}  ">
        <a class="nav-link" href="{{url('dashboard')}}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('users') ? 'active' : ''}} ">
        <a class="nav-link" href="{{url('users')}}">
           <i class="material-icons">person</i>
          <p>Users</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('cateAdmin') ? 'active' : ''}} ">
        <a class="nav-link" href="{{url('cateAdmin')}}">
          {{-- <i class="material-icons">person</i> --}}
          <i class="material-icons">content_paste</i>
          <p>Categories</p>
        </a>
      </li>
      {{-- <li class="nav-item {{Request::is('add_category') ? 'active' : ''}} ">
        <a class="nav-link" href="{{url('add_category')}}">
          <i class="material-icons">content_paste</i>
          <p>Add Categories</p>
        </a>
      </li> --}}
      <li class="nav-item {{Request::is('prodAdmin') ? 'active' : ''}} ">
        <a class="nav-link" href="{{url('prodAdmin')}}">
          <i class="material-icons">content_paste</i>
          <p>Productes</p>
        </a>
      </li>
      {{-- <li class="nav-item {{Request::is('add_product') ? 'active' : ''}} ">
        <a class="nav-link" href="{{url('add_product')}}">
          <i class="material-icons">content_paste</i>
          <p>Add Product</p>
        </a>
      </li> --}}
      <li class="nav-item {{Request::is('contact') ? 'active' : ''}} ">
        <a class="nav-link" href="{{url('contact')}}">
          <i class="material-icons">content_paste</i>
          <p>Contact Messages</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('aboutus') ? 'active' : ''}} ">
        <a class="nav-link" href="{{url('aboutus')}}">
          <i class="material-icons">content_paste</i>
          <p>About Us</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('cartadmin') ? 'active' : ''}} ">
        <a class="nav-link" href="{{url('cartadmin')}}">
          <i class="fa-solid fa-cart-shopping"></i>
          <p>Cart</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('orderadmin') ? 'active' : ''}} ">
        <a class="nav-link" href="{{url('orderadmin')}}">
          <i class="material-icons">content_paste</i>
          <p>Orders</p>
        </a>
      </li>
    </ul>
  </div>
</div>