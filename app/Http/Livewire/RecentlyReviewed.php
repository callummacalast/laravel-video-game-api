<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;


class RecentlyReviewed extends Component
{

    public $recentlyReviewed = [];

    public function loadRecentlyReviewed()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $recentlyReviewedUnformatted = Http::withHeaders([
            'Client-ID' => '9i0uypd0v169xox53erkm5bdbrepmm',
            'Authorization' => 'Bearer sv976lbh5nymcf3zhl95wqqz7gvn0a'
        ])
            ->withBody(
                "
                fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, slug, summary, rating;
                    where platforms = (48,49,130,6)
                    & ( first_release_date >= {$before}
                    & first_release_date < {$current}
                    & total_rating_count > 5);
                    sort total_rating_count desc;
                    limit 3;", "text/plain"
                )->post('https://api.igdb.com/v4/games')
                ->json();

                // dd($this->formatForView($recentlyReviewedUnformatted));
                $this->recentlyReviewed = $this->formatForView($recentlyReviewedUnformatted);   
             }
        public function render()
        {
            return view('livewire.recently-reviewed');
        }

        private function formatForView($games)
        {
            return collect($games)->map(function($game) {
                return collect($game)->merge([
                    'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                    'rating' => isset($game['rating']) ? round($game['rating']).'%' : null,
                    'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),   
                ]);
            })->toArray();

        }
}
