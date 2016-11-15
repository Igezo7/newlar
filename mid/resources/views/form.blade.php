<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

{!! Form::open(['url' => '/info', 'method' => 'put']) !!}

	{!! Form::text('username',null,['id'=>'1']) !!}
	{!! Form::password('password') !!}
	{!! Form::submit() !!}

{!! Form::close() !!}

</body>
</html>