
    


<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('Admincss/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('Admincss/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('Admincss/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('Admincss/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('Admincss/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('Admincss/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




  </head>
  <body>

  @include('Admin.header')

  
<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Mark Stephen</h1>
          <p>Web Designer</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              <li class="active"><a href="{{url('Admin')}}"> <i class="icon-home"></i>Home </a></li>

              <li><a href="{{url('catagory')}}"> <i class="icon-grid"></i>Catagory </a></li>

             

              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i> Product </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('add_product')}}">Add_product</a></li>
                  <li><a href="{{url('view_product')}}">view_product</a></li>
                  <li><a href="#">Page</a></li>
                </ul>
              </li>

             

      </ul><span class="heading">Extras</span>
  
    </nav>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
            <H1>Add Product</H1>

        

            <form action="{{url('uplode_product')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text"name= "title"required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Description</label>
                  <input type="text"name= "description" required class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input type="text"name ="price" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Quantity</label>
                    <input type="text" name= "quantity"required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                  </div>

                  <div class="mb-3">

                  <select class="form-select" aria-label="Default select example" name="category" required>
                    <option selected>Add Category</option>

                    @foreach ($category as $category)
                        
                 
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    

                    @endforeach
                   
                  </select>

                </div>

                <div class="mb-3">

                    <label for="formFileLg" class="form-label">Image</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
                  </div>

                <button type="submit" class="btn btn-primary">Add_product</button>
              </form>
          
       
        
        
    </div>
    </div>
  </div>
 

    <!-- JavaScript files-->
    <script src="{{asset('Admincss')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('Admincss')}}/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="{{asset('Admincss')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('Admincss')}}/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{asset('Admincss')}}/vendor/chart.js/Chart.min.js"></script>
    <script src="{{asset('Admincss')}}/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{asset('Admincss')}}/js/charts-home.js"></script>
    <script src="{{asset('Admincss')}}/js/front.js"></script>
  </body>
</html>