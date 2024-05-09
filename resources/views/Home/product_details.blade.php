

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


        
          
       

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            
              <div class="img-box">
                <img src="/products/{{$data->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  {{$data->title}}
                </h6>
                <h6>
                  Price
                  <span>
                    {{$data->price}}
                  </span>
                </h6>

              
              </div>



              <div class="detail-box">
        

                <h6>
                  Category:  {{$data->category}}
                  </h6>
              </div>


              <div class="detail-box">
        
                <h6>
                    Available Quantity
                    <span>
                      {{$data->quantity}}
                    </span>
                  </h6>
               
              </div>



              <div class="detail-box">
        

                <p>
                  Description:  {{$data->description}}
                  </p>
              </div>

           

            
             
            
          </div>
        </div>

    

    </div>
  </section>




  

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