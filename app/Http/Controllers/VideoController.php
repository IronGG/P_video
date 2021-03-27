<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //fonction d'affichage de l'accueil
    public function show()
    {
        return view('accueil', [
            'videos' => Video::all()
        ]);
    }
}
