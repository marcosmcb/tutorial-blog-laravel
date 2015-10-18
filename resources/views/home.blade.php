@extends('templates.default')
@section('title')
	Home
@stop
@section('content')

	@if($posts->count())
		@foreach($posts as $post)
			<article>
				<h2> <a href="{{ URL::action('PostController@getShow', $post->slug) }}"> {!! Markdown::parse($post->title) !!} </a> </h2>
				<p>Published on {{ $post->created_at->format('l jS \\of F Y') }} </p>
				{!! Markdown::parse($post->body) !!}
				<a href="{{ URL::action('PostController@getShow', $post->slug) }}"> &rarr; </a>
			</article>
		@endforeach

	@endif
	
@stop