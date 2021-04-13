<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function list_of_ideas_shows_on_main_page()
    {
        $idea01 = Idea::factory()->create([
            'title' => 'My first idea title',
            'description' => 'My first idea description',
        ]);

        $idea02 = Idea::factory()->create([
            'title' => 'My second idea title',
            'description' => 'My second idea description',
        ]);

        $this->get('/')
            ->assertSuccessful()
            ->assertSee($idea01->title)
            ->assertSee($idea01->description)
            ->assertSee($idea01->category->name)
            ->assertSee($idea02->title)
            ->assertSee($idea02->description)
            ->assertSee($idea02->category->name);
    }

    /** @test */
    function single_idea_shows_correctly_on_the_show_page()
    {
        $idea = Idea::factory()->create();

        $this->get(route('idea.show', $idea))
            ->assertSuccessful()
            ->assertSee($idea->title)
            ->assertSee($idea->category->name)
            ->assertSee($idea->description);
    }

        /** @test */
    function same_idea_title_different_slugs()
    {
        $idea01 = Idea::factory()->create([
            'title' => 'My first idea',
        ]);

        $idea02 = Idea::factory()->create([
            'title' => 'My first idea',
        ]);

        $this->assertNotEquals($idea01->slug, $idea02->slug);
    }
}
