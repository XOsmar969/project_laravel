<div>
  <nav class="bg-gray-800/50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          {{-- Logo --}}
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                 alt="Your Company" class="size-8" />
          </div>

          {{-- Menu --}}
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <x-nav-link href="{{ route('home') }}" :active="request()->is('/')">Home</x-nav-link>
              <x-nav-link href="{{ route('kontak') }}" :active="request()->is('kontak')">Kontak</x-nav-link>
              <x-nav-link href="{{ route('profil') }}" :active="request()->is('profil')">Profile</x-nav-link>
              <x-nav-link href="{{ route('student') }}" :active="request()->is('student')">Student</x-nav-link>
              <x-nav-link href="{{ route('info') }}" :active="request()->is('info')">Info</x-nav-link>
              <x-nav-link href="{{ route('guardian') }}" :active="request()->is('guardian')">Guardian</x-nav-link>
              <x-nav-link href="{{ route('classroom') }}" :active="request()->is('classroom')">Classroom</x-nav-link>
            </div>
          </div>
        </div>
        {{-- User Dropdown --}}
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <el-dropdown class="relative ml-3">
              <button
                class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                  alt="user" class="size-8 rounded-full outline -outline-offset-1 outline-white/10" />
              </button>
              <el-menu anchor="bottom end" popover
                       class="w-48 origin-top-right rounded-md bg-gray-800 py-1 outline-1 -outline-offset-1 outline-white/10">
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Your profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-white/5">Sign out</a>
              </el-menu>
            </el-dropdown>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
