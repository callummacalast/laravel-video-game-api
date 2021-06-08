<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;


class PopularGamesTest extends TestCase
{
    /** @test */
   public function the_game_test_shows_correct_game_info()
   {

        Http::fake([
            '' => $this->fakeSingleGame(),
        ]);
        $response = $this->get(route('games.show', 'my-older-sister-left-the-computer-so-i-got-on-and-found-myself-trying-to-coordinate-a-raid-in-a-game-and-i-dont-play-mmos'));

        $response->assertSuccessful();
       }
