@extends('layout.master_user')
@section('content')
<div>


<table  border='1' align='center' class='table table-bordered table-striped' id="example" 
class="display" style="width:100%"
 cellspacing=0 cellpadding=10>
	<thead>
	<tr><th>Id</th>
	<th>CATEGORY</th>
	<th>SUBCATEGORY</th>
	
	<th>TYPE</th>																													
	<th>PRODUCT</th>
	<th>PRICE</th>
	<th>ORDER DATE</th>
	<th>PHOTO</th>
	
	
	
	</tr>
	</thead><tbody>
<?php $sno=1; 

$sum=0; 
$id=Session::get("idd");
$data=DB::select("select * from addcart where status='1' and userid='$id' order by order_date");

?>

@foreach($data as $values)

	<?php 
	$arr1=DB::select("select * from products where id=".$values->productid."");
	
	?>
	@foreach($arr1 as $values1)
	
	

  <tr>
	<td>{{$sno}}</td>
	<td>{{$values1->Category}}</td>
	
	<td>{{$values1->Subcategory}}</td>
	<td>{{$values1->Type}}</td>
	<td>{{$values1->Product}}</td>
	<td>{{$values1->Price}}</td>
	<td>{{$values->order_date}}</td>
	
<td><image src="{{asset('photos')}}/<?php echo $values1->Photo ?>" height=80 width=80>
			
	
	
  
  
  </tr>
<?php  
$sno++; 

$sum=$sum+$values1->Price;

?>
@endforeach


@endforeach


</tbody>
</table>

@endsection