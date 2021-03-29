@extends('base')

@section('content')

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

@endsection