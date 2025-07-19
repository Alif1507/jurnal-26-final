<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route("post.index") }}">
                        <button class="px-6 py-3 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 
              text-white font-semibold rounded-2xl shadow-lg hover:shadow-xl 
              hover:scale-105 transition-all duration-300 ease-in-out 
              focus:outline-none focus:ring-4 focus:ring-pink-300">
  Buat Berita !
</button>
                        <a/>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
