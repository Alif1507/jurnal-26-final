<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 :text-gray-200 leading-tight">
          {{ __('Post') }}
      </h2>
  </x-slot>
  
  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

          <form action="{{ route('post.update', $data->id) }}" method="post" enctype="multipart/form-data" class="max-w-sm mx-auto">
              @csrf
              @method('put')
              <div class="mb-5">
                  <label for="title" class="block mb-2 text-sm font-medium text-gray-900 :text-white">
                      Judul
                  </label>
                  <input type="text" id="title" name="title" value="{{ $data->title }}"
                      class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500 :shadow-xs-light"
                      required />
              </div>

              <div class="mb-5">
                  <label for="body" class="block mb-2 text-sm font-medium text-gray-900 :text-white">
                      Artikel
                  </label>
                  {{-- <textarea id="body" name="body" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-blue-500 :focus:border-blue-500"
                      placeholder="Let your mind imagine">{{ $data->body }}</textarea> --}}

                      <x-trix-textarea>
                        <x-slot:post>{!! old('body', $data->body) !!}</x-slot:post>
                        <x-slot:id>x</x-slot:id>
                        <x-slot:name>body</x-slot:name>
                    </x-trix-textarea>
              </div>

              <div class="mb-5">
                  <label class="block mb-2 text-sm font-medium text-gray-900 :text-white" for="image">
                      Upload Thumbnail
                  </label>
                  <input type="text" id="image" name="image" placeholder="Image URL"
                      class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 :text-gray-400 focus:outline-none :bg-gray-700 :border-gray-600 :placeholder-gray-400">
              </div>

              <button type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 :bg-blue-600 :hover:bg-blue-700 focus:outline-none :focus:ring-blue-800">
                  Update
              </button>
          </form>

      </div>
  </div>
</x-app-layout>
