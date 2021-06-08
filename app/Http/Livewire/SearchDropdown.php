<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';
    public $searchResults = [];
    public function render()
    {
        $this->searchResults = Http::withHeaders([
            'Client-ID' => '9i0uypd0v169xox53erkm5bdbrepmm',
            'Authorization' => 'Bearer sv976lbh5nymcf3zhl95wqqz7gvn0a'
        ])
            ->withBody(
                "
                search \"{$this->search}\";
                fields name, cover.url, slug;
                limit 8;", "text/plain"
                )->post('https://api.igdb.com/v4/games')
                ->json();

                // dump($this->searchResults);

        return view('livewire.search-dropdown');
    }
}
