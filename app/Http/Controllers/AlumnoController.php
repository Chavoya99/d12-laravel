<?php

namespace App\Http\Controllers;

use App\Mail\NotificaMaterias;
use App\Models\Alumno;
use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $alumnos=Alumno::all();
        return view('alumnos.listado',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.alumnoShow', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }

    public function agendarMateria(Alumno $alumno){

        $materiasAlumno = $alumno->materias->pluck('id')->toArray();

        return view('alumnos.agendar-materia', compact('alumno', 'materiasAlumno'))
        ->with('materias', Materia::all());
    }

    public function relacionarMateriaConAlumno(Request $request, Alumno $alumno){
        
        $materia_id = $request->materia_id;
        $alumno_id= $alumno->id;

        $alumno->materias()->sync($materia_id);

        Mail::to($alumno->correo)->send(new NotificaMaterias($alumno));

        return redirect()->route('alumno.show', $alumno_id);
    }
    
}
