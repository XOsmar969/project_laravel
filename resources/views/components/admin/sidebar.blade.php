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
          <x-admin.side-link href="/admin/dashboard" label="Dashboard" 
            :active="request()->is('admin/dashboard*')">
            <svg xmlns="http://www.w3.org/2000/svg" 
              class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <!-- Squares 2x2 -->
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 4h6v6H4zM14 4h6v6h-6zM4 14h6v6H4zM14 14h6v6h-6z" />
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Students --}}
        <li>
          <x-admin.side-link href="/admin/student" label="Students"
            :active="request()->is('admin/student*')">
            <svg xmlns="http://www.w3.org/2000/svg" 
              class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <!-- Users -->
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20v-2a4 4 0 00-3-3.87M9 20v-2a4 4 0 013-3.87M12 11a4 4 0 100-8 4 4 0 000 8z" />
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Classroom --}}
        <li>
          <x-admin.side-link href="/admin/classroom" label="Classroom"
            :active="request()->is('admin/classroom*')">
            <svg xmlns="http://www.w3.org/2000/svg"
              class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <!-- Building -->
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 21h16M3 10h18M12 3l9 7v11H3V10l9-7z" />
            </svg>
          </x-admin.side-link>
        </li>

        {{-- Subject --}}
        <li>
          <x-admin.side-link href="/admin/subject" label="Subject"
            :active="request()->is('admin/subject*')">
            <svg xmlns="http://www.w3.org/2000/svg" 
              class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <!-- Book Open -->
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6l-2-.9C6 3 4 4 4 4v14s2-1 6.1 1l1.9.9m0-14l2-.9C18 3 20 4 20 4v14s-2-1-6.1 1l-1.9.9" />
            </svg>
          </x-admin.side-link>

          {{-- Guardian --}}
          <li>
          <x-admin.side-link href="/admin/guardian" label="Guardian"
            :active="request()->is('admin/guardian*')">
            <svg xmlns="http://www.w3.org/2000/svg" 
              class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <!-- Identification Card -->
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5h18v14H3zM9 9h6M9 13h4M7 9v0M17 13v0" />
            </svg>
          </x-admin.side-link>
        </li>
          
        <li>
          <x-admin.side-link href="/admin/teacher" label="Teacher"
            :active="request()->is('admin/teacher*')">
            <svg xmlns="http://www.w3.org/2000/svg" 
              class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <!-- Identification Card -->
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5h18v14H3zM9 9h6M9 13h4M7 9v0M17 13v0" />
            </svg>
          </x-admin.side-link>
        </li>

      </ul>
    </div>
  </aside>
</div>
