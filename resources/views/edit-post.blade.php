<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DB Add Post</title>
	<link rel="stylesheet" href="">
	<!-- bootstrap css cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">	
</head>
<body>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">
							Edit Post
						</div>
						<div class="card-body">
 							@if(Session::has('post_updated'))
								<div class="alert alert-success" role="alert">
									{{Session::get('post_updated')}}
								</div>
							@endif 
		 					<form method="POST" action="{{route('post.update')}}">
		 					@csrf
		 					<input type="hidden" name="id" value="{{$post->id}}">
							  <div class="form-group">
							    <label for="title">Post Title</label>
							    <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="Enter Your post"/>
							  </div>
							  <div class="form-group">
							    <label for="body">Post Description</label>
							    <textarea class="form-control" name="body" id="" rows="3">{{$post->body}}</textarea>					    
							  </div><!-- 
							  <button type="submit" class="btn btn-primary">Submit</button> -->

							<input type="submit" class="btn btn-success" value="Update"/>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- bootstrap js cdn -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
