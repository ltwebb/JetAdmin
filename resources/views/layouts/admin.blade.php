<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
</head>

<body x-data="{ sidePanelisOpen: false }" @keydown.escape.window="sidePanelisOpen = false">
    <x-banner />
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900">
        <!--Desktop Sidebar navigation-->
         <x-app.admin.desktop-sidebar />
        <!--end Desktop Sidebar navigation-->
        <!-- Mobile Slide Out Menu -->
         <x-app.admin.mobile-sidebar />
        <!--end Mobile Slide Out Menu-->
        <!--Page Content-->
        <div class="flex flex-col flex-1 w-full">
            <!--Top Navigation Bar-->
            <x-app.admin.top-bar.top-nav-bar />
            <!--end Top Navigation Bar-->

            <!--Main content-->
                <div class="h-full overflow-y-auto">
                    <!--Page Header-->
                    <div class="container px-6 mx-auto grid">
                        <!-- Page Heading -->
                        @if (isset($header))
                            <header class="">
                                <div class="max-w-7xl mx-auto pl-4 mt-6">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif
                    </div>
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
    </div>
</body>

</html>
