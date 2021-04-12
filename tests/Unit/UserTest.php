<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    function it_returns_valid_default_avatar_image_index()
    {
        $user = User::factory()->make([
            'email' => 'afake@email.com' // a = 1
        ]);

        $this->assertEquals(1, $user->getDefaultAvatarIndex());

        $user = User::factory()->make([
            'email' => 'zfake@email.com' // z = 26
        ]);

        $this->assertEquals(26, $user->getDefaultAvatarIndex());

        $user = User::factory()->make([
            'email' => '0fake@email.com' // '0' = 27
        ]);

        $this->assertEquals(27, $user->getDefaultAvatarIndex());

        $user = User::factory()->make([
            'email' => '9fake@email.com' // '9' = 36
        ]);

        $this->assertEquals(36, $user->getDefaultAvatarIndex());
    }

    /** @test */
    function user_can_generate_gravatar_default_image()
    {
        $user = User::factory()->make([
            'email' => 'fake@email.com' // f = 6
        ]);

        $avatarUrl = $user->getAvatar();

        $this->assertEquals(
            'https://www.gravatar.com/avatar/' . md5($user->email) . '?d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-6.png',
            $avatarUrl
        );
    }
}
