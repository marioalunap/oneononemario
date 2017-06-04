@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todos los Posts</div>
                <div class="panel-body">
					@forelse ($posts as $post)
							<li>
								<a href="{{ url('posts', $post->id) }}"> 
									{{ $post->content }}
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