<div wire:init="loadRecentlyReviewed" class="recently-reviewed-container space-y-12 mt-8">
    @forelse($recentlyReviewed as $game)
        <div class="game bg-gray-600 rounded-lg shadow-md flex px-6 py-6">
            <div class="relative inline-block">
                <a href="{{ route('games.show', $game['slug']) }}">
                    <img src="{{ $game['coverImageUrl'] }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150" width="200">
                </a>
                @if ($game['rating'])
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px;">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ $game['rating'] }}
                        </div>
                    </div>
                @endif
            </div>  
            <div class="ml-12">
                <a href="{{ route('games.show', $game['slug']) }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-4">{{ $game['name'] }}</a>
                <div class="text-gray-400 mt-1">
                    {{ $game['platforms'] }}
                </div>
                <p class="mt-6 text-gray-400 hidden lg:block">
                    {{ $game['summary'] }}
                </p>
            </div>
        </div> 
        @empty 
            @foreach(range(1, 3) as $game)
                <div class="game bg-gray-600 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative inline-block">
                        <div class="bg-gray-800 w-44 h-56"></div>
                    </div>
                    <div class="ml-12">
                    <div class="block text-transparent text-lg bg-gray-700 inline-block leading-tight rounded mt-4">Title Goes Here</div>
                    <div class=" text-transparent text-lg bg-gray-700  leading-tight rounded mt-4">Title Goes qwert qwert</div>

                        <p class="mt-6 text-gray-400 hidden lg:block hidden">
                        <div class="lg:block hidden text-transparent text-lg bg-gray-700  leading-tight rounded mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique nisi exercitationem delectus dolorem. Cumque rem quos magni optio eveniet saepe. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum enim architecto possimus id provident consectetur excepturi sint nobis quaerat aspernatur! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, quisquam!</div>

                        </p>
                    </div>
                </div> 
            @endforeach
    @endforelse

    </div>