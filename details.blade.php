
@extends('layout.master_user')
@section('content')

<?php
	
$arr=DB::select("select * from products where id='$id'");


?>
<div style='width:700px;margin:auto'>
<table class='table table-bordered'>
	<tr>
	@foreach($arr as $values)
	
		<td><image src="{{asset('photos')}}/<?php echo $values->Photo ?>" height=400 width=350>
		<td style='text-transform:uppercase' class='text-justify'>
		
		
		
{{$values->Product}}<br/><hr>

{{$values->Category}}<br/><hr>
{{$values->Subcategory}}<br/><hr>
{{$values->Type}}<br/><hr>
{{$values->Price}}<br/><hr>
			
		</td></tr>
<tr><td colspan='2' align='center'>
<?php 
	
	  
		if(Session::has("idd")){
	  
		?>
	<a href="{{url('addcart')}}/<?php echo $values->id; ?>" class='btn btn-primary' >ADDCART</a>
		<?php } else { ?>
	<a href="{{url('login_form')}}" class='btn btn-primary' >ADDCART</a>
		<?php } ?>
	<a href="{{url('buynow1')}}" class='btn btn-primary'>BUYNOW</a>

</td>	
	
	@endforeach

</table>



@endsection