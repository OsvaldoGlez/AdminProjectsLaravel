@extends('base')
@section('main')
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	    <h1 class="navbar-brand">Administrador de Proyectos</h1>
	</nav>
	<div class="container" style="margin-top:80px">
		<div class="col-sm-12">
		 	@if(session()->get('success'))
		    	<div class="alert alert-success">
		      		{{ session()->get('success') }}  
		    	</div>
		  	@endif
		</div>
	    <div id="form">
	        <div class="container">
	            <div id="form-row">
	                <div id="form-column">
	                    <div id="form-box">
	                        <h2 class="text-info text-center"><strong>Proyectos</strong></h2>
	                        <hr>
	                        <a href="{{ route('proyectos.create')}}" class="btn btn-info">Agregar Proyecto</a>
	                        <br><br>
	                        <table class="table table-striped table-bordered table-hover table-sm">
	                            <thead class="thead-dark">
	                                <tr>
	                                    <th>ID</th>
	                                    <th>Codigo</th>
	                                    <th>Nombre</th>
	                                    <th>Descripción</th>
	                                    <th>Fecha Inicio</th>
	                                    <th>Fecha Entrega</th>
	                                    <th colspan="3">Acciones</th>
	                                </tr>
	                            </thead>
	                            <tbody>
                            		@if($proyectos->count())
                            			@foreach($proyectos as $proyecto)
                            				<tr>
                            					<td>{{ $proyecto->id }}</td>
                            					<td>{{ $proyecto->codigo_proyecto }}</td>
                            					<td>{{ $proyecto->nombre_proyecto }}</td>
                            					<td>{{ $proyecto->descripcion }}</td>
                            					<td>{{ $proyecto->fecha_inicio }}</td>
                            					<td>{{ $proyecto->fecha_entrega }}</td>
                            					<td>
                            						<a href="{{ route('tareas.show', $proyecto->id) }}" class="btn btn-secondary btn-sm">Tareas</a>
                            					</td>
                            					<td>
                            						<a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            					</td>
                            					<td>
                            						<form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST">
                            							@csrf
                            							@method('DELETE')
                            							<button class="btn btn-danger btn-sm" type="submit">Borrar</button>
                            						</form>
                            					</td>
                            				</tr>
                            			@endforeach
                            		@else
                            			<tr>
                            				<td colspan="8">No hay proyectos... agrega uno !!!</td>
                            			</tr>
                            		@endif
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection