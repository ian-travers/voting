<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaItem extends Component
{
    public Idea $idea;
    public bool $hasVoted;

    public function mount()
    {
        $this->hasVoted = auth()->check()
            ? $this->idea->isVotedByUser(auth()->user())
            : false;
    }

    public function render()
    {
        return view('livewire.idea-item');
    }
}
