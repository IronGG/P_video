<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Video;

class Search extends Component
{
    public string $query = '';
    public $videos = [];
    public int $selectedIndex = 0;

    //petit test de mon côté
    public bool $onSearch = false;

    public function incrementIndex()
    {
        //dd('Flèche du bas pressée');
        if($this->selectedIndex == Count($this->videos) - 1){
            $this->selectedIndex = 0;

            return;
        }
        $this->selectedIndex++;
    }

    public function decrementIndex()
    {
        //dd('Flèche du bas pressée');
        if($this->selectedIndex == 0){
            $this->selectedIndex = Count($this->videos) - 1;

            return;
        }

        $this->selectedIndex--;
    }

    public function resetIndex()
    {
        $this->reset('selectedIndex');
    }


    public function updatedQuery()
    {
        $words = '%' . $this->query . '%';

        if (strlen($this->query) > 2)
        {
            $this->videos = Video::where('name', 'like', $words)
            ->orWhere('description', 'like', $words)
            ->get();
            $this->resetIndex();
        }

        //dd($this->jobs);
    }

    /*
    public function showJob()
    {
        if ($this->videos->isNotEmpty()) {
            return redirect()->route('jobs.show', [$this->jobs[$this->selectedIndex]['id']]);
        }
    }*/

    public function style()
    {
        $this->onSearch = true;
    }

    public function unStyle()
    {
        $this->onSearch = false;
    }
    
    public function render()
    {
        return view('livewire.search');
    }
}
