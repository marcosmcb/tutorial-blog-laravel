@extends('templates.default')

@section('title')
	{{ $post->title }}
@stop

@section('content')
	<article>
		<h2> <a href="{{ URL::action('PostController@getShow', $post->slug) }}"> {!! Markdown::parse($post->title) !!} </a> </h2>
		<p>Published on {{ $post->created_at->format('l jS \\of F Y') }} </p>
		{!! Markdown::parse($post->body) !!}
	</article>
@stop