@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post {{$post->id}} : {{ $post->abstract }}...</div>
                <div class="panel-body">
					{{$post->content}}
                
                <div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('posts.destroy',$post->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                         <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>    
                </div>    
				<footer>
					Publicado {{ $post->created_at }}
				</footer>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
