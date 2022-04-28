<?php

namespace App\Http\Controllers\Depertamentos;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;

class CalidadController extends Controller
{
    public function __invoke()
    {
        $videos = Videos::where('categoria', 'calidad')->get();
        return view('Departamentos.calidad', compact('videos'));
    }
}
