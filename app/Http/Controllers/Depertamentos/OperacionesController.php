<?php

namespace App\Http\Controllers\Depertamentos;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function __invoke()
    {
        $videos = Videos::where('categoria', 'operacion')->get();
        return view('Departamentos.operaciones', compact('videos'));
    }
}
