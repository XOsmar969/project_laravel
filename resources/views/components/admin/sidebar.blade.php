@auth
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform 
    -translate-x-full border-r border-gray-200 sm:translate-x-0 
    bg-white dark:bg-gray-800 dark:border-gray-700">

    <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">

            {{-- Dashboard --}}
            <x-admin.sidelink 
                href="/admin/dashboard" 
                :active="request()->is('admin/dashboard')">
                Dashboard
            </x-admin.sidelink>

            {{-- Classrooms --}}
            <x-admin.sidelink 
                href="/admin/classroom" 
                :active="request()->is('admin/classroom')">
                Classrooms
            </x-admin.sidelink>

            {{-- Students --}}
            <x-admin.sidelink 
                href="/admin/student" 
                :active="request()->is('admin/student')">
                Students
            </x-admin.sidelink>

            {{-- Subjects --}}
            <x-admin.sidelink 
                href="/admin/subject" 
                :active="request()->is('admin/subject')">
                Subjects
            </x-admin.sidelink>

            {{-- Teachers --}}
            <x-admin.sidelink 
                href="/admin/teacher" 
                :active="request()->is('admin/teacher')">
                Teachers
            </x-admin.sidelink>

            {{-- Guardians --}}
            <x-admin.sidelink 
                href="/admin/guardian" 
                :active="request()->is('admin/guardian')">
                Guardians
            </x-admin.sidelink>

            {{-- Logout --}}
            <li class="pt-4 border-t border-gray-200 dark:border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="flex items-center w-full p-2 text-base font-medium 
                        text-red-600 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        Logout
                    </button>
                </form>
            </li>

        </ul>
    </div>
</aside>
@endauth
