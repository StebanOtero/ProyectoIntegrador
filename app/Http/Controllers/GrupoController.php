<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;
use Illuminate\Support\Facades\Redirect;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grupo=Grupo::orderBy('id','DESC')->paginate(10);
        
        return view('grupo.index',compact('grupo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('grupo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $grupos=new grupo;
        $grupos->nombre=$request->get('nombre');
        $grupos->can_alum=$request->get('can_alum');
        $grupos->save();
        return Redirect::to('grupo');
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
        $grupo=Grupo::findOrFail($id);
        return view("grupo.edit",["grupo"=>$grupo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $grupo= Grupo::findOrFail($id);
        $grupo->nombre=$request->get('nombre');
        $grupo->can_alum=$request->get('can_alum');

        $grupo->update();
        return Redirect::to('grupo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grupos=grupo::findOrFail($id);
        $grupos->delete();
        return Redirect::to('grupo');
    }
}
