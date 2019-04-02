<?php

namespace App\Http\Controllers;

use App\Entities\Conocimiento;
use App\Entities\DatoEconomico;
use App\Entities\Empleado;
use App\Entities\Lenguaje;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        $lenguajes = Lenguaje::all();
        $cursos = Conocimiento::all();
        return view('welcome', compact('empleados', 'lenguajes', 'cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $empleado = new Empleado();
        $empleado->fill($data);
        $empleado->save();

        $datos = new DatoEconomico();
        $datos->empleado_id = $empleado->id;
        $datos->puesto = $request->puesto;
        $datos->salario = $request->salario;
        $datos->save();

        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function langStore(Request $request)
    {
        $data = $request->all();
        $lenguaje = new Lenguaje();
        $lenguaje->fill($data);
        $lenguaje->save();

        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function courseStore(Request $request)
    {
        $curso = new Conocimiento();
        $curso->curso = 1;
        $curso->porcentaje = 0;
        $curso->empleado_id = $request->empleado_id;
        $curso->lenguaje_id = $request->lenguaje;
        $curso->porcentaje = 0;
        $curso->save();

        return redirect()->route('user', $request->empleado_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('user', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $curso = Conocimiento::findOrFail($request->curso_id);
        $curso->porcentaje = $request->porcentaje;
        $curso->curso = $request->stat;
        $curso->save();

        return redirect()->route('user', $curso->empleado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lenguaje = Lenguaje::destroy($id);
        return redirect()->route('home');
    }
}
