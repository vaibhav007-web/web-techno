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
	<div class='container'>
		<div class='row'>
			<div class='col-sm-12 bg-primary text-center'>
				<H2>WELCOME TO ONLINE SHOPPING WEBSITE</H2>
				
			</div>
		</div>
		<div class='row'>
		
			<div class='col-sm-12' style='padding:0px'>
			<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">JustOneClick</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('index')}}">Home</a></li>
      
		<?php
		$arr=DB::select("select * from addcategory");
		?>
		@foreach($arr as $values)
	  <li class="dropdown">
	  
        <a class="dropdown-toggle" data-toggle="dropdown" href="">{{$values->Category}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
		
		<?php
		$arr1=DB::select("select * from subcategory where Category_Name='".$values->Category."'");
		?>
		@foreach($arr1 as $values1)
          <li><a href="{{url('view_types_user')}}/<?php echo $values->Category ?>/<?php echo $values1->Subcategory_name ?>">{{$values1->Subcategory_name}}</a></li>
        @endforeach
		</ul>
      </li>
	  @endforeach
<?php 														  
if(Session::has("idd")){
 ?>
	  <li><a href="{{url('orderdelivered')}}">DELIVERED ORDERS</a>   </li>
	  <li><a href="{{url('myorder')}}">MY ORDERS</a>   </li>
	  <li>
	  <a href="{{url('logout')}}">LOGOUT</a></li>
		<?php } else { ?>
		<li><a href="{{url('login_form')}}">SIGNIN</a></li>
		<li><a href="{{url('sign')}}">SIGNUP</a></li>
		<?php } ?>
      </ul>
  </div>
</nav>
			</div>
		</div>
		<div class='row'>
			
			<div class='col-sm-12'>
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