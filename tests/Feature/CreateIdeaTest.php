<?php

namespace Tests\Feature;

use App\Http\Livewire\CreateIdea;
use App\Models\Category;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CreateIdeaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function guests_cannot_view_create_idea_form()
    {
        $this->get(route('idea.index'))
            ->assertSuccessful()
            ->assertSee('Please login to create an idea')
            ->assertDontSee('Let us know what you would like and we\'ll take a look over!', false);
    }

    /** @test */
    function main_page_contains_create_idea_livewire_component()
    {
        $this
            ->actingAs(User::factory()->create())
            ->get(route('idea.index'))
            ->assertSeeLivewire('create-idea');
    }

    /** @test */
    function create_idea_form_validation_works()
    {
        Livewire::actingAs(User::factory()->create())
            ->test(CreateIdea::class)
            ->set('title', '')
            ->set('category', 0)
            ->set('description', '')
            ->call('createIdea')
            ->assertHasErrors(['title', 'category', 'description']);
    }

    /** @test */
    function creating_an_idea_works_correctly()
    {
        Status::factory()->create();

        Livewire::actingAs(User::factory()->create())
            ->test(CreateIdea::class)
            ->set('title', 'One think')
            ->set('category', Category::factory()->create()->id)
            ->set('description', 'One desc')
            ->call('createIdea')
            ->assertRedirect('/');

        $this->assertDatabaseCount('ideas', 1);
    }
}
