<div>
      {{-- Dashboard --}}
              <a {{$attributes}}
                 
                 class="rounded-md px-3 py-2 text-sm font-medium
                 {{ $active ? 'bg-gray-950/50 text-white shadow-md' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
                {{$slot}}
              </a>
</div>