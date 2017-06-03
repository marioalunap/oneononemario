@extends('layout')

@section('content')
<div style="border: 1px solid black">
<h1>Todos los post</h1>
<ul>
		@forelse ($posts as $post)
				<li>{{ $post->content }}</li>	
		@empty
				<li>{{ Vacio }}</li>	
		@endforelse	
</ul>
</div>

@stop
