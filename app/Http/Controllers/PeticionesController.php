<?php

namespace App\Http\Controllers;

use App\Models\Peticion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeticionesController extends Controller
{
    public function __invoke()
    {
        $peticiones = Peticion::all();
        return view('Peticiones.index', compact('peticiones'));
    }

    public function store(Request $request)
    {
        $peticiones = new Peticion();

        $validator = Validator::make($request->all(), [
            'colaborador' => 'required|string',
            'titulo' => 'required|string',
            'area' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            $peticiones->colaborador = $request->colaborador;
            $peticiones->titulo = $request->titulo;
            $peticiones->area = $request->area;
            $peticiones->descripcion = $request->descripcion;
            $peticiones->save();

            return redirect()->back()
                ->with('success', 'Peticion creada correctamente');
        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la alta la peticion ');
        }
    }

    public function delete($id)
    {
        $peticiones = Peticion::find($id);

        try {

            $peticiones->delete();

            return redirect()->back()
                ->with('eliminar', 'ok');
        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error al eliminar el usuario ');
        }
    }
}
