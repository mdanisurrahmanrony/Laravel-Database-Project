<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
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
      <strong>Admin Panel</strong>
    </h2>   
  </div>
  <h4 class="card-header info-color white-text text-center py-4">
    <strong>Add Product by Filling Below Information</strong>
  </h4> 
  <form action="store" method="post">

  @csrf
    
  <br>  

  <div class="form-group w-50 mx-auto">
    <label for="productcategory">Select a Product Category</label>
    <select class="form-control" id="productcategory" name="productcategory">
      <option value="Bike">Bike</option>
      <option value="Cosmetic">Cosmetic</option>
      <option value="Medicine">Medicine</option> 
      <option value="Home Appliance">Home Appliance</option>
	</select>      
  </div>  
  <div class="form-group w-50 mx-auto">
    <label for="productname">Select a Product Name</label>
    <select class="form-control" id="productname" name="productname">
      <option value="Honda CB150R">Honda CB150R</option>
      <option value="Bajaj Discover">Bajaj Discover</option>
      <option value="Suzuki Gixxer">Suzuki Gixxer</option> 
      <option value="Iconic Eye Shadow">Iconic Eye Shadow</option>
	  <option value="Lakme Matt Lipstick">Lakme Matt Lipstick</option>
      <option value="Maybelline Highlighter">Maybelline Highlighter</option>
      <option value="Rolac 20mg">Rolac 20mg</option> 
      <option value="Maxpro 20mg">Maxpro 20mg</option>
	  <option value="Amoclav 1g">Amoclav 1g</option> 
      <option value="Miako Convection Oven">Miako Convection Oven</option>
	  <option value="General Air Conditioner">General Air Conditioner</option>
      <option value="Vision 32 Inch LED TV">Vision 32” LED TV</option> 
	</select>
  </div>
  <div class="form-group w-50 mx-auto">
    <label for="productcode">Enter a Unique Code</label>
    <input type="text" class="form-control" id="productcode" placeholder="7 Character Alphabetic Unique Code for Product" name="productcode" required>
  </div>
  <div class="form-group w-50 mx-auto">
    <label for="productwarranty">Select Warranty (months)</label>
    <select class="form-control" id="productwarranty" name="productwarranty">
      <option value="36">36</option>
      <option value="1.5">1.5</option>
      <option value="24">24</option> 
      <option value="12">12</option>	 
	</select>
  </div> 
  <div class="d-flex justify-content-center">
      <input type="submit" value="Add Product" class="btn btn-primary mb-2" style="font-size:15px;">
  </div>   
</form>

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

  <script>
    @if(session('status'))
      //alert('{{ session ('status') }}');
      swal({
         title: '{{ session ('status') }}',
         //text: "You clicked the button!",
         icon: '{{ session ('statuscode') }}',
         button: "Ok",
      });
    @endif
  </script>
</body>
</html>