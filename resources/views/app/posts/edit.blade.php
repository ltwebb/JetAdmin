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
                <form method="post" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="bg-white shadow overflow-hidden sm:rounded-md">
                        <div class="flex flex-row justify-between">
                            <div class="w-1/2 px-4 py-5 sm:p-6">
                                <x-label for="title" class="block font-medium text-sm text-gray-700">Title</x-label>
                                <x-input type="text" name="title" id="title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                       value="{{ $post->title }}" />
                                @error('title')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        <div class="w-1/2 px-4 py-5 bg-white sm:p-6">
                            <x-label for="images" class="block font-medium text-sm text-gray-700">Images</x-label>
                            <x-input type="file" multiple name="images[]" id="images" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $post->images }}" />
                            @error('image')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                        <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
