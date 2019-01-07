@extends('plantilla.base')

@section('css')

<style>
	.comments {
		margin-top: 3em;
	}

	.comments .tab-content .panel {
		margin: 2em 0;
	}
</style>

@stop

@section('content')
	
<article class="row">
	
	<div class="col-md-12">
		

		<section class="post">

			@if(Auth::check())
			<a href="{{ url('/lista-post') }}" class="btn btn-primary" >Listado</a>
			@else
			<a href="{{ url('/post/list') }}" class="btn btn-primary" >Listado</a>
			@endif
			
			<article class="post">
				
				<div class="page-header">
					<h1>{{ $post->title }}<br/> <small>{{ $post->publish_date }}</small></h1>
				</div>

				<p>
					{{ $post->description }}
				</p>

				<p>
					
					<div class="row">
						@if($archivos)
							@foreach($archivos as $archivo)
								@if(strpos($archivo->nombre, ".jpg"))
								<div class="col-xs-6 col-md-3">
								    <a href="#" class="thumbnail">
								      <img src="/files/{{$archivo}}" alt="">
								    </a>
								</div>
								@endif
								@if(strpos($archivo->nombre, ".png"))
								<div class="col-xs-6 col-md-3">
								    <a href="#" class="thumbnail">
								      <img src="/files/{{$archivo->nombre}}" alt="">
								    </a>
								</div>
								@endif
								@if(strpos($archivo->nombre, ".jpeg"))
								<div class="col-xs-6 col-md-3">
								    <a href="#" class="thumbnail">
								      <img src="/files/{{$archivo->nombre}}" alt="">
								    </a>
								</div>
								@endif
								@if(strpos($archivo->nombre, ".pdf"))
								<div class="col-xs-6 col-md-3">
								    <a target="_blank" class="thumbnail" href="{{asset('/files/'.$archivo->nombre)}}">
								    	{{$archivo->nombre}}
									</a>
								</div>
								@endif
								@if(strpos($archivo->nombre, ".doc"))
								<div class="col-xs-6 col-md-3">
								    <a target="_blank" class="thumbnail" href="{{asset('/files/'.$archivo->nombre)}}">
								    	{{$archivo->nombre}}
									</a>
								</div>
								@else
								<div class="col-xs-6 col-md-3">
								    <a target="_blank" class="thumbnail" href="{{asset('/files/'.$archivo->nombre)}}">
								    	{{$archivo->nombre}}
									</a>
								</div>
								@endif
							@endforeach
						@endif
					</div>					
				</p>

			</article>

		</section>

		<hr>

		<section class="comments">
			
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#list" aria-controls="list" role="tab" data-toggle="tab">Comentarios</a>
					</li>
					<li role="presentation">
						<a href="#new" aria-controls="new" role="tab" data-toggle="tab">Nuevo</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">

					{{-- Comments list --}}
					<div role="tabpanel" class="tab-pane active" id="list">
					
						{{-- Bucle de comentarios --}}
						@foreach($comments as $comment)
							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">
										{{ $comment->username }}
										@if(Auth::check())
										<a href="{{ url('comments/deletecomment/'.$comment->id) }}" class="btn btn-danger btn-xs pull-right">X</a>
										@endif
									</h3>
								</div>
								<div class="panel-body">
									{{ $comment->text }}
								</div>
							</div>
						@endforeach
						{{-- END Bucle de comentarios --}}

					</div>

					{{-- New comment --}}
					<div role="tabpanel" class="tab-pane" id="new">
						
						<div class="well">
							
							<form action="{{ url('comments/createcomment') }}" method="POST">
								{{ csrf_field() }}
								
								<input type="hidden" name="post_id" value="{{ $post->id }}">

								<label for="user">Usuario:</label>
								<input type="text" name="user" id="user" class="form-control" required><br/>

								<label for="comment">Comentario:</label>
								<textarea rows="5" name="comment" id="comment" class="form-control" required></textarea><br/>

								<input type="submit" class="btn btn-success" value="Enviar">
								
							</form>

						</div>

					</div>
				</div>

			</div>

		</section>



	</div>

</article>

@stop