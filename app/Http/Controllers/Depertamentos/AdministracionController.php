<?php

namespace App\Http\Controllers\Depertamentos;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    public function __invoke()
    {
        $videos = Videos::where('categoria', 'administracion')->get();
        return view('Departamentos.administracion', compact('videos'));
    }
}
