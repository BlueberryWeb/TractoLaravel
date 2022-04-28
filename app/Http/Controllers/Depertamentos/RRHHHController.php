<?php

namespace App\Http\Controllers\Depertamentos;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Illuminate\Http\Request;

class RRHHHController extends Controller
{
    public function __invoke()
    {
        $videos = Videos::where('categoria', 'rrhhh')->get();
        return view('Departamentos.rrhhh', compact('videos'));
    }
}
