<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Sede;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sede=Sede::orderBy('id','DESC')->paginate(10);
        
        return view('sede.index',compact('sede'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('sede.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sedes=new sede;
        $sedes->nombre=$request->get('nombre');
        $sedes->direccion=$request->get('direccion');

        $sedes->save();
        return Redirect::to('sede');
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
        $sede=Sede::findOrFail($id);
        return view("sede.edit",["sede"=>$sede]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sede= Sede::findOrFail($id);
        $sede->nombre=$request->get('nombre');
        $sede->direccion=$request->get('direccion');

        $sede->update();
        return Redirect::to('sede');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sedes=sede::findOrFail($id);
        $sedes->delete();
        return Redirect::to('sede');
    }
}
