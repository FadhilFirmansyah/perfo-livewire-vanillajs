<?php

namespace App\Livewire;

use App\Models\Perfo;
use Livewire\Component;

class TableDesign extends Component
{
    public function render()
    {
        $migrations = Perfo::paginate(10);


        return view('livewire.table-design', [
            'migrations' => $migrations
        ]);
    }
}
