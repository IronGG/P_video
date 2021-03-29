<div wire:init="loadCardData">
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex flex-wrap -m-4">

    @isset($videos)
        @foreach ($videos as $video)
        <div class="p-4 xl:w-1/4 md:w-1/2">
            <a href="/vid/{{ $video->id }}">
                <div class="p-6 bg-gray-100 rounded-lg">
                    <!--
                    <iframe class="w-full"" id="inlineFrameExample"
                        title="Inline Frame Example"
                        height="160"
                        src="/videos/{{ $video->path }}">
                        <img src="/videos/20494859.jpg" alt="miniature">
                    </iframe>-->
                    <img class="object-cover object-center w-full h-40 mb-6 rounded" src="/pictures/{{ $video->name }}.png" alt="miniature">
                    <h3 class="mt-6 text-xs font-medium tracking-widest text-indigo-500 title-font">SUBTITLE</h3>
                    <h2 class="mb-4 text-lg font-medium text-gray-900 truncate title-font ">{{ $video->name }}</h2>
                    <p class="h-20 text-base leading-relaxed">{{ $video->description }}</p>
                </div>
            </a>
            </div>
        <!--
            <div class="p-4 xl:w-1/4 md:w-1/2">
                <div class="p-6 bg-gray-100 rounded-lg">
                    <iframe id="inlineFrameExample"
                        title="Inline Frame Example"
                        width="300"
                        height="160"
                        src="/videos/{{ $video->path }}">
                        <img src="/videos/20494859.jpg" alt="miniature">
                    </iframe>
                    <h3 class="mt-6 text-xs font-medium tracking-widest text-indigo-500 title-font">SUBTITLE</h3>
                    <h2 class="mb-4 text-lg font-medium text-gray-900 title-font">{{ $video->name }}</h2>
                    <p class="h-20 text-base leading-relaxed">{{ $video->description }}</p>
                </div>
            </div>-->
        @endforeach
        @else
            @for ($i = 0; $i < 14; $i++)
            <div class="p-4 xl:w-1/4 md:w-1/2">
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
            @endfor
    @endisset

    </div>
    
</div>
