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
    <iframe id="inlineFrameExample"
        title="Inline Frame Example"
        width="300"
        height="200"
        src="/videos/{{ $videos[0]['path'] }}">
    </iframe>
   -->

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
                <a class="mr-5 hover:text-gray-900">First Link</a>
                <a class="mr-5 hover:text-gray-900">Second Link</a>
                <a class="mr-5 hover:text-gray-900">Third Link</a>
                <a class="hover:text-gray-900">Fourth Link</a>
              </nav>
              <a class="flex items-center order-first mb-4 font-medium text-gray-900 lg:order-none lg:w-1/5 title-font lg:items-center lg:justify-center md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 p-2 text-white bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                  <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Tailblocks</span>
              </a>
              <div class="inline-flex ml-5 lg:w-2/5 lg:justify-end lg:ml-0">
                <button class="inline-flex items-center px-3 py-1 mt-4 text-base bg-gray-100 border-0 rounded focus:outline-none hover:bg-gray-200 md:mt-0">Button
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </button>
              </div>
            </div>
          </header>

        <section class="text-gray-600 body-font">
            <div class="container px-5 pb-24 mx-auto">
              <!--
              <div class="flex flex-wrap w-full mb-20">
                <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
                  <h1 class="mb-2 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Pitchfork Kickstarter Taxidermy</h1>
                  <div class="w-20 h-1 bg-indigo-500 rounded"></div>
                </div>
                <p class="w-full leading-relaxed text-gray-500 lg:w-1/2">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
              </div>  -->

              @livewire('search')

              @livewire('card')
              
            </div>
          </section>

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
