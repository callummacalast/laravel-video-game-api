@extends('layouts.app')

@section('content')
    
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none">
                <img src="{{  $game['coverImageUrl'] }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150"  >
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semibold text-4xl leading-tight mt-1">{{ $game['name'] }}</h2>
                <div class="text-gray-400">
                    <span>
                        
                            {{ $game['genres'] }}
                        </span>
                    &middot;
                    <span>
                   {{ $game['involvedCompanies']}}
                    </span>
                    &middot;
                    <span>
                        {{ $game['platforms'] }}
                    </span>     
                </div>

                <div class="flex flex-wrap items-center mt-8 ">
                    <div class="flex items-center">
                        <div id="memberRating" class="w-16 h-16 bg-gray-800 rounded-full relative text-xs">
                            <!-- <div class="font-semibold text-xs flex justify-center items-center h-full">
                                {{ $game['memberRating'] }}
                            </div> -->

                                @push('scripts')
                                    @include('_rating', [
                                        'slug' => 'memberRating',
                                        'rating' => $game['memberRating'],
                                        'event' => null,
                                    ])
                                @endpush

                        </div>
                        <div class="ml-4 text-xs">Member <br> Score</div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div id="criticRating" class="w-16 h-16 bg-gray-800 rounded-full relative">
                            <!-- <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    {{ $game['criticRating'] }}
                                </div>                       -->

                                @push('scripts')
                                    @include('_rating', [
                                        'slug' => 'criticRating',
                                        'rating' => $game['criticRating'],
                                        'event' => null,
                                    ])
                                @endpush

                            </div>
                        <div class="ml-4 text-xs">Critic <br> Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 lg:mt-0 lg:ml-12">
                    @if($game['social']['website'])
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="{{ $game['social']['website']['url'] }}" class="hover:text-gray-400">
                                <i class="fas fa-globe-europe"></i>
                            </a>
                        </div>
                        @endif
                        @if($game['social']['instagram'])
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="{{ $game['social']['instagram']['url'] }}" class="hover:text-gray-400">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        @endif

                        @if($game['social']['twitter'])
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="{{ $game['social']['twitter']['url'] }}" class="hover:text-gray-400">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        @endif

                        @if($game['social']['facebook'])
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="{{ $game['social']['facebook']['url'] }}" class="hover:text-gray-400">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </div>
                        @endif

                    </div>
                </div>
                <p class="mt-12">
                    {{  $game['summary']}}
                </p>

                <div class="mt-12">

                    <a href="{{ $game['trailer'] }}" target="_blank" class="inline-flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                    <i class="far fa-play-circle mr-3 "></i> Play Trailer
                    </a>
                    
                    <!-- <a class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                        Play Trailer
                    </a> -->
                </div>
                
            </div>
        </div> <!-- End Game Details-->

        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">

                @foreach($game['screenshots'] as $screenshot)
                    <div>
                        <a href="{{ $screenshot['huge'] }}">
                        <img src="{{ $screenshot['big'] }}" alt="game screenshot" class="hover:opacity-75 transition ease-in-out duration-150"  >
                        </a>
                    </div>
                    @endforeach
            </div>
        </div> <!-- End images container -->


        <div class="similar-games-container mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
           
            <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12">
            @foreach($game['similarGames'] as $game)
             <x-game-card :game="$game" />

                @endforeach
                
            </div> <!-- End popular games section -->   
        </div> <!-- End Similar Games Container -->
    </div>

@endsection