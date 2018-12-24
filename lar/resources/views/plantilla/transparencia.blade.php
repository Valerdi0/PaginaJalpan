@extends('plantilla.base')

@section('content')
	
<article class="row">
	
	<div class="col-md-12">
			
		<div class="well">

			<div class="page-header">
				<h1>Transparencia</h1>
			</div>

			<p>En este apartado presentamos a dispocición de los visitantes documentos oficiales sobre nuestra gestión.</p>

		</div>

		{{-- Esta sección sera un bucle de Posts (Los listará todos) --}}

		<section class="posts">
			
			@foreach($posts as $post)
				<article class="post">
					
					<div class="page-header">
						<h3>{{ $post->title }}<br/> <small>{{ $post->publish_date }}</small></h3>
					</div>

					<p>{{ $post->resume }}</p>

					<a href="{{ url('/post/post/'.$post->id) }}" class="btn btn-primary">Ver post -></a>

				</article>
			@endforeach

		</section>

		{{-- END Esta seccion sera un bucle de Posts --}}

	</div>

</article>

@stop