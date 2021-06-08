  <div wire:init="loadPopularGames" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800">
    @forelse($popularGames as $game)
        <x-game-card :game="$game" />
            @empty 
            @foreach(range(1, 12) as $game)
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <div class="bg-gray-800 w-44 h-56"></div>
                    </div>
                    <div class="block text-transparent text-lg bg-gray-700  leading-tight rounded mt-4">Title Goes Here</div>
                    <div class="text-transparent bg-gray-700 rounded mt-3 inline-block">
                        PS4, PC, SWITCH
                    </div>
                </div>
            @endforeach
    @endforelse
</div> <!-- End popular games section -->  

@push('scripts')
    <script>
        Livewire.on('gameWithRatingAdded', postId => {
            console.log('A post was added with the id of: ' + params.slug);
        });
    </script>
@endpush