<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VoteIndexPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function index_page_contains_idea_item_livewire_component()
    {
        Idea::factory()->create();

        $this->get(route('idea.index'))
            ->assertSuccessful()
            ->assertSeeLivewire('idea-item');

    }
}
