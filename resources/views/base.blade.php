<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
      <!--
      <main role="main" class="flex justify-center px-4 py-8">
        <div class="w-full md:8/12">
          <h1 class="my-10 text-5xl font-extrabold text-center">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-pink-500">
              Skeleton Demo
            </span>
          </h1>
        </div>
      </main>-->
      
   <!--
    <x-jet-form-section>
        <x-slot name="title">
            Delete Account
        </x-slot>
        <x-slot name="description">
            Delete Account
        </x-slot>
        <x-slot name="submit">
          test
        </x-slot>
        <x-slot name="form">
          <form action="/action_page.php">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value="John"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <input type="submit" value="Submit">
          </form> 
        </x-slot>
    </x-jet-form-section>
  -->


        <header class="text-gray-600 body-font">
            <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
              <nav class="flex flex-wrap items-center text-base lg:w-2/5 md:ml-auto">
                <a href="{{ route('accueil') }}" class="mr-5 hover:text-gray-900">Accueil</a>
                <a class="mr-5 hover:text-gray-900">Contact</a>
                <a class="mr-5 hover:text-gray-900">A propos</a>
              </nav>
              <a class="flex items-center order-first mb-4 font-medium text-gray-900 lg:order-none lg:w-1/5 title-font lg:items-center lg:justify-center md:mb-0">
                <img class="h-20" src="/pictures/logo.png" alt="logo">
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
                                  <img class="object-cover w-12 h-12 rounded-full  ring-4 ring-green-400" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
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

          @yield('content')

          <footer class="text-gray-600 body-font">
            <div class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-nowrap">
              <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 p-2 text-white bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                  </svg>
                  <span class="ml-3 text-xl">Tailblocks</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
              </div>
              <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 title-font">CATEGORIES</h2>
                  <nav class="mb-10 list-none">
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">First Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                    </li>
                  </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 title-font">CATEGORIES</h2>
                  <nav class="mb-10 list-none">
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">First Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                    </li>
                  </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 title-font">CATEGORIES</h2>
                  <nav class="mb-10 list-none">
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">First Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                    </li>
                  </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 title-font">CATEGORIES</h2>
                  <nav class="mb-10 list-none">
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">First Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                    </li>
                    <li>
                      <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                    </li>
                  </nav>
                </div>
              </div>
            </div>
            <div class="bg-gray-100">
              <div class="container flex flex-col flex-wrap px-5 py-4 mx-auto sm:flex-row">
                <p class="text-sm text-center text-gray-500 sm:text-left">© 2020 Tailblocks —
                  <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="ml-1 text-gray-600" target="_blank">@knyttneve</a>
                </p>
                <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                  <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                      <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                      <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                  </a>
                </span>
              </div>
            </div>
          </footer>
        @livewireScripts
    </body>
</html>
