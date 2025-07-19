<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 :text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <a href="{{ route('post.create') }}"><button type="button"
                        class="text-white mb-7 bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 :focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2">Create
                        A Post</button></a>
            </div>
            <div>
                {{ $data->links() }}
            </div>
            <div class="bg-white :bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">




                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 :text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 :bg-gray-700 :text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Author
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $d)
                                <tr
                                    class="odd:bg-white odd::bg-gray-900 even:bg-gray-50 even::bg-gray-800 border-b :border-gray-700 border-gray-200">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap :text-white">
                                        {{ $d->title }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $d->user->name }}
                                    </td>
                                    <td class="px-6 flex gap-6 py-4">
                                        <a href="{{ route('post.edit', $d->id) }}"
                                            class="font-medium text-blue-600 :text-blue-500 hover:underline">Edit</a>
                                        <a href="{{ route('post.show', $d->id) }}"
                                            class="font-medium text-green-600 :text-green-500 hover:underline">Show</a>
                                        <form action="{{ route('post.destroy', $d->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="font-medium text-red-600 :text-red-500 hover:underline"
                                                onsubmit="return confirm('Yakin Mau di Hapus?')">Delete</button>

                                        </form>
                                    </td>
                                </tr>
                        </tbody>
                    @empty
                        <tbody>
                            <tr>
                                <h1 class="text-gray-500 :text-gray-400 text-center text-4xl">Belum ada postingan
                                </h1>
                            </tr>
                        </tbody>
                        @endforelse

                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
