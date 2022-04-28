<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class VideosController extends Controller
{
    public function __invoke()
    {
        $videos = Videos::simplePaginate(5);
        return view('Videos.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $video = new Videos();

        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'categoria' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            $video->titulo = $request->titulo;
            $video->descripcion = $request->descripcion;
            $video->categoria = $request->categoria;
            $video->save();

            return redirect()->back()
                ->with('success', 'Video agregado correctamente');
        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la alta del video ');
        }
    }

    public function edit(Request $request, $id)
    {
        $video = Videos::find($id);

        $validator = Validator::make($request->all(), [
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'categoria' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            $video->titulo = $request->titulo;
            $video->descripcion = $request->descripcion;
            $video->categoria = $request->categoria;
            $video->update();

            return redirect()->back()
                ->with('success', 'Video editado correctamente');
        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la edicion del video ');
        }
    }

    public function delete($id)
    {
        $video = Videos::find($id);

        try {

            $video->delete();

            return redirect()->back()
                ->with('eliminar', 'ok');
        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error al eliminar el video ');
        }
    }
}
