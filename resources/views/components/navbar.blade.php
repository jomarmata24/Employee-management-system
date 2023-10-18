<nav class="bg-white p-5">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <h1 class="text-3xl font-bold tracking-tight text-gray-800">Dashboard</h1>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <div class="relative mt-2 rounded-md shadow-sm">
                            <input type="text" name="search" class="block w-96 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-2 ring-inset ring-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    
                    <button type="button"
                        class="relative rounded-full bg-white p-1 text-gray-900 hover:text-gray-900 focus:outline-none focus:ring-3 focus:ring-gray-900 focus:ring-offset-2 focus:ring-offset-gray-900">
                        <span class="absolute -inset-1.5"></span>
                        
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                   
                    <div class="relative ml-3">
                        <div>
                            <button type="button"
                                class="relative flex max-w-xs items-center rounded-full bg-gray-900 text-sm focus:outline-none focus:ring-1 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-gray-400"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <img class="h-8 w-8 rounded-full" src="assets/images/W-Suit-Jomar Mata.jpg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                   
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
       
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                <img class="h-8 w-8 rounded-full" src="assets/images/W-Suit-Jomar Mata.jpg" alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-gray-600">Jomar Mata</div>
                    <div class="text-sm font-medium leading-none text-gray-600">ramilojomar2001@gmail.com</div>
                </div>
                <button type="button"
                    class="relative ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-900 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>