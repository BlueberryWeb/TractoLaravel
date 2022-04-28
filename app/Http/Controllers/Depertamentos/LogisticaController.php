<?php

namespace App\Http\Controllers\Depertamentos;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;

class LogisticaController extends Controller
{
    public function __invoke()
    {
        $videos = Videos::where('categoria', 'logistica')->get();
        return view('Departamentos.logistica', compact('videos'));
    }
}
