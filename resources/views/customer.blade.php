<!DOCTYPE html>
<html>
<head>
  <title>Customer Page</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
      <strong>Customer Interface</strong>
    </h2>   
  </div>
  <h4 class="card-header info-color white-text text-center py-4">
    <strong>Search Product Using Unique Product Code</strong>
  </h4>     
  <br> 
<form action="search" method="POST" role="search">  
@csrf
  <br>     
  <div class="form-group w-50 mx-auto">
    <label for="productcode">Enter Product Code</label>
    <input type="text" class="form-control" id="age" placeholder="Enter 7 Character Product Code for Product Details" name="q">
  </div>
  
  <div class="d-flex justify-content-center">
      <input type="submit" value="Check Product" class="btn btn-primary mb-2" style="font-size:15px;">
  </div>   
</form>

@if(isset($details))
  <h5 style="text-align:center;"> You have entered: <b> {{ $query }} </b> </h5>
  <h5 style="text-align:center;"> According to Your Query Product Details </h5>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Category</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Code</th>
      <th style="text-align:center;" scope="col">Warranty Started From</th>
      <th style="text-align:center;" scope="col">Warranty (In Month)</th>
    </tr>
  </thead>
  <tbody>

  @foreach($details as $pd)
    <tr>      
      <td>{{ $pd->productcategory }}</td>
      <td>{{ $pd->productname }}</td>
      <td>{{ $pd->productcode }}</td>
      <td style="text-align:center;">{{ $pd->created_at }}</td>
      <td style="text-align:center;">{{ $pd->productwarranty }}</td>  
    </tr>    
  @endforeach
  </tbody>
</table>
@elseif(isset($message))
<h4 class="text-danger" style="text-align:center;"> <strong> {{ $message }} </strong></h4>
@endif
<!-- Footer -->
<footer class="page-footer font-small teal pt-4">  
  <div class="footer-copyright text-center py-3 bg-info text-dark">
    <h4>
      <strong>© 2020 Copyright:</strong>        
    <a href="https://mdanisurrahmanrony.github.io/PortFolioRonyFirst/" class="bg-info text-dark">    
      <strong> Rony</strong>
    </h4>
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