


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

             

              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Product </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('add_product')}}">Add_product</a></li>
                  <li><a href="#">Page</a></li>
                  <li><a href="#">Page</a></li>
                </ul>
              </li>

             

      </ul><span class="heading">Extras</span>
  
    </nav>
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
            <H1>Add Catagory</H1>

            <form class="form-inline" action="{{url('Add_category')}}" method="POST">
              @csrf
                <div class="form-group mx-sm-3 mb-2">

                  

                  <input type="text" class="form-control" id="inputPassword2" placeholder="catagory" name="category">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Catagory</button>
              </form>
          <!-- Table Data-->

          <br> <br>
       
          
        <div>

          <style>
            .table_deg {
             text-align: center;
             margin: auto;
             border: 2px solid yellowgreen;
             margin-top: 50px;
            }
            th{
              background-color: slategray;
              padding: 15px;
              font-size: 20px;

              font-weight: bold;
              color: white;


            }

            td{

              color: white;
              padding: 10px;
              border: 1px solid skyblue;
            }
            </style>
            
            
            <h2>Category</h2>
            
            <table class="table_deg">
              <tr>
                <th>category</th>
                <th>Edite</th>
                <th>Delete</th>
                
              </tr>
             
              @foreach ($data as $data )
             
              <tr>
                
                <td>{{$data->category_name}}</td>
                <td><a class="btn btn-success" href="{{url('edite_category',$data->id)}}">Edite</a></td>
                <td><a class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a></td>
                
              </tr>
              @endforeach
            </table>

        </div>
        
        
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