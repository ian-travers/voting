<?php

namespace App\Http\Controllers;

use App\Models\Idea;

class IdeaController extends Controller
{
    public function show(Idea $idea)
    {
        return view('idea.show', compact('idea'));
    }
}
