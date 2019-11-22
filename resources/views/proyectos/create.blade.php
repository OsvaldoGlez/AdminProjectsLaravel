@extends('base')
@section('main')
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	    <h1 class="navbar-brand">Administrador de Proyectos</h1>
	</nav>
	<div class="container" style="margin-top:80px">
		@if ($errors->any())
	    <div class="alert alert-danger">
	      	<ul>
	           	@foreach ($errors->all() as $error)
	           		<li>{{ $error }}</li>
	           	@endforeach
	       	</ul>
	    </div>
	    @endif
	    <h1 class="text-info text-center"><strong>Agregar Proyecto</strong></h1>
	    <hr>
        <form action="{{ route('proyectos.store') }}" method="POST">
        	@csrf
            <div class="row">

                <!-- Inicio Primera Columna Formulario -->
                <div class="col-md-6">

                    <!-- Inicio Codigo Proyecto -->
                    <div class="form-group row">
                        <label for="codigo_proyecto" class="control-label col-sm-4 text-info"><strong>Código</strong>:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="codigo_proyecto" required>
                        </div>
                    </div>
                    <!-- Fin Codigo Proyecto -->

                    <!-- Inicio Nombre Proyecto -->
                    <div class="form-group row">
                        <label for="nombre_proyecto" class="control-label col-sm-4 text-info"><strong>Nombre Proyecto</strong>:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nombre_proyecto" required>
                        </div>
                    </div>
                    <!-- Fin Nombre Proyecto -->

                    <!-- Inicio Descripcion -->
                    <div class="form-group row">
                        <label for="descripcion" class="control-label col-sm-4 text-info"><strong>Descripción</strong>:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="descripcion" cols="20" rows="5"></textarea>
                        </div>
                    </div>
                    <!-- Fin Repetir Descripcion -->

                </div>
                <!-- Fin Primera Columna Formulario -->

                <!-- Inicio Segunda Columna Formulario -->
                <div class="col-md-6">

                    <!-- Inicio Fecha Inicio -->
                    <div class="form-group row">
                        <label for="fecha_inicio" class="control-label col-sm-4 text-info"><strong>Fecha Inicio</strong>:</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="fecha_inicio">
                        </div>
                    </div>
                    <!-- Fin Fecha Inicio -->

                    <!-- Inicio Fecha Entrega -->
                    <div class="form-group row">
                        <label for="fecha_entrega" class="control-label col-sm-4 text-info"><strong>Fecha Entrega</strong>:</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="fecha_entrega">
                        </div>
                    </div>
                    <!-- Fin Fecha Entrega -->

                    <!-- Inicio Area -->
                    <div class="form-group row">
                        <label for="area_id" class="control-label col-sm-4 text-info"><strong>Area</strong>:</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="area_id" id="area_id" required>
                                <option value="0">- Seleccione un area -</option>
                                @if($areas->count())
                                	@foreach($areas as $area)
										<option value="{{ $area->id }}">{{ $area->nombre_area }}</option>
                                	@endforeach
                                @else
                                	<option value="0">- Seleccione un area -</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <!-- Fin Area -->

                </div>
                <!-- Fin Segunda Columna Formulario -->

            </div>

            <div class="form-group row">                
                <div class="col-md-12">
                    <input type="submit" class="btn btn-info" value="Guardar">
                    <a href="{{ route('proyectos.index') }}" class="btn btn-info">Cancelar</a>
                </div>
            </div>

        </form>
    </div>
@endsection