<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>


<body>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-sm-12 bg-primary text-center'>
				<H2>WELCOME TO ONLINE SHOPPING WEBSITE</H2>
				
			</div>
		</div>
		<div class='row'>
		
			<div class='col-sm-12' style='padding:0px'>
			
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">JustOneClick.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
      <li><a href="{{url('cate')}}">ADD CATEGORY</a></li>
      <li><a href="{{url('subcate')}}">ADD SUBCATEGORY</a></li>
      <li><a href="{{url('type')}}">ADD TYPE</a></li>
      <li><a href="{{url('addproduct')}}">ADD PRODUCT</a></li>
      
	</ul>
	
  </div>
</nav>
  
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-2'>
		<ul  class='list-group'>
	<li class='list-group-item'><a href="{{url('viewcategory')}}">VIEW CATEGORY</a></li>
	  <li class='list-group-item'><a href="{{url('viewsubcategory')}}">VIEW SUBCATEGORY</a></li>
	  <li class='list-group-item'><a href="{{url('viewtype')}}">VIEW TYPE</a></li>
	  <li class='list-group-item'><a href="{{url('viewproduct')}}">VIEW PRODUCT</a></li>
	  <li class='list-group-item'><a href="{{url('vieworders')}}">VIEW ORDERS</a></li>
	  
	  </ul>
	  
    
				
			</div>
			<div class='col-sm-10'>
			@yield('content')
			</div>
		</div>
	<div class='row'>
	
		<div class='col-sm-12 text-center bg-primary' style='color:white;font-weight:bold'>
			Designed And Dev By Xyz.....
		</div>
</div>	
			
		</div>
	
</body>