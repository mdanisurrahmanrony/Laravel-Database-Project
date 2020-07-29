<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body>
<nav class="navbar  navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/customer') }}">Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/productdetails') }}">Product Details</a>
      </li>
    </ul>
    <span class="navbar-text">      
    </span>
  </div>
</nav>
<div class="p-3 mb-2 bg-info text-white text-center">
    <h2>
      <strong>Home Page</strong>
    </h2>   
  </div>
  <div class="page-header info-color white-text text-center py-4">
    <h1>This is Home Page. Click navbar to go another page.</h1>
            
  </div>
<!-- Footer -->
<footer class="page-footer font-small teal pt-4">  
  <div class="footer-copyright text-center py-3 bg-info text-dark">
    <h5>
      <strong>© 2020 Copyright:</strong>        
    <a href="https://mdanisurrahmanrony.github.io/PortFolioRonyFirst/" class="bg-info text-dark">    
      <strong> Rony</strong>
    </h5>
    </a>
  </div>
  <!-- Copyright -->
  
</footer>
<!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/sweetalert.js"></script>
</body>
</html>