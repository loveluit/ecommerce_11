


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
@include('Home.css')

</head>

<body>

    <div class="hero_area">

    <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              LH Shop
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">
                  Shop
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why.html">
                  Why Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.html">
                  Testimonial
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
            <div class="user_option">
  
  
  
              
              <a href="">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              </a>
  
              @if (Route::has('login'))
  
              @auth
  
  
              <form method="POST" action="{{ route('logout') }}">
                @csrf
  
                <input type="submit" class="btn btn-info" value="logout">
                
            </form>
  
            <br>
  
            @else
              <a href="{{ route('login') }}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  Login
                </span>
              </a>
  
              <a href="{{ route('register') }}">
                  <i class="fa fa-vcard" aria-hidden="true"></i>
                  <span>
                    Register
                  </span>
                </a>
  
  
                
                @endauth
  
                @endif
  
                <br>
                <br>
  
  
           
  
            </div>
          </div>
        </nav>
      </header>





  <!-- end hero area -->




  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">


        
          
       
        <table class="table">
            <thead>
              <tr>
                
                <th scope="col">Product Title</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Remove</th>
              </tr>

              <?php

              $value = 0;

              ?>
            

            </thead>

            <tbody>


                @foreach ($cart as $cart )
              <tr>
                
                <td>{{$cart->product->title}}</td>
                <td>{{$cart->product->price}}</td>
               
                <td>
                  <img height="60" width="50" src="/products/{{$cart->product->image}}">
              </td>

              <td>
                <a class="btn btn-danger" href="{{url('delete_mycart',$cart->id)}}">Remove</a>
              </td>

              </tr>


              <?php

          $value = $value + $cart->product->price;

          ?> 

              @endforeach


              
            </tbody>
          </table>


    

    </div>
  </section>


  <div>

    <h3>Total Value of cart is:${{$value}}</h3>
    </div>

  

</div>
@include('Home.footer')

  <!-- end info section -->


  <script src="{{asset('Font_End')}}/js/jquery-3.4.1.min.js"></script>
  <script src="{{asset('Font_End')}}/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('Font_End')}}/js/custom.js"></script>

</body>

</html>