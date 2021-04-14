<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaShow extends Component
{
    public Idea $idea;
    public int $votesCount = 0;
    public bool $hasVotedByCurrentUser = false;

    public function mount()
    {
        $this->votesCount = $this->idea->votes()->count();

        $this->hasVotedByCurrentUser = auth()->check()
            ? $this->idea->isVotedByUser(auth()->user())
            : false;
    }

    public function toggleVote()
    {
        if (auth()->guest()) {
            return redirect()->route('login');
        }

        $this->idea->toggleVote(auth()->user());

        $this->hasVotedByCurrentUser = !$this->hasVotedByCurrentUser;

        $this->hasVotedByCurrentUser
            ? $this->votesCount++
            : $this->votesCount--;
    }

    public function render()
    {
        return view('livewire.idea-show');
    }
}
