<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            Show User
        </h2>
        <a href="{{ route('posts.index') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50 transition ease-in-out duration-150">Back to List</a>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="table-auto divide-y divide-gray-200 w-2/3 m-auto shadow">
                                <tr class="border-b">
                                    <th class="w-1/4 px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <td class="w-3/4 px-6 py-4 text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $post->title}}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                       Images
                                    </th>

                                    <td class="flex justify-between gap-4">
                                        @foreach ($post->media as $image)
                                        <img class="object-cover w-1/3" src="{{  $image->getUrl() }}" alt="{{ $post->title }}" />
                                        @endforeach
                                    </td>
                                 </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
