  <!-- Mobile Slide Out Menu -->
  <div x-show="sidePanelisOpen" x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

<aside
  class="fixed inset-y-0 z-20 flex-shrink-0 w-72 mt-16  overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
  x-show="sidePanelisOpen" x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="sidePanelisOpen = false"
  @keydown.escape="sidePanelisOpen = false">
  <div class="px-4 text-gray-500 dark:text-gray-400">
      <!--Close Button-->
      <div class="flex justify-end mb-2 pt-2">
          <button @click="sidePanelisOpen = false">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>


          </button>
      </div>
      <!--end Close Button-->
      <!--Logo/Mark-->
      <a class="w-52" href="#">
          <x-application-logo />
      </a>
      <!--end Logo/Mark-->


      <ul class="mt-8 space-y-3">
          <li class="relative">
              <x-app.admin.side-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke-width="1.5" stroke="currentColor" class="mr-2 w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                  </svg>
                  {{ __('Dashboard') }}
              </x-app.admin.side-link>
          </li>
          <li class="relative" x-data="{ open: false }" @click.away="open = false"
              @close.stop="open = false">
              <button @click="open = ! open"
                  class="inline-flex items-center w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start font-semibold text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out"
                  aria-haspopup="true">
                  <span class="inline-flex items-center">
                      <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path
                              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                          </path>
                      </svg>
                      <span class="ml-4">Pages</span>
                  </span>
                  <svg :class="{ 'rotate-180': open }" class="ml-2 w-4 h-4 transition-transform duration-200"
                      aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                  </svg>
              </button>

              <div x-show="open" x-transition:enter="transition ease-out duration-200"
                  x-transition:enter-start="transform opacity-0 scale-95"
                  x-transition:enter-end="transform opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75"
                  x-transition:leave-start="transform opacity-100 scale-100"
                  x-transition:leave-end="transform opacity-0 scale-95" class="w-60"
                  style="display: none;" @click="open = false">
                  <div class="">
                      <ul x-transition:enter="transition-all ease-in-out duration-300"
                          x-transition:enter-start="opacity-25 max-h-0"
                          x-transition:enter-end="opacity-100 max-h-xl"
                          x-transition:leave="transition-all ease-in-out duration-300"
                          x-transition:leave-start="opacity-100 max-h-xl"
                          x-transition:leave-end="opacity-0 max-h-0"
                          class="p-2 ml-4 mt-2 space-y-2 list-disc overflow-hidden text-sm font-medium text-gray-500  dark:text-gray-50"
                          aria-label="submenu">
                          <li
                              class="px-2 py-1 transition-colors duration-150 hover:text-gray-900 dark:hover:text-gray-200">
                              <x-app.admin.side-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                  <svg class="mr-2 w-5 h-5" aria-hidden="true" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                      <path
                                          d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                                      </path>
                                  </svg>

                                  {{ __('Dashboard') }}
                              </x-app.admin.side-link>
                          </li>
                          <li
                              class="px-2 py-1 transition-colors duration-150 hover:text-gray-900 dark:hover:text-gray-200">
                              <x-app.admin.side-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                  <svg class="mr-2 w-5 h-5" aria-hidden="true" fill="none"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      viewBox="0 0 24 24" stroke="currentColor">
                                      <path
                                          d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                                      </path>
                                  </svg>
                                  {{ __('Dashboard') }}
                              </x-app.admin.side-link>
                          </li>

                      </ul>
                  </div>
              </div>
          </li>
          <li class="relative">
              <x-app.admin.side-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke-width="1.5" stroke="currentColor" class="mr-2 w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                  </svg>
                  {{ __('Dashboard') }}
              </x-app.admin.side-link>
          </li>

      </ul>

  </div>
</aside>
<!--end Mobile Slide Out Menu-->
