<div class="relative">
    <input 
        wire:model.debounce.300ms="search"
        type="text" 
        class="bg-gray-800 text-sm rounded-full px-3 py-1 pl-8 focus:outline-none focus:shadow-outline w-64" 
        placeholder="Search...">


    <div class="absolute top-0 flex items-center h-full ml-2">
        <i class="fas fa-search" class="fill-current text-gray-500 w-4"></i>
    </div>
    <div class="absolute z-50 bg-gray-800 text-xs rounded w-64 mt-2">
        <ul>
        @foreach ($searchResults as $game)
        <li class="border-b border-gray-700">
                <a href="{{ route('games.show', $game['slug']) }}" class="block hover:bg-gray-700 flex items-center transition ease-in-out duration-150 py-3 px-3">
                @isset($game['cover'])
                    <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" alt="" class="w-10">
                @endisset
                @empty ($game['cover'])
                    <img src="https://via.placeholder.com/150" alt="game cover" class="w-10">
                @endempty
                    <span class="ml-4">{{ $game['name'] }}</span>
                </a>
            </li>
        @endforeach
    
          
        </ul>
    </div>
</div>