<?php

namespace App\Http\Controllers\Depertamentos;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function __invoke()
    {
        $videos = Videos::where('categoria', 'ventas')->get();
        return view('Departamentos.ventas', compact('videos'));
    }
}
