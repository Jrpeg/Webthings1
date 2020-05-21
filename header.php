<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
      .nav-item{
        margin-left:7px;
      }

      #logo{
        margin-right:20px;
      }

      #NavDrop{
        margin-top: 50px;
      }

    </style>
</head>
<body>
  
  <!--Top Fixed Dark nav Bar -->
  <nav class="navbar fixd-top navbar-expand-md navbar-dark bg-dark">
      <img id="logo" src="imgs/JR.png" width="70px" height="70px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <!--Active link on Bar-->
      <ul class="navbar-nav mr-auto">
          <a class="nav-link active" href="index.php">Home</a>
        </li>

        <!--Alternate links on Bar-->
        <li class="nav-item">
          <a class="nav-link active" href="#">Profile</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="#">Link</a>  
        </li>

        <li class="nav-item">
          <li class="nav-item">
          <a class="nav-link active" href="Register.php">Register</a>  
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="Login.php">Login</a>  
        </li>


      </ul>
      
      <!--Searc bar Form-->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
 