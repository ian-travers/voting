<?php

namespace Tests\Unit;

use App\Models\Idea;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IdeaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_can_check_if_idea_is_voted_by_user()
    {
        /** @var User $user */
        $user = User::factory()->create();

        /** @var Idea $idea */
        $idea = Idea::factory()->create();

        Vote::create([
            'user_id' => $user->id,
            'idea_id' => $idea->id,
        ]);

        $this->assertTrue($idea->isVotedByUser($user));
    }

    /** @test */
    function user_can_toggle_vote_for_idea()
    {
        /** @var User $user */
        $user = User::factory()->create();

        /** @var Idea $idea */
        $idea = Idea::factory()->create();

        $idea->toggleVote($user);

        $this->assertTrue($idea->isVotedByUser($user));

        $idea->toggleVote($user);

        $this->assertFalse($idea->isVotedByUser($user));
    }
}
