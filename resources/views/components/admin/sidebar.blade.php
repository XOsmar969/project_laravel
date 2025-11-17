<div>
  <aside
    id="drawer-navigation"
    aria-label="Sidenav"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform
    -translate-x-full bg-white border-r border-gray-200 md:translate-x-0
    dark:bg-gray-800 dark:border-gray-700 flex flex-col">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
      <ul class="space-y-2">
        {{-- Dashboard --}}
        <li>
          <x-admin.side-link href="/admin/dashboard" label="Dashboard" :active="request()->is('admin/dashboard*')">
            {{-- Icon: Layout Dashboard --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h7v7H3zM14 3h7v4h-7zM14 10h7v11h-7zM3 14h7v7H3z" />
            </svg>
          </x-admin.side-link>
        </li>
        {{-- Students --}}
        <li>
          <x-admin.side-link href="/admin/student" label="Students" :active="request()->is('admin/student*')">
            {{-- Icon: Users --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M15 11a4 4 0 10-8 0 4 4 0 008 0z" />
            </svg>
          </x-admin.side-link>
        </li>
        {{-- Classroom --}}
        <li>
          <x-admin.side-link href="/admin/classroom" label="Classroom" :active="request()->is('admin/classroom*')">
            {{-- Icon: School --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 3l9 4.5v9L12 21l-9-4.5v-9L12 3z" />
            </svg>
          </x-admin.side-link>
        </li>
        {{-- Subject --}}
        <li>
          <x-admin.side-link href="/admin/subject" label="Subject" :active="request()->is('admin/subject*')">
            {{-- Icon: Book --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6v15m0-15a9 9 0 019 9H3a9 9 0 019-9z" />
            </svg>
          </x-admin.side-link>
          <x-admin.side-link href="/admin/guardian" label="Guardian" :active="request()->is('admin/guardian*')">
            {{-- Icon: Book --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6v15m0-15a9 9 0 019 9H3a9 9 0 019-9z" />
            </svg>
          </x-admin.side-link>
        </li>
      </ul>
    </div>
  </aside>
</div>
