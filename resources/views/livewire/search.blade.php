<div class="flex items-center justify-center my-12">

    <div class="relative inline-block w-8/12 mr-5" x-data="{ open : false }">
        <!-- Block de texte (div) en relative et SVG en absolute top-0 right-0-->
        <input @click.away="{ open = false; @this.resetIndex(); }" @click="{ open = true }" class="w-full px-8 py-4 text-gray-600 text-gray-700 bg-gray-300 border-2 border-gray-500 rounded-full focus:outline-none" placeholder="Rechercher une vidéo..." wire:model="query" wire:keydown.arrow-down.prevent="incrementIndex" wire:keydown.arrow-up.prevent="decrementIndex" wire:keydown.escape="resetIndex" wire:keydown.enter="showVid">
        <svg class="absolute top-0 right-0 w-10 h-10 p-1 mt-2 mr-4 rounded-full" :class="[open ? 'bg-gray-400 text-gray-900' : 'text-gray-500']" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
        </svg>
        
        <div class="absolute bg-gray-100 text-md w-56 mt-1 {{ $onSearch == 1 ? 'border' : '' }}" x-show="open">
            @if (strlen($query) > 2)
            <div>
                @if (count($videos) > 0)
                @foreach ($videos as $index => $video)
                <p class="py-1 px-1 {{ $index == $selectedIndex ? 'shadow-md bg-gray-600 bg-opacity-20' : '' }}"> {{ $video->name }}</p>
                @endforeach
                @else
                <span>0 résultats pour "{{ $query }}"</span>
                @endif
            </div>
            @endif
        </div>
        
    </div>
    
</div>
{{-- Close your eyes. Count to one. That is how long forever feels. --}}
{{-- Nothing in the world is as soft and yielding as water. --}}