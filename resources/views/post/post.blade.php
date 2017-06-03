@extends('layout')

@section('content')
<div class="media">
  <img class="d-flex mr-3" src="..." alt="Generic placeholder image">
  <div class="media-body">
    {{$post->content}}
  </div>
</div>
<div style="border: 1px solid black">
	
</div>

@stop