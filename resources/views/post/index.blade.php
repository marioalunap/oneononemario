@extends('layouts.app')

@section('content')

@if (session()->has('message')):
	{{ session()->get('message') }}
@endif

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todos los Posts</div>
                <div class="panel-body">
					@forelse ($posts as $post)
							<li>
								<a href="{{ url('posts', $post->id) }}"> 
									{{ $post->abstract }}
								</a>
							</li>	
					@empty
							<li>{{ Vacio }}</li>	
					@endforelse	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection