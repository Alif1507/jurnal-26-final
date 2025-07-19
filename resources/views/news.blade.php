<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jurnalistik 26</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles / Scripts -->

            @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    </head>
    <body class="bg-[#011423] overflow-x-hidden">
        <x-navbar></x-navbar>
        <div class="mt-32 mx-10">
            {{ $posts->links() }}
        </div>
        <div class="w-screen flex justify-center items-center">
           <form class="flex items-center justify-center" action="{{ route("news.index") }}" method="GET">
             <button type="submit" class="bg-[#F09B0E] py-2 px-4 rounded-l-xl border-2 border-[#F09B0E] transition-all duration-300 hover:bg-[#d38a0c]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
            <input type="text" name="cari" class="bg-white rounded-r-xl border-2 border-[#F09B0E] px-4 py-2 w-[300px] focus:outline-none focus:border-[#d38a0c] transition-all duration-300" placeholder="Search news...">
           </form>
        </div>
        <main class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-24 mt-24">
            
            @forelse ($posts as $post)
                <a href="{{ route('news.show', $post->id) }}" class="transform transition-transform duration-300 hover:scale-105 block">
                    <div class="w-full max-w-[362px] h-[316px] bg-white rounded-2xl relative mx-auto transition-all duration-300 hover:shadow-lg">
                        @if ($post->image)
                        <img class="w-full h-full object-cover rounded-2xl transition-all duration-300" src="{{ $post->image }}" alt="">
                        @else
                        <img class="w-full h-full object-cover rounded-2xl transition-all duration-300" src="{{ asset('images/Logo Jurnalistik 2.svg') }}" alt="">  
                        @endif
                        <div class="bg-amber-500 w-full h-[126px] absolute bottom-0 left-0 rounded-b-2xl overflow-hidden transition-all duration-300">
                            <div class="text-white ml-5 mt-2 flex flex-col gap-2">
                                <h1 class="text-white font-medium text-xl transition-all duration-300">{{ $post->title }}</h1>
                                <h1 class="text-[13px] font-light transition-all duration-300">{{ $post->user->name }}</h1>
                            </div>
                            <hr class="border-dashed my-2">
                            <div class="ml-5 text-white flex items-center mt-3 gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h1>{{ $post->created_at }}</h1>
                            </div>
                        </div>
                    </div>
                </a>

                

                
            @empty
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 col-span-full">
                    <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8 flex items-start justify-center">
                        <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Artikel Sedang Di Tulis ✍️ 🔥╰(*°▽°*)╯</h1>
                    </div>
                </div>
            @endforelse
           
        </main>
        <div class="mt-32 mx-10">
            {{ $posts->links() }}
        </div>
        <x-footer />
            </body>
</html>
