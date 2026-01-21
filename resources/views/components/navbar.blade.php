<div>
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                <!-- LEFT -->
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Logo" class="size-8" />
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">

                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/profile" :active="request()->is('profile')">Profil</x-nav-link>
                            <x-nav-link href="/kontak" :active="request()->is('kontak')">Kontak</x-nav-link>
                            <x-nav-link href="/student" :active="request()->is('student')">Student</x-nav-link>
                            <x-nav-link href="/guardian" :active="request()->is('guardian')">Guardian</x-nav-link>
                            <x-nav-link href="/classroom" :active="request()->is('classroom')">Classroom</x-nav-link>
                            <x-nav-link href="/teacher" :active="request()->is('teacher')">Teacher</x-nav-link>
                            <x-nav-link href="/subject" :active="request()->is('subject')">Subject</x-nav-link>

                            @auth
                                <x-nav-link href="/admin/dashboard" :active="request()->is('admin/dashboard')">
                                    Dashboard
                                </x-nav-link>
                            @endauth

                            @guest
                                <x-nav-link href="/login" :active="request()->is('login')">
                                    Login
                                </x-nav-link>
                            @endguest

                        </div>
                    </div>
                </div>

                <!-- RIGHT DESKTOP -->
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">

                        {{-- GUEST --}}
                        @guest
                            <a href="/login"
                                class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-gray-700">
                                <img src="https://harvesthosts-marketing-assets.s3.amazonaws.com/wp-content/uploads/2021/11/whoknows-1.jpg"
                                    class="w-8 h-8 rounded-full object-cover" alt="Guest">
                                Login
                            </a>
                        @endguest


                        {{-- AUTH --}}
                        @auth
                            <el-dropdown class="relative ml-3">
                                <button
                                    class="flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-gray-700">

                                    <img src="https://handsontek.net/images/Teams/GuestUsers/hero.png"
                                        class="w-8 h-8 rounded-full object-cover" alt="User">

                                    {{ Auth::user()->name }}
                                </button>

                                <el-menu anchor="bottom end" popover class="w-56 rounded-md bg-white py-1 shadow-lg">

                                    <div class="px-4 py-2 text-sm text-gray-600">
                                        {{ Auth::user()->email }}
                                    </div>

                                    <a href="/admin/dashboard"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Dashboard
                                    </a>

                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                            Logout
                                        </button>
                                    </form>
                                </el-menu>
                            </el-dropdown>
                        @endauth

                    </div>
                </div>

                <!-- MOBILE BUTTON -->
                <div class="-mr-2 flex md:hidden">
                    <button type="button" command="--toggle" commandfor="mobile-menu"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- MOBILE MENU -->
        <el-disclosure id="mobile-menu" hidden class="block md:hidden">

            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <a href="/"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">
                    Home
                </a>

                @auth
                    <a href="/admin/dashboard"
                        class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">
                        Dashboard
                    </a>
                @endauth

                @guest
                    <a href="/login"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">
                        Login
                    </a>
                @endguest
            </div>

            {{-- MOBILE PROFILE --}}
            <div class="border-t border-white/10 pt-4 pb-3">

                @guest
                    <div class="flex justify-center">
                        <img src="https://harvesthosts-marketing-assets.s3.amazonaws.com/wp-content/uploads/2021/11/whoknows-1.jpg"
                            class="w-14 h-14 rounded-full object-cover" alt="Guest">
                    </div>
                @endguest

                @auth
                    <div class="px-5 text-center">
                        <img src="https://handsontek.net/images/Teams/GuestUsers/hero.png"
                            class="w-14 h-14 mx-auto rounded-full object-cover" alt="User">

                        <div class="mt-2 text-base font-medium text-white">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="text-sm font-medium text-gray-400">
                            {{ Auth::user()->email }}
                        </div>
                    </div>

                    <div class="mt-3 space-y-1 px-2">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-red-400 hover:bg-white/5 hover:text-white">
                                Logout
                            </button>
                        </form>
                    </div>
                @endauth

            </div>

        </el-disclosure>
    </nav>
</div>