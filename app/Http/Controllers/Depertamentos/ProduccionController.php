<?php

namespace App\Http\Controllers\Depertamentos;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;

class ProduccionController extends Controller
{
    public function __invoke()
    {
        $videos = Videos::where('categoria', 'produccion')->get();
        return view('Departamentos.produccion', compact('videos'));
    }
}
