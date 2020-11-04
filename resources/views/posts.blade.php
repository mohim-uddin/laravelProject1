<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bootstrap project</title>
	<link rel="stylesheet" href=""> 
 <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<!-- bootstrap css cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
			<div class="education-section">
				<div class="title mb-3">
					<h3 class="text-center font-weight-bold">All Posts</h3>
				</div>
				<table class="table table-striped table-bordered table-hover table-primary">
							@if(Session::has('post_deleted'))
								<div class="alert alert-success" role="alert">
									{{Session::get('post_deleted')}}
								</div>
							@endif
					<thead class="thead-dark">
						<tr>
							<th>Title</th>
							<th>Descriptions</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($posts as $post)
						<tr>
							<td>{{$post->title}}</td>
							<td>{{$post->body}}</td>
							<td>
							<a href="/posts/{{$post->id}}" class="btn btn-success">view</a>
							<a href="/edit-post/{{$post->id}}" class="btn btn-info">Edit</a>
							<a href="/delete-post/{{$post->id}}" class="btn btn-danger">delete</a>
							</td>
						</tr>				
					@endforeach
					</tbody>
				</table>
			</div>
<!-- bootstrap js cdn -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>