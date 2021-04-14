<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Vote;

class IdeaController extends Controller
{
    public function index()
    {
        return view('idea.index', [
            'ideas' => Idea::with('user', 'category', 'status')
                ->addSelect([
                    'voted_by_current_user' => Vote::select('id')
                        ->where('user_id', auth()->id())
                        ->whereColumn('idea_id', 'ideas.id')
                ])
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
