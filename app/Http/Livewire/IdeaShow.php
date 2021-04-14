<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaShow extends Component
{
    public Idea $idea;
    public int $votesCount;
    public bool $hasVoted;

    public function mount()
    {
        $this->votesCount = $this->idea->votes()->count();

        $this->hasVoted = auth()->check()
            ? $this->idea->isVotedByUser(auth()->user())
            : false;
    }

    public function render()
    {
        return view('livewire.idea-show');
    }
}
