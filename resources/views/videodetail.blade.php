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

          <div class="container mx-auto">
            <div class="flex">
              <div class="w-8/12 flex-2">
                <div class="p-12">
                  <iframe id="inlineFrameExample"
                    title="Inline Frame Example"
                    width="800"
                    height="400"
                    src="/videos/Urgence chirurgicale organe perforé !.mp4">
                  </iframe>
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
