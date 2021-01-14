<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
<div class="container mt-3">
	<h3>Posts</h3>
	@if(count($posts)>1)
		@foreach($posts as $post)
			<div class="well well-sm">
				<h3>{{$post->title}}</h3>
				<p>{{$post->description}}</p>
			</div>
		@endforeach
	@endif
{{--<div class="card border-dark mb-3">
	  <div class="card-header">
		All Posts
	  </div>
	  <ul class="list-group list-group-flush">
		@foreach($posts as $post)
			<li class="list-group-item">
				<h4>{{$post->title}}</h4>
				<p>{{$post->description}}</p>
			</li>
		@endforeach
	  </ul>
</div>--}}
</div>

</body>
</html>