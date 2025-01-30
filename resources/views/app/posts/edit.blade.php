<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Post
        </h2>
        <a href="{{ route('posts.index') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50 transition ease-in-out duration-150">Back to List</a>

    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <!--current images with delete button-->
                <div class="px-4 py-5 bg-white sm:p-6">
                    <p class="block font-medium text-md text-gray-700 dark:text-gray-200">Current Images</p>
                    <div class="flex flex-row flex-wrap justify-between gap-4">
                        @foreach ($post->media as $image)
                        <div class="border border-slate-4 rounded-lg shadow w-32">

                                <img class="object-cover shadow-lg rounded-lg aspect-w-3 aspect-h-2" src="{{  $image->getUrl() }}" alt="{{ $post->title }}" />

                            <div class="text-right text-sm text-neutral-600 dark:text-neutral-400 flex flex-row justify-between p-2 border-t border-slate-100">
                                <p>{{ $image->size }}</p>
                                <form action="{{ route('posts.media.destroy', [$post, $image]) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="transition-colors text-red-500 duration-200 dark:hover:text-red-700 dark:text-gray-300 hover:text-red-300 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--end current images to delete-->
                <form method="post" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="bg-white shadow overflow-hidden sm:rounded-md">
                        <div class="">
                            <div class="w-full px-4 py-5 sm:p-6">
                                <x-label for="title" class="block font-medium text-sm text-gray-700">Title</x-label>
                                <x-input type="text" name="title" id="title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ $post->title }}" />
                                @error('title')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        <div class="w-full px-4 py-5 bg-white sm:p-6">
                            <x-label for="images" class="block font-medium text-sm text-gray-700">Images</x-label>
                            <x-input type="file" multiple name="images[]" id="images" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $post->images }}" />
                            @error('image')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
