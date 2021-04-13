<?php

namespace App\Http\Controllers;

use App\Models\Idea;

class IdeaController extends Controller
{
    public function index()
    {
        return view('idea.index', [
            'ideas' => Idea::with('user', 'category', 'status')
                ->withCount('votes')
                ->latest()
                ->simplePaginate(Idea::PAGINATION_COUNT),
        ]);
    }

    public function show(Idea $idea)
    {
        return view('idea.show', compact('idea'));
    }
}
