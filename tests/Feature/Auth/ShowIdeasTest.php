<?php

namespace Tests\Feature\Auth;

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
            ->assertSee($idea02->title)
            ->assertSee($idea02->description);
    }

    /** @test */
    function single_idea_shows_correctly_on_the_show_page()
    {
        $idea = Idea::factory()->create([
            'title' => 'My first idea title',
            'description' => 'My first idea description',
        ]);

        $this->get(route('idea.show', $idea))
            ->assertSuccessful()
            ->assertSee($idea->title)
            ->assertSee($idea->description);
    }

    /** @test */
    function ideas_pagination_works()
    {
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();

        $ideaFirst = Idea::find(1);
        $ideaFirst->title = 'My first idea';
        $ideaFirst->save();

        $ideaLast = Idea::find(Idea::PAGINATION_COUNT + 1);
        $ideaLast->title = 'My last idea';
        $ideaLast->save();

        $this->get(route('idea.index'))
            ->assertSee($ideaFirst->title)
            ->assertDontSee($ideaLast->title);

        $this->get(route('idea.index'))
            ->assertSee($ideaFirst->title)
            ->assertDontSee($ideaLast->title);

        $this->get(route('idea.index', ['page' => 2]))
            ->assertDontSee($ideaFirst->title)
            ->assertSee($ideaLast->title);
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
