@extends('layout.master_admin')
@section('content')

	<div style='width:400px;margin:auto'>
<form action="{{url('cate1')}}" method='post'  enctype="multipart/form-data">
	{{csrf_field()}}


	
		<table border='1' align='center' class='table table-bordered'>
			
			<tr>
				<td colspan='2' align='center'>
					Add category
				</td>
			</tr>
			<tr>
			
				<td>Category</td>
				<td><input type='text' class='form-control' name='cnm' value=''></td></tr>
			<tr><td colspan='2' align='center'>
			<input type='submit' class='btn btn-primary' value='Add Category'></td>
			</tr>
			
	
		</table>
</form>	


</div><div>
<hr size=10 color='black'/>
<table  border='1' align='center' id='example1' class='table table-bordered table-striped' id="example" class="display" style="width:80%"
 cellspacing=0 cellpadding=10>
	<thead>
	<tr><th>Id</th>
	<th>Category</th>
	
	<th>Delete</th>
	<th>Edit</th>
	
	</tr>
	</thead><tbody>
	<?php
	
	$data=DB::select("select * from addcategory");
	?>
@foreach($data as $values)

  <tr>
	<td>{{$values->id}}</td>
	<td>{{$values->Category}}</td>
	
	<td><a href="{{url('deletes1/')}}/{{$values->id}}">Delete</a></td>
	<td><a href="{{url('edits/')}}/{{$values->id}}">Edit</a></td>
	
	
  
  
  </tr>

@endforeach
</tbody>
</table>



@endsection
