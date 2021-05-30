@extends('layout.master_user')
@section('content')

<form action ="{{url('login')}}" method="post">
{{csrf_field()}}

<div style='width:400px;margin:auto'>
<table class='table table-bordered'>
		
<tr>
<td>User name</td>
			<td><input type='text' name='Unm' value=''>
</tr>

<tr>
<td>Password</td>
			<td><input type='Password' name='pass' value=''>
</tr>
	<tr><td colspan=2><input type='submit' name='sb' value='Log in'>
		</tr>
	
	




</table>
@endsection