@extends('templates.default')

@section('content')

	@if($posts->count())
		@foreach($posts as $post)
			<article>
				<h2> <a href="{{ URL::action('PostController@getShow', $post->slug) }}"> {!! Markdown::parse($post->title) !!} </a> </h2>
				<p>  {!! Markdown::parse($post->body) !!} </p>
				<a href="{{ URL::action('PostController@getShow', $post->slug) }}"> &rarr; </a>
			</article>
		@endforeach

	@endif
	
@stop