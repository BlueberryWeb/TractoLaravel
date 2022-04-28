<?php

namespace App\Http\Controllers\Depertamentos;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function __invoke()
    {
        $videos = Videos::where('categoria', 'almacen')->get();
        return view('Departamentos.almacen', compact('videos'));
    }
}
