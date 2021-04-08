<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::group([
   'as' => 'idea',
], function () {
    Route::get('/', [IdeaController::class, 'index'])->name('.index');
    Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('.show');
});

require __DIR__.'/auth.php';
