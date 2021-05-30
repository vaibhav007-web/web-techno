@extends('layout.master_admin')
@section('content')
	<div style='width:400px;margin:auto'>

<form action="{{url('addp')}}" method='post'  enctype="multipart/form-data">
	{{csrf_field()}}


	
		<table border='1' align='center' class='table table-bordered'>
						<tr>
				<td colspan='2' align='center'>
					Add Product
				</td>
			</tr>

			<tr>
			
				<td>Category</td>
				<td><select name='ddct' class='form-control'>
					<option value=''>Select Category</option>
						<?php
						
							$arr=DB::select("select category from addcategory");
							
						?>
						@foreach($arr as $values)
							<option value="{{$values->category}}">{{$values->category}}</option>
				@endforeach
				</select></td></tr>
				<tr>
			
				<td>SubCategory</td>
				<td><select name='sbc' class='form-control'>
					<option value=''>Select SubCategory</option>
						<?php
						
							$ar=DB::select("select Subcategory_name from subcategory");
							
						?>
						@foreach($ar as $values)
							<option value="{{$values->Subcategory_name}}">{{$values->Subcategory_name}}</option>
				@endforeach
				</select></td></tr>
			<tr>	<td>Type</td>
			
				<td><select name='typ' class='form-control'>
					<option value=''>Select Type</option>
						<?php
						
							$a=DB::select("select Type from type");
							
						?>
						@foreach($a as $values)
							<option value="{{$values->Type}}">{{$values->Type}}</option>
				@endforeach
				</select></td></tr>
				
				
								<td>Product Name</td>
				<td><input type='text' name='pro' value='' class='form-control'></td></tr>
				<td>Price</td>
				<td><input type='text' name='pri' value='' class='form-control'></td></tr>
				<td>Photo</td>
				<td><input type='file' name='aa' value='' class='form-control'></td></tr>

				
				
				
			<tr><td colspan='2' align='center'><input type='submit' value='Add product' class='btn btn-primary'></td>
			</tr>
			
	
		</table>
</form>	

</div>

<div>


<table  border='1' align='center' id='example1' class='table table-bordered table-striped' id="example" 
class="display" style="width:100%"
 cellspacing=0 cellpadding=10>
	<thead>
	<tr><th>Id</th>
	<th>CATEGORY</th>
	<th>SUBCATEGORY</th>
	
	<th>TYPE</th>																													
	<th>PRODUCT</th>
	<th>PRICE</th>
	<th>PHOTO</th>
	
	
	<th>Delete</th>
	<th>Edit</th>
	
	</tr>
	</thead><tbody>
<hr size=10 color=black>
	<?php
$data=DB::select("select * from products");

	?>
@foreach($data as $values)

  <tr>
	<td>{{$values->id}}</td>
	<td>{{$values->Category}}</td>
	
	<td>{{$values->Subcategory}}</td>
	<td>{{$values->Type}}</td>
	<td>{{$values->Product}}</td>
	<td>{{$values->Price}}</td>
	<td><image src="photos/{{$values->Photo}}" height="80px" width="80px"></td>
	
	
	<td><a href="{{url('deletes/')}}/{{$values->id}}" class='btn btn-primary'>  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Delete</strong></span>    </a></td>
	<td><a href="{{url('edits/')}}/{{$values->id}}" class='btn btn-primary'>
	  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span></a></td>
	
	
  
  
  </tr>

@endforeach
</tbody>
</table>

@endsection

