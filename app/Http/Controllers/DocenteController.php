<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Docente;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$request->user()->authorizeRoles('admin');

        $docente=Docente::orderBy('id','DESC')->paginate(10);
        
        return view('docente.index',compact('docente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docentes=new docente;
        $docentes->documento_identidad=$request->get('documento_identidad');
        $docentes->nombres=$request->get('nombres');
        $docentes->apellidos=$request->get('apellidos');
        $docentes->genero=$request->get('genero');
        $docentes->profesion=$request->get('profesion');
        $docentes->facultad=$request->get('facultad');
        $docentes->telefono=$request->get('telefono');
        $docentes->dir_resi=$request->get('dir_resi');
        $docentes->email=$request->get('email');
        $docentes->save();
        return Redirect::to('docente');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $docente=Docente::findOrFail($id);
        return view("docente.edit",["docente"=>$docente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $docente= Docente::findOrFail($id);
        $docente->documento_identidad=$request->get('documento_identidad');
        $docente->nombres=$request->get('nombres');
        $docente->apellidos=$request->get('apellidos');
        $docente->genero=$request->get('genero');
        $docente->profesion=$request->get('profesion');
        $docente->facultad=$request->get('facultad');
        $docente->telefono=$request->get('telefono');
        $docente->dir_resi=$request->get('dir_resi');
        $docente->email=$request->get('email');

        $docente->update();
        return Redirect::to('docente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $docentes=docente::findOrFail($id);
        $docentes->delete();
        return Redirect::to('docente');
    }
}
