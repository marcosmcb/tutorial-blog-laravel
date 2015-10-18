@extends('templates.default')

@section('content')
	<article>
		<h2> <a href="{{ URL::action('PostController@getShow', $post->slug) }}"> {!! Markdown::parse($post->title) !!} </a> </h2>
		<p>  {!! Markdown::parse($post->body) !!} </p>
	</article>
@stop