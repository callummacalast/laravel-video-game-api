 <div wire:init="loadMostAnticipated" class="most-anticipated-container space-y-10 mt-8">
                @forelse($mostAnticipated as $game)
                    <x-game-card-small :game="$game" />
                    @empty
                            @foreach(range(1,4) as $game)
                                <div class="game flex ">
                                    <div class=" text-transparent bg-gray-800 w-15">Image</div>
                                    <div class="ml-4">
                                        <a href="#" class="text-transparent text-lg bg-gray-700 rounded">This is the name of the game</a>
                                        <div class="text-transparent text-lg mt-1 rounded bg-gray-700 inline-block">This is the date</div>
                                    </div>
                                </div>
                            @endforeach
                    @endforelse
                    
                </div>