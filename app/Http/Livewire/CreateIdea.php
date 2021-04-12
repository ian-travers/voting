<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Livewire\Component;

class CreateIdea extends Component
{
    public string $title = '';
    public int $category = 1;
    public string $description = '';

    protected $rules = [
        'title' => 'required|min:4|max:255',
        'category' => 'required|exists:categories,id',
        'description' => 'required',
    ];

    public function createIdea(): RedirectResponse
    {
        if (!auth()->check()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();

        Idea::create([
            'user_id' => auth()->id(),
            'category_id' => $this->category,
            'status_id' => 1,
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->reset();

        session()->flash('success', 'Idea has been added successfully');

        return redirect()->route('idea.index');
    }

    public function render()
    {
        return view('livewire.create-idea', [
            'categories' => Category::all(),
        ]);
    }
}
