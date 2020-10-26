<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>this is post post page</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>All post</h1>
	@foreach($posts as $post)
		<h2>{{$post->title}}</h2>
		<h6>{{$post->body}}</h6>
	@endforeach
</body>
</html>