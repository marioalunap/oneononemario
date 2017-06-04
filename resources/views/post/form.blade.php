@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Post</div>
                <div class="panel-body">

                  <form class="form-horizontal" role="form" method="POST" action="{{ route('posts.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="ejemplo_contenido">Contenido</label>
                      <input type="text" class="form-control" id="content" name="content" placeholder="Introduce tu contenido">
                    </div>
                    <button type="submit" class="btn btn-default">Enviar</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection