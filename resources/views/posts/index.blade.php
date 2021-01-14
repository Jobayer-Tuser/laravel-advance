@extends('layouts.master')
@section('title', 'Home')
@section('content')
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
@endsection