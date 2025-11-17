@props(['href' => null, 'buttonLabel', 'onClick' => null])

<div class="flex items-center justify-end mb-4">

    @if ($href)
        <a
            href="{{ $href }}"
            class="flex items-center justify-center text-white
                   bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300
                   font-medium rounded-lg text-sm px-4 py-2 focus:outline-none"
        >
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 
                    11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"/>
            </svg>
            {{ $buttonLabel }}
        </a>
    @else
        <button
            type="button"
            @if($onClick) x-on:click="{{ $onClick }}" @endif
            class="flex items-center justify-center text-white
                   bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300
                   font-medium rounded-lg text-sm px-4 py-2 focus:outline-none"
        >
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 
                    0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"/>
            </svg>
            {{ $buttonLabel }}
        </button>
    @endif

</div>
