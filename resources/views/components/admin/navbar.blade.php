<div>
    <nav
        class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap justify-between items-center">

            <!-- LEFT -->
            <div class="flex justify-start items-center">
                <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                    class="p-2 mr-2 text-gray-600 rounded-lg md:hidden hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 5h14M3 10h14M3 15h14"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <a href="/" class="flex items-center mr-4">
                    <img src="https://flowbite.s3.amazonaws.com/logo.svg" class="h-8 mr-2">
                    <span class="text-2xl font-semibold dark:text-white">Flowbite</span>
                </a>
            </div>

            <!-- RIGHT -->
            <div class="flex items-center">

                {{-- ================= GUEST ================= --}}
                @guest
                <a href="{{ route('login') }}"
                    class="flex items-center text-sm text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">
                    <img class="w-8 h-8 rounded-full"
                        src="https://handsontek.net/images/Teams/GuestUsers/hero.png"
                        alt="Guest">
                    <span class="ml-2">Login</span>
                </a>
                @endguest

                {{-- ================= AUTH ================= --}}
                @auth
                <button type="button"
                    class="flex items-center mx-3 text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                    id="user-menu-button" data-dropdown-toggle="dropdown">
                    <img class="w-8 h-8 rounded-full"
                        src="https://handsontek.net/images/Teams/GuestUsers/hero.png"
                        alt="{{ Auth::user()->name }}">
                    <span class="ml-2 text-white">
                        {{ Auth::user()->name }}
                    </span>
                </button>

                <!-- DROPDOWN -->
                <div id="dropdown"
                    class="hidden z-50 my-4 w-56 bg-white rounded-xl shadow divide-y divide-gray-100 dark:bg-gray-700">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white">
                            {{ Auth::user()->name }}
                        </span>
                        <span class="block text-sm text-gray-500 dark:text-gray-300">
                            {{ Auth::user()->email }}
                        </span>
                    </div>

                    <ul class="py-1">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                @endauth

            </div>
        </div>
    </nav>
</div>