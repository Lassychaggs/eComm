@php
 use App\Http\Controllers\ProductController;
 $total = 0;
 if (Session::has('user')) {
  $total = ProductController::cartItem();
 }
   
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">eComm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
        </ul>
        <form class="search d-flex" action="/search" >
          <input class="form-control me-2" type="text" placeholder="Search" name="search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>  
      </div>
    </div>
    <div class="collapse navbar-collapse">
      <ul class=" navbar-nav me-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/viewcart">Cart[{{ $total }}]</a>
        </li>      
      </ul>
      <ul class="navbar-nav me-auto mb-lg-0 nav justify-content-end">
        @if (Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Session::get('user')['name'] }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/login">Login</a>
          <a class="nav-link" aria-current="page" href="/register">Register</a>
        </li>
        @endif
      </ul>
    </div>

</nav> 