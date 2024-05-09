
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
@include('Home.css')

</head>

<body>

@include('Home.slider')

  <!-- end hero area -->

  <!-- shop section -->

@include('Home.product')

  <!-- end shop section -->







  <!-- contact section -->

@include('Home.contact')

  <br><br><br>

  <!-- end contact section -->

   

  <!-- info section -->

@include('Home.footer')

  <!-- end info section -->


  <script src="{{asset('Font_End')}}/js/jquery-3.4.1.min.js"></script>
  <script src="{{asset('Font_End')}}/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{asset('Font_End')}}/js/custom.js"></script>

</body>

</html>