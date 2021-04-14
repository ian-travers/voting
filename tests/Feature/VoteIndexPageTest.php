<?php

namespace Tests\Feature;

use App\Http\Livewire\IdeaItem;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
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

    /** @test */
    function guest_redirect_to_login_when_trying_to_vote()
    {
        $idea = Idea::factory()->create();

        Livewire::test(IdeaItem::class, [
            'idea' => $idea,
        ])
            ->call('toggleVote')
            ->assertRedirect(route('login'));
    }

    /** @test */
    function user_can_toggle_his_vote_for_idea()
    {
        /** @var Idea $idea */
        $idea = Idea::factory()->create();

        $this->actingAs(User::factory()->create());

        Livewire::test(IdeaItem::class, [
            'idea' => $idea,
        ])
            ->call('toggleVote')
            ->assertSet('votesCount', 1)
            ->assertSet('hasVotedByCurrentUser', true);
        $this->assertDatabaseCount('votes', 1);

        Livewire::test(IdeaItem::class, [
            'idea' => $idea,
        ])
            ->call('toggleVote');

        $this->assertDatabaseCount('votes', 0);
    }
}
