<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaShow extends Component
{
    public Idea $idea;
    public int $votesCount;

    public function mount()
    {
        $this->votesCount = $this->idea->votes()->count();
    }

    public function render()
    {
        return view('livewire.idea-show');
    }
}
