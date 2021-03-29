@extends('base')

@section('content')

<div class="container mx-auto">
  <div class="flex">
    <div class="w-8/12 flex-2">
      <div class="p-12">
        <h1 class="mb-5 text-xl font-bold">{{ $video->name }}</h1>
        <iframe id="inlineFrameExample"
          title="Inline Frame Example"
          width="800"
          height="400"
          src="/videos/{{ $video->path }}">
        </iframe>

        <div class="w-full max-w-4xl p-5 mt-5 -mx-3 bg-gray-100">
          <h1 class="text-lg">{{ $video->description }}</h1>
        </div>
      </div>
        
    <!-- comment form -->
    <div class="flex items-center justify-center max-w-4xl mb-4 shadow-lg">
      <form class="w-full max-w-4xl px-4 pt-2 bg-white rounded-lg">
        <div class="flex flex-wrap mb-6 -mx-3">
            <h2 class="px-4 pt-3 pb-2 text-lg text-gray-800">Add a new comment</h2>
            <div class="w-full px-3 mt-2 mb-2 md:w-full">
              <textarea class="w-full h-20 px-3 py-2 font-medium leading-normal placeholder-gray-700 bg-gray-100 border border-gray-400 rounded resize-none focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>
            </div>
            <div class="flex items-start w-full px-3 md:w-full">
              <div class="flex items-start w-1/2 px-2 mr-auto text-gray-700">
                  <svg fill="none" class="w-5 h-5 mr-1 text-gray-600" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                  <p class="pt-px text-xs md:text-sm">Some HTML is okay.</p>
              </div>
              <div class="-mr-1">
                  <input type='submit' class="px-4 py-1 mr-1 font-medium tracking-wide text-gray-700 bg-white border border-gray-400 rounded-lg hover:bg-gray-100" value='Post Comment'>
              </div>
            </div>
        </form>
      </div>
    </div>
      <!-- Will grow and shrink as needed without taking initial size into account -->
    </div>
    <div class="flex-1 w-4/12 ...">
      <!-- Pour les recommendations je vais devoir envoyer la vidéo du controlleur video à celui de livewire afin d'exclure cette la video actuelle. 
      Il faut donc créer un composant livewire pour les recommendations -> facilitée de programmation -->
      @livewire('search')
      <!-- Will grow and shrink as needed without taking initial size into account -->
        <h3 class="font-bold">Recommendations</h3>
        <div class="p-4 xl:w-1/1 md:w-1/1">
          <div class="p-2 bg-gray-100 rounded-lg">             
              <div class="w-full max-w-sm p-4 mx-auto bg-gray-100 rounded-md">
                  <div class="animate-pulse">
                      <div class="object-cover object-center w-full h-40 mb-6 bg-gray-400 rounded"></div>
                  </div>
                  <div class="flex space-x-4 animate-pulse">
                      <div class="flex-1 py-1 space-y-5">
                          <div class="space-y-2">
                              <div class="w-1/4 h-4 bg-gray-400 rounded"></div>
                              <div class="w-3/4 h-4 bg-gray-400 rounded"></div>
                          </div>
                          <div class="space-y-2 ">
                              <div class="h-4 bg-gray-400 rounded"></div>
                              <div class="h-4 bg-gray-400 rounded"></div>
                              <div class="w-5/6 h-4 bg-gray-400 rounded"></div>
                              <div></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="p-4 xl:w-1/1 md:w-1/1">
        <div class="p-2 bg-gray-100 rounded-lg">             
            <div class="w-full max-w-sm p-4 mx-auto bg-gray-100 rounded-md">
                <div class="animate-pulse">
                    <div class="object-cover object-center w-full h-40 mb-6 bg-gray-400 rounded"></div>
                </div>
                <div class="flex space-x-4 animate-pulse">
                    <div class="flex-1 py-1 space-y-5">
                        <div class="space-y-2">
                            <div class="w-1/4 h-4 bg-gray-400 rounded"></div>
                            <div class="w-3/4 h-4 bg-gray-400 rounded"></div>
                        </div>
                        <div class="space-y-2 ">
                            <div class="h-4 bg-gray-400 rounded"></div>
                            <div class="h-4 bg-gray-400 rounded"></div>
                            <div class="w-5/6 h-4 bg-gray-400 rounded"></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>

@endsection