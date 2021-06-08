<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;


class ComingSoon extends Component
{
    public $comingSoon = [];

    public function loadComingSoon()
    {
        $current = Carbon::now()->timestamp;

        $comingSoonUnformatted = Http::withHeaders([
            'Client-ID' => '9i0uypd0v169xox53erkm5bdbrepmm',
            'Authorization' => 'Bearer sv976lbh5nymcf3zhl95wqqz7gvn0a'
        ])
            ->withBody(
                "
                fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, slug, summary, rating;
                    where platforms = (48,49,130,6)
                    & first_release_date >= {$current};
                    sort first_release_date asc;
                    limit 4;", "text/plain"
                )->post('https://api.igdb.com/v4/games')
                ->json();

            // dump($this->formatForView($comingSoonUnformatted));

            $this->comingSoon = $this->formatForView($comingSoonUnformatted);
    }
    public function render()
    {
        return view('livewire.coming-soon');
    }

    public function formatForView($games)
    {
        return collect($games)->map(function($game) {
            return collect($game)->merge([
                'coverImageUrl' => Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']),
                'releaseDate' => Carbon::parse($game['first_release_date'])->format('M d, Y'),
            ]);
        })->toArray();
    }
}
