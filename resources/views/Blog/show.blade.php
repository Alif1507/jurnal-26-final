<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <a href="{{ route("post.index") }}" class="my-4 text-lg text-gray-500 hover:underline mb-15">&laquo; Back</a>
            
            <h1 class="flex items-center text-5xl font-extrabold dark:text-white">{{ $data->title }}<span
                    class="bg-blue-100 text-blue-800 text-2xl font-semibold me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-2">{{ $data->user->name }}</span>
            </h1>

            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

            <div class="w-64 h-auto">
                <img src="{{ $data->image }}" alt="Post Image" class="w-full h-full object-contain">
            </div>

            <div class="my-4 text-lg text-gray-500">{!! $data->body !!}</div>
            <p>{{ $data->image }}</p>


        </div>
    </div>
</x-app-layout>
