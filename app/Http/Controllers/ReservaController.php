<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Gate;

class ReservaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            $query = $request->buscar;
            $reservas = Reserva::where('nombre', 'LIKE', '%' . $query . '%')
                                    ->orderBy('nombre', 'asc')->paginate(2); 
            return view('reservas.index', compact('reservas', 'query'));

        }
        // Obtener todos los registros
        $reservas = Reserva::orderBy('nombre', 'asc')->paginate(2); 

        // Envíar a la vista
        return view('welcome','reservas.insert', compact('reservas'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //solo lo pueda hacer el administrador del sistema
        // if(Gate::denies('administrador'))
        // {
        //     // abort(403);
        //     return redirect()->route('reservas.index');
        // }

        return view('reservas.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo $request;
        // $cedula = $request->cedula;
        // $nombre = $request->nombre;
        // $apellido = $request->apellido;
        // $telefono = $request->telefono;
        // $fecha_entrada = $request->fecha_entrada([
        //     'fecha_entrada' => 'required|unique:posts|max:255']);
        // $fecha_salida = $request->fecha_salida;
        $validated = $request->validate([

            'cedula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'fecha_entrada' => 'required|unique:reservas|max:255',
            'fecha_salida' => 'required|unique:reservas|max:255'
        ]);

            $reserva = new Reserva;

            $cedula = $request->cedula;
            $nombre = $request->nombre;
            $apellido = $request->apellido;
            $telefono = $request->telefono;
            $fecha_entrada = $request->fecha_entrada;
            $fecha_salida = $request->fecha_salida;


        Reserva::create($request->all());

        $usuario = Auth::user()->hasRol('Administrador');

        $request->session()->regenerate();

        if($usuario){
            return redirect()->route('reservas.index')->with('exito', '¡El registro se ha creado satisfactoriamente!');
        }
        return redirect()->route('reservas.create')->with('exito', '¡El registro se ha creado satisfactoriamente!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $Reserva
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = Reserva::findOrFail($id);
        // dd($desarrolladores);
        return view('reservas.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $Reserva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::denies('administrador'))
        {
            // abort(403);
            return redirect()->route('reservas.index');
        }
        $reserva = Reserva::findOrFail($id);
        return view('reservas.edit', compact('reserva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $Reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Reserva = Reserva::findOrFail($id);
        //Metodo 1: cuando por alguna razon no viene nada por parametro o no tengo todos los datos del formulario
        // $Reserva->nombre = $request->nombre;
        // $Reserva->duracion = $request->duracion;
        // $Reserva->save();
        //Metodo 2
        $Reserva->update($request->all());
        return redirect()->route('reservas.index')->with('exito','¡El registro se ha actualizado satisfactoriamente!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $Reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('administrador'))
        {
            // abort(403);
            return redirect()->route('reservas.index');
        }
        $Reserva = Reserva::findOrFail($id);
        $Reserva->delete();
        return redirect()->route('reservas.index');

        
    }
}
