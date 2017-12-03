<?php

namespace Test\Unit;

use App\User;
use App\AviVideoPlayer;
use App\Mp4VideoPlayer;
use PHPUnit\Framework\TestCase;

class PlayVideoTest extends TestCase
{
    /** @test */
    public function test_user_can_player_videos()
    {
        $user = new User;
        $aviVideo = new AviVideoPlayer;
        $mp4Video = new Mp4VideoPlayer;

        $this->assertEquals('play avi', $user->playVideo($aviVideo));
        $this->assertEquals('play mp4', $user->playVideo($mp4Video));
    }
}
