<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Proyecto;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view('proyectos.create', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_proyecto' => 'required',
            'nombre_proyecto' => 'required',
            'descripcion'     => 'required',
            'fecha_inicio'    => 'required',
            'fecha_entrega'   => 'required',
            'area_id'         => 'required'
        ]);

        $proyecto = new Proyecto([
            'codigo_proyecto' => $request->get('codigo_proyecto'),
            'nombre_proyecto' => $request->get('nombre_proyecto'),
            'descripcion'     => $request->get('descripcion'),
            'fecha_inicio'    => $request->get('fecha_inicio'),
            'fecha_entrega'   => $request->get('fecha_entrega'),
            'area_id'         => $request->get('area_id')
        ]);

        $proyecto->save();
        return redirect('/proyectos')->with('success','Proyecto Creado Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areas = Area::all();
        $proyecto = Proyecto::find($id);
        return view('proyectos.edit', compact('proyecto', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo_proyecto' => 'required',
            'nombre_proyecto' => 'required',
            'descripcion'     => 'required',
            'fecha_inicio'    => 'required',
            'fecha_entrega'   => 'required',
            'area_id'         => 'required'
        ]);

        $proyecto = Proyecto::find($id);
        $proyecto->codigo_proyecto = $request->get('codigo_proyecto');
        $proyecto->nombre_proyecto = $request->get('nombre_proyecto');
        $proyecto->descripcion     = $request->get('descripcion');
        $proyecto->fecha_inicio    = $request->get('fecha_inicio');
        $proyecto->fecha_entrega   = $request->get('fecha_entrega');
        $proyecto->area_id         = $request->get('area_id');

        $proyecto->save();
        return redirect('/proyectos')->with('success','Proyecto Actualizado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();

        return redirect('/proyectos')->with('success', 'Proyecto Eliminado Exitosamente');
    }
}