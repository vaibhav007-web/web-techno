@extends('layout.master_user')
@section('content')

<?php
	
$arr=DB::select("select * from products order by id desc limit 20");

$count=1;
?>
<table class='table table-bordered'>
	<tr>
	@foreach($arr as $values)
	
		<td style='text-transform:uppercase' class='text-center'>
		
		<a href="{{url('detail')}}/<?php echo $values->id ?>">
		
			<center>
			<image src="{{asset('photos/')}}/<?php echo $values->Photo; ?>" height=150 
			width=170 class='img-thumnail'></a>
			</center><br/></a>
{{$values->Product}}
				<br/><br/>
		Price:{{$values->Price}}
			
		<?php
		
		if($count==4)
		{	
	echo "</tr><tr>";
		
		$count=0;
		}
		$count++;
		?>
	@endforeach

</table>

@endsection
