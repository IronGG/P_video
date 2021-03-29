<header class="text-gray-600 body-font">
    <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
      <nav class="flex flex-wrap items-center text-base lg:w-2/5 md:ml-auto">
        <a href="{{ route('accueil') }}" class="mr-5 hover:text-gray-900">Accueil</a>
        <a class="mr-5 hover:text-gray-900">Contact</a>
        <a class="mr-5 hover:text-gray-900">A propos</a>
      </nav>
      <a class="flex items-center order-first mb-4 font-medium text-gray-900 lg:order-none lg:w-1/5 title-font lg:items-center lg:justify-center md:mb-0">
        <img class="h-20" src="/pictures/logo2.png" alt="logo">
        <!--
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 p-2 text-white bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>-->
        <span class="ml-3 text-xl">iVideos</span>
      </a>
      <div class="inline-flex ml-5 lg:w-2/5 lg:justify-end lg:ml-0">
        @if (!Auth::check())
        <!--
        <form action="{{ route('login') }}">
          <button class="px-4 py-2 font-bold bg-green-400 border-r-2 border-black rounded-tl-md rounded-bl-md active:bg-green-700">Connexion</button>
        </form>
        <form action="{{ route('register') }}">
          <button class="px-4 py-2 font-bold bg-red-400 rounded-tr-md rounded-br-md">Inscription</button>
        </form>-->
          <a href="{{ route('login') }}" class="px-4 py-2 font-bold bg-green-400 rounded-tl-md rounded-bl-md focus:bg-green-500 focus:ring-2 focus:ring-green-300">Connexion</a>
          <div class="border-l-2 border-black"></div>
          <a href="{{ route('register') }}" class="px-4 py-2 font-bold bg-red-400 rounded-tr-md rounded-br-md focus:bg-red-500 focus:ring-2 focus:ring-red-300">Inscription</a>
        @else
        <!-- Settings Dropdown -->
        <div class="relative ml-3">
          <x-jet-dropdown align="right" width="48">
              <x-slot name="trigger">
                  @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                      <button class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                          <img class="object-cover w-12 h-12 rounded-full ring-4 ring-green-400" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                      </button>
                  @else
                      <span class="inline-flex rounded-md">
                          <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                              {{ Auth::user()->name }}

                              <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg>
                          </button>
                      </span>
                  @endif
              </x-slot>

              <x-slot name="content">
                  <!-- Account Management -->
                  <div class="block px-4 py-2 text-xs text-gray-400">
                      {{ __('Manage Account') }}
                  </div>

                  <x-jet-dropdown-link href="{{ route('profile.show') }}">
                      {{ __('Profile') }}
                  </x-jet-dropdown-link>

                  @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                      <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                          {{ __('API Tokens') }}
                      </x-jet-dropdown-link>
                  @endif

                  <div class="border-t border-gray-100"></div>

                  <!-- Authentication -->
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf

                      <x-jet-dropdown-link href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                      this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-jet-dropdown-link>
                  </form>
              </x-slot>
          </x-jet-dropdown>
      </div>
        @endif
      </div>
    </div>
  </header>