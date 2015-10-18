@extends('templates.default')

@section('content')

	@if($posts->count())
		@foreach($posts as $post)
			<article>
				
				<h2> {!! Markdown::parse($post->title) !!} </h2>
				<p>  {!! Markdown::parse($post->body) !!} </p>
				<a href="{{ $post->slug }}">Read More &rarr;</a>
			</article>
		@endforeach

	@endif
	
@stop