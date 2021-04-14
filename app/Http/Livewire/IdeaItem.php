<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaItem extends Component
{
    public Idea $idea;
//    public bool $hasVoted;

//    public function mount()
//    {
//        $this->hasVoted = (bool)$this->idea->voted_by_current_user;
//    }

    public function render()
    {
        return view('livewire.idea-item');
    }
}
