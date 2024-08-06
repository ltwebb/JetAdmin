<div class="flex justify-center flex-auto lg:mt-0 lg:mr-32">
    <div class="relative w-full max-w-xl mr-6 focus-within:text-indigo-500 dark:focus-within:text-gray-700">
            <input wire:model.live.debounce.500ms="search"
            class="w-full pl-8 pr-2 text-sm text-gray-700  placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-500 focus:placeholder-gray-500 focus:bg-white  focus:border-indigo-300 focus:outline-none focus:shadow-outline-indigo form-input"
            type="text" placeholder="Search for projects" aria-label="Search" />
             <svg class="w-4 h-4 absolute left-2.5 top-2.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            @if ($results['users']->isNotEmpty() || $results['posts']->isNotEmpty())
        <ul class="bg-white border border-gray-100 w-full mt-2 ">
            @foreach ($results['users'] as $user )
            <li class="flex flex-row pl-8 pr-2 py-1 border-b-2 border-gray-100 relative cursor-pointer hover:bg-yellow-50 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                    {{ $user->name }}
            </li>
            @endforeach
            @foreach ($results['posts'] as $post )
            <li class="flex flex-row pl-8 pr-2 py-1 border-b-2 border-gray-100 relative cursor-pointer hover:bg-yellow-50 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                  </svg>

                  {{ $post->title }}
            </li>
            @endforeach

        </ul>
        @endif
    </div>
</div>



