        <nav @keydown.escape.window="mobileOpen = false" class="bg-gray-800 dark:bg-gray-800/50" x-data="{ mobileOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img alt="Your Company" class="size-8"
                                src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" />
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link :current="request()->is('/')" href="/">Home</x-nav-link>
                                <x-nav-link :current="request()->is('posts')" href="/posts">Blog</x-nav-link>
                                <x-nav-link :current="request()->is('about')" href="/about">About</x-nav-link>
                                <x-nav-link :current="request()->is('contact')" href="/contact">Contact</x-nav-link>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">

                            <!-- Profile dropdown -->
                            <div @keydown.escape.window="profileOpen = false" class="relative ml-3"
                                x-data="{ profileOpen: false }">
                                <button :aria-expanded="profileOpen" @click="profileOpen = !profileOpen"
                                    aria-haspopup="true"
                                    class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
                                    type="button">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img alt=""
                                        class="size-8 rounded-full outline -outline-offset-1 outline-white/10"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
                                </button>

                                <div @click.outside="profileOpen = false"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-gray-800 py-1 shadow-lg outline-1 -outline-offset-1 outline-white/10"
                                    role="menu" x-cloak x-show="profileOpen"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75">
                                    <a class="focus:outline-hidden block px-4 py-2 text-sm text-gray-300 focus:bg-white/5"
                                        href="#">Your profile</a>
                                    <a class="focus:outline-hidden block px-4 py-2 text-sm text-gray-300 focus:bg-white/5"
                                        href="#">Settings</a>
                                    <a class="focus:outline-hidden block px-4 py-2 text-sm text-gray-300 focus:bg-white/5"
                                        href="#">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button :aria-expanded="mobileOpen" @click="mobileOpen = !mobileOpen"
                            aria-controls="mobile-menu"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500"
                            type="button">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <svg aria-hidden="true" class="size-6" data-slot="icon" fill="none" stroke-width="1.5"
                                stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileOpen">
                                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <svg aria-hidden="true" class="size-6" data-slot="icon" fill="none" stroke-width="1.5"
                                stroke="currentColor" viewBox="0 0 24 24" x-cloak x-show="mobileOpen">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="md:hidden" id="mobile-menu" x-cloak x-show="mobileOpen" x-transition>
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <x-nav-link :current="request()->is('/')" href="/">Home</x-nav-link>
                    <x-nav-link :current="request()->is('posts')" href="/posts">Blog</x-nav-link>
                    <x-nav-link :current="request()->is('about')" href="/about">About</x-nav-link>
                    <x-nav-link :current="request()->is('contact')" href="/contact">Contact</x-nav-link>
                </div>
                <div class="border-t border-white/10 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="shrink-0">
                            <img alt="" class="size-10 rounded-full outline -outline-offset-1 outline-white/10"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" />
                        </div>
                        <div class="ml-3">
                            <div class="text-base/5 font-medium text-white">Tom Cook</div>
                            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white"
                            href="#">Your profile</a>
                        <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white"
                            href="#">Settings</a>
                        <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5 hover:text-white"
                            href="#">Sign out</a>
                    </div>
                </div>
            </div>
        </nav>
