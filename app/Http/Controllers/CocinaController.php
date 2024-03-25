<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecocinaRequest;
use App\Http\Requests\UpdatecocinaRequest;
use Illuminate\Http\Request;
use App\Models\Cocina;
use App\Models\Categoria; // Importar el modelo Categoria
use App\Models\User;

class CocinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function __construct()
    {
        // Aplicar el middleware de autorización solo al método store
        $this->middleware('admin.auth')->only('store');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all(); // Obtener todas las categorías
        $usuarios = User::all(); // Obtener todos los usuarios
        return view('admin.crear', compact('categorias', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecocinaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'fecha' => 'required|date',
            'categoria_id' => 'required|exists:categorias,id',
            'usuario_id' => 'required|exists:users,id',
            'descrip' => 'required|string',
        ]);
    
        // Crear un nuevo registro de Cocina
        $cocina = new Cocina;
        $cocina->fecha = $request->fecha;
        $cocina->categoria_id = $request->categoria_id;
        $cocina->usuario_id = $request->usuario_id;
        $cocina->descrip = $request->descrip;
        $cocina->save();
        
        // Redireccionar con un mensaje de éxito
        return redirect()->route('admin.index')->with('success', 'Registro creado satisfactoriamente.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function show(Cocina $cocina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function edit(Cocina $cocina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecocinaRequest  $request
     * @param  \App\Models\Cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecocinaRequest $request, Cocina $cocina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cocina  $cocina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cocina $cocina)
    {
        //
    }
}
