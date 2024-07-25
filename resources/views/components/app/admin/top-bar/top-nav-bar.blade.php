 <!--Top Navigation Bar-->
 <header class="z-10 py-6 bg-white shadow-md dark:bg-gray-800">
    <div
        class="container flex flex-row flex-wrap-reverse items-center justify-around h-full px-6 mx-auto text-indigo-600 dark:text-indigo-300">
        <!-- Mobile hamburger -->
        <!-- Mobile Menu Toggle -->
       <x-app.admin.top-bar.mobile-menu-toggle />
        <!-- Search input -->
        <x-app.admin.top-bar.site-search-input />
        <!--Settings-Theme-Notification-Block-->
        <ul class="flex items-center flex-shrink-0 space-x-2 lg:space-x-6">
            <!-- Darkmode Toggle -->
          <x-app.admin.top-bar.darkmode-toggle />
            <!-- Notifications Menu -->
            <x-app.admin.top-bar.notifications-menu />
            <!--Settings Menu-->
            <x-app.admin.top-bar.settings-menu />
            <!-- Team Menu -->
           <x-app.admin.top-bar.team-menu />
        </ul>
    </div>
</header>
<!--end Top Navigation Bar-->
