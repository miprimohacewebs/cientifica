<?php

namespace App\Http\Controllers;
use App\Publicaciones;
use Datatables;
use Illuminate\Http\Request;
use App\Http\Requests;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('publicaciones.index');
    }
    
    /**
     * Muestra los campos de la tablaPublicaciones
     * @return publicaciones para rellenar el datatable
     */
    public function getTablaPublicaciones()
    {
        $publicaciones = Publicaciones::all();
        return Datatables::of($publicaciones)->make(true);
        
    }
    
    public function obtenerLetras() {
        $letras = Publicaciones::obtenerLetrasSeccion();
        return Datatables::of($letras)->make(true);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}