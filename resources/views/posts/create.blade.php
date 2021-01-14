<html>
<body>
<header>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>
<div class="container mt-3">
<div class="card border-dark mb-3">
  <div class="card-header">
    Post Form
  </div>
  <div class="card-body">
	@if(Session::has('post_created'))
		<div class="alert alert-success" role="alert">{{Session::get('post_created')}}</div>
	@endif
    <form method="post" action="{{route('posts.store')}}">
		@csrf
	  <div class="form-group">
		<label for="">Ttile address</label>
		<input name="title" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter title">
		@error('title')
			<span class="text-danger">{{$message}}</span>
		@enderror
	  </div>
	  <div class="form-group">
		<label for="">Password</label>
		<textarea name="description" class="form-control" placeholder="description"></textarea>
	  @error('description')
		<span class="text-danger">{{$message}}</span>
	  @enderror
	  </div>
	  <button type="submit" class="btn btn-warning">Submit</button>
	</form>
  </div>
</div>
	
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>