@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-1 mb-4">
        <ul class="flex items-center border border-gray-300 rounded-md overflow-hidden text-sm">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="px-4 py-2 text-gray-400 cursor-not-allowed border-r">‹</li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 border-r hover:bg-gray-100">
                        ‹
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="px-4 py-2 text-gray-500 border-r">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="px-4 py-2 bg-blue-600 text-white font-bold border-r">{{ $page }}</li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="px-4 py-2 border-r hover:bg-gray-100">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 hover:bg-gray-100">
                        ›
                    </a>
                </li>
            @else
                <li class="px-4 py-2 text-gray-400 cursor-not-allowed">›</li>
            @endif
        </ul>
    </nav>
@endif
