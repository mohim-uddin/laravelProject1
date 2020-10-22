<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>sample project1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!-- 	singl data -->
	<h1>This is user page: {{$name}}</h1>
	<!-- multiple data -->
	<p>{{$users['name']}}</p>
	<p>{{$users['email']}}</p>
	<p>{{$users['pass']}}</p>

</body>
</html>