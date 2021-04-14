<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaItem extends Component
{
    public Idea $idea;
    public int $votesCount = 0;
    public bool $hasVotedByCurrentUser = false;

    public function mount()
    {
        $this->votesCount = $this->idea->votes_count ?? 0;
        $this->hasVotedByCurrentUser = $this->idea->voted_by_current_user ?? false;
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
        return view('livewire.idea-item');
    }
}
