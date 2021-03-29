<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Video;

class Card extends Component
{
    public string $data;
    public $videos;

    //public $mavartest;

    public function loadCardData()
    {
        //sleep(2);
        $this->videos = Video::all();
        //$this->mavartest = $video;
        
        //dd($this->$mavartest);
        //$this->data = "Mamma Mia";
    }

    public function render()
    {
        return view('livewire.card');
    }
}
