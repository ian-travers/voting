<?php

use App\Http\Controllers\IdeaController;
use App\Http\Livewire\IdeasIndex;
use Illuminate\Support\Facades\Route;

Route::group([
   'as' => 'idea',
], function () {
    Route::get('/', IdeasIndex::class)->name('.index');
    Route::get('/ideas/{idea:slug}', [IdeaController::class, 'show'])->name('.show');
});

require __DIR__.'/auth.php';
