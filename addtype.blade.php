@extends('layout.master_admin')
@section('content')
	<div style='width:400px;margin:auto'>

<form action="{{url('subct')}}" method='post'  enctype="multipart/form-data">
	{{csrf_field()}}


	
		<table border='1' align='center' class='table table-bordered'>
						<tr>
				<td colspan='2' align='center'>
					Add Type
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
				<td>SubCategory</td>
				<td><input type='text' name='scn' value='' class='form-control'></td></tr>
			<tr><td colspan='2' align='center'><input type='submit' value='Add Subcategory' class='btn btn-primary'></td>
			</tr>
			
	
		</table>
</form>	

</div>

<div>

	<table  border='1' align='center' class='table table-bordered table-striped' id="example" class="display" style="width:80%"
	 cellspacing=0 cellpadding=10>
		<thead>
		<tr><th>Id</th>
		<th>CATEGORY</th>
		<th>SUBCATEGORY</th>
		
		<th>TYPE</th>
		
		<th>Delete</th>
		<th>Edit</th>
		
		</tr>
		</thead><tbody>
		<?php
		$data=DB::select("select * from type");
		?>
	@foreach($data as $values)

	  <tr>
		<td>{{$values->id}}</td>
		<td>{{$values->Category}}</td>
		
		<td>{{$values->Subcategory}}</td>
		<td>{{$values->Type}}</td>
		
		<td><a href="{{url('deletes/')}}/{{$values->id}}">Delete</a></td>
		<td><a href="{{url('edits/')}}/{{$values->id}}">Edit</a></td>
		
		
	  
	  
	  </tr>

	@endforeach
	</tbody>
	</table>
@endsection

