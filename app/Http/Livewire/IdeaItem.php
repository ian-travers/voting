<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaItem extends Component
{
    public Idea $idea;

    public function render()
    {
        return view('livewire.idea-item');
    }
}
