<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jurnalistik 26</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            <script src="https://cdn.tailwindcss.com"></script>
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#011423]">
        <x-navbar></x-navbar>
        <a href="{{ route("news.index") }}" class="fixed hover:bg-white hover:text-[#F09B0E] text-stone-50 transition-all duration-100 hover:scale-110 bg-[#F09B0E] z-50 w-16 h-16 rounded-full flex items-center justify-center top-32 left-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-11">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg>
    </a>

        @if ($post->image)
        <div class="h-96 w-full">
          <img class="w-full h-full object-cover" src="{{ $post->image }}" alt="">
        </div>
        @else
        <div class="h-96 w-full">
          <img class="w-full h-full object-cover" src="{{ asset('images/landing_img1_edit.png') }}" alt="">
        </div>
        @endif
        
    <div class="inline-flex items-center justify-center w-full">
      
    <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded-sm dark:bg-gray-700">
    <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
        <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
    <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
    </svg>
    </div>
      </div>  

        <div class="flex flex-col justify-center items-center">
          <h1 class="flex items-center text-5xl font-extrabold dark:text-white">{{ $post->title }}<span class="bg-blue-100 text-blue-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-2">{{ $post->user->name }}</span></h1>


          <div class="mb-3 text-white first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-white first-letter:me-3 first-letter:float-start mt-10 mx-10">
            {!! $post->body !!} 
        </div>
        
        </div>
        </div>
      <x-footer></x-footer>
    </body>
</html>
