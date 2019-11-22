@extends('base')
@section('main')
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	    <h1 class="navbar-brand">Administrador de Proyectos</h1>
	    <ul class="navbar-nav">
	        <li class="nav-item">
	            <a href="{{ route('proyectos.index') }}" class="btn btn-danger">Volver a Proyectos</a>
	        </li>
	    </ul>
	</nav>
	<div class="container" style="margin-top: 80px;">
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
	                        <h2 class="text-info text-center"><strong>Tareas</strong></h2>
	                        <hr>
	                        <a href="#" class="btn btn-info" data-toggle="modal">Agregar Tarea</a>
	                        <br><br>
	                        <table class="table table-striped table-bordered table-hover table-sm">
	                            <thead class="thead-dark">
	                                <tr>
	                                    <th>ID</th>
	                                    <th>Nombre</th>
	                                    <th>Descripción</th>
	                                    <th>Estatus</th>
	                                    <th colspan="2">Acciones</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	@if($tareas->count())
	                            		@foreach($tareas as $tarea)
											<tr>
												<td>{{ $tarea->id }}</td>
												<td>{{ $tarea->nombre_tarea }}</td>
												<td>{{ $tarea->descripcion }}</td>
												<td>
													@if($tarea->estatus == 1)
														<label class="switch">
		                                                    <input type="checkbox" checked>
		                                                    <span class="slider round"></span>
		                                                </label>
													@else
														<label class="switch">
		                                                    <input type="checkbox">
		                                                    <span class="slider round"></span>
		                                                </label>
													@endif
												</td>
												<td>
													<a href="#" class="btn btn-warning btn-sm">Editar</a>
												</td>
												<td>
													<a href="#" class="btn btn-danger btn-sm">Borrar</a>
												</td>
											</tr>
	                            		@endforeach
	                            	@else
	                            		<tr>
                            				<td colspan="6">No hay tareas para este proyecto... agrega una !!!</td>
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