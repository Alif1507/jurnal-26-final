<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 :text-gray-200">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" class="mx-auto max-w-sm">
                @csrf
                <div class="mb-5">
                    <label for="title" class="mb-2 block text-sm font-medium text-gray-900 :text-white">
                        Judul
                    </label>
                    <input type="text" id="title" name="title"
                        class="shadow-xs :shadow-xs-light block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 :border-gray-600 :bg-gray-700 :text-white :placeholder-gray-400 :focus:border-blue-500 :focus:ring-blue-500"
                        required />
                </div>

                <div class="mb-5">
                    <label for="body" class="mb-2 block text-sm font-medium text-gray-900 :text-white">
                        Artikel
                    </label>
                    {{-- <textarea id="body" name="body" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                      placeholder="Let your mind imagine"></textarea> --}}
                      <x-trix-textarea>
                        <x-slot:post>{!! old('body') !!}</x-slot:post>
                        <x-slot:id>x</x-slot:id>
                        <x-slot:name>body</x-slot:name>
                    </x-trix-textarea>
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 :text-white" for="image">
                        Upload Thumbnail
                    </label>
                    <input type="text" id="image" name="image" placeholder="Image URL"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none :border-gray-600 :bg-gray-700 :text-gray-400 :placeholder-gray-400">
                </div>

                <button type="submit"
                    class="mb-2 me-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 :bg-blue-600 :hover:bg-blue-700 :focus:ring-blue-800">
                    Post
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
