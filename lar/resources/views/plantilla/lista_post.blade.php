@extends('plantilla.base')

@section('css')

<style>
	.comments {
		margin-top: 3em;
	}

	.comments .tab-content .panel {
		margin: 2em 0;
	}
	th{
		font-weight: bold;
	}

	.enlinea{
		display: inline-block;
	}
</style>

@stop

@section('content')

<!--Alert -->
  <?php $message = Session::get('message')?>
  @if($message === 'store')
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    Operacion exitosa.
  </div>
  @endif
  @if($message === 'delete')
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    Comentario eliminado.
  </div>
  @endif
  <!-- Fin  Alert -->

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Lista de publicaciones</div>

	<div class="table-responsive">
  	<table class="table table-hover table-condensed">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Resumen</th>
				<th>Descripcion</th>
				<th>Fecha de publicacion</th>
				<th>Estatus</th>
				<th>Accion</th>
			</tr>
		</thead>
		@foreach($posts as $post)
		<tbody>
			<tr>
				<td>{{$post->title}}</td>
				<td>{{$post->resume}}</td>
				<td>{{$post->description}}</td>
				<td>{{$post->publish_date}}</td>
				<td>
					@if($post->status == 1)
					Publicado
					@else
					No publicado
					@endif
				</td>
				<td>
					{!!link_to('/post/post/'.$post->id, $title = 'Ver', $attributes = ['class'=>'btn btn-primary'], $secure = null)!!}
					{!!link_to('/post/editpost/'.$post->id, $title = 'Editar', $attributes = ['class'=>'btn btn-primary'], $secure = null)!!}
					{!!link_to('/post/deletepost/'.$post->id, $title = 'Borrar', $attributes = ['class'=>'btn btn-primary'], $secure = null)!!}
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
	</div>
</div>
@stop