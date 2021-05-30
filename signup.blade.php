
@extends('layout.master_user')
@section('content')

<div style='width:400px;margin:auto'>

		
	<form action="{{url('signin')}}" method="post">
	{{csrf_field()}}

<table class='table table-bordered'>
		<tr>
			<td>First Name</td>
			<td><input type='text' name='fnm' value=''></tr>
		<tr>	<td>Last Name</td>
				<td><input type='text' name='lnm' value=''></tr>
		
		<tr>	<td>User Name</td>
				<td><input type='text' name='unm' value=''></tr>
		
		<tr>	<td>Create Password</td>
			<td><input type='password' name='pass' value=''></tr>
			
		<tr>	<td>Email</td>
			<td><input type='email' name='emn' value=''></tr>
			
		<tr>	<td>Address</td>
			<td><input type='text' name='add' value=''></tr>
		
		<tr>	<td>Contact Number</td>
			<td><input type='number' name='contact' value='' maxlength='10'></tr>
			
			<td colspan=2><input type='submit' name='sb' value='Sign in'>
		</tr>
	
	</table>


</form>

@endsection