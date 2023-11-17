<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class EstudianteController extends Controller
{
    protected static $url = "http://localhost/Quinto/api.php";
    /**
     * Display a listing of the resource.
     */
    public static function index()
    {
        $estudiantes = Http::GET(static::$url);
        $estudiantesArray = $estudiantes->json();
        return view('estudiante.mostrar', compact('estudiantesArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::asForm()->post(static::$url, [
            'cedula' => $request->input('cedula'),
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono')
        ]);

        return redirect('/estudiantes');
    }



    /**
     * Display the specified resource. ESTE METODO CREO Q ES XD PORQUE NO VAMOS A UTILIZAR. . . ª
     */
    //public function show(string $id)
    //{
    //    echo "ass";
    //}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiantes = Http::get(static::$url)->json();

        $estudiante = collect($estudiantes)->firstWhere('cedula', $id);

        return view('estudiante.editar', with(['estudiante' => $estudiante]));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request)
    {
        $cedula = $request->input('cedula');
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');

        // Datos que quieres enviar en la solicitud PUT
        $data = [
            'cedula' => $cedula,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'direccion' => $direccion,
            'telefono' => $telefono,
        ];
        $response = Http::asForm()->put(static::$url, $data);
        return redirect('/estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cedula)
    {
        $response = Http::delete(static::$url . "?var=" . $cedula);



        // Redirigimos a la página de listado de estudiantes
        return redirect('/estudiantes');
    }
}
