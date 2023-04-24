<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignatura=Asignatura::orderBy('id','DESC')->paginate(10);
        
        return view('asignatura.index',compact('asignatura'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('asignatura.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asignaturas=new asignatura;
        $asignaturas->codigo =$request->get('codigo');
        $asignaturas->nombre =$request->get('nombre');
        $asignaturas->modalidad =$request->get('modalidad');
        $asignaturas->creditos =$request->get('creditos');

        $asignaturas->save();
        return Redirect::to('asignatura');

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
        $asignatura=Asignatura::findOrFail($id);
        return view("asignatura.edit",["asignatura"=>$asignatura]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $asignatura= Asignatura::findOrFail($id);
        $asignatura->codigo=$request->get('codigo');
        $asignatura->nombre=$request->get('nombre');
        $asignatura->modalidad=$request->get('modalidad');
        $asignatura->creditos=$request->get('creditos');

        $asignatura->update();
        return Redirect::to('asignatura');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asignaturas=asignatura::findOrFail($id);
        $asignaturas->delete();
        return Redirect::to('asignatura');
    }
}
