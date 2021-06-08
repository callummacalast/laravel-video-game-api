<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PopularGames extends Component
{
    public $popularGames = [];

    public function loadPopularGames()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;

        $popularGamesUnformatted = Cache::remember('popular-games', 7, function() use ($before, $after) {
            return Http::withHeaders([
                'Client-ID' => '9i0uypd0v169xox53erkm5bdbrepmm',
                'Authorization' => 'Bearer sv976lbh5nymcf3zhl95wqqz7gvn0a'
            ])
                ->withBody(
                    "
                    fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, slug, rating;
                        where platforms = (48,49,130,6)
                        & ( first_release_date >= {$before}
                        & first_release_date < {$after});
                        sort total_rating_count desc;
                        limit 12;", "text/plain"
                    )->post('https://api.igdb.com/v4/games')
                    ->json();
                });
                // dd($this->formatForView($popularGamesUnformatted));

                $this->popularGames = $this->formatForView($popularGamesUnformatted);
                collect($this->popularGames)->filter(function ($game) {
                    return $game['rating'];
                })->each(function ($game) {
                    $this->emit('gameWithRatingAdded', [
                        'slug' => $game['slug'],
                        'rating' => $game['rating'] / 100
                    ]);
                });

    }

    public function render()
    {
        return view('livewire.popular-games');
    }
  

    // private function formatForView($games)
    // {

    //     return collect($games)->map(function ($game) {
    //         return collect($game)->merge([
    //             'coverImageUrl' =>  Str::replaceFirst('thumb', 'cover_big', isset($game['cover']['url']) ? 'imgs/alyx.jpg' : null),
    //             'rating' => isset($game['rating']) ? round($game['rating']) . '%' : null,
    //             'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
    //         ]);
    //     })->toArray();
    // }

   

    private function formatForView($games)
    {
        return collect($games)->map(function($game) {
            return collect($game)->merge([
                'coverImageUrl' =>  Str::replaceFirst('thumb', 'cover_big', isset($game['cover']['url']) ? 'imgs/alyx.jpg' : null),
                'rating' => isset($game['rating']) ? round($game['rating']) : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),   
            ]);
        })->toArray();

    }
    
}
