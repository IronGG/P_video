<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //fonction d'affichage de l'accueil
    public function show()
    {
        return view('home', [
            'videos' => Video::all()
        ]);
    }

    public function showOne($id)
    {
        //$video = Video::where('id', $id)->first();

        //dd($video);


        return view('video', [
            'video' => Video::where('id', $id)->first()
        ]);
    }
}
