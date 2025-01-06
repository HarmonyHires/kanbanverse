@if ($paginator->hasPages())
    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">

        <div class="flex flex-1 items-center justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Showing
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    of
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    results
                    <span class="font-medium">| Page {{ $paginator->currentPage() }} of
                        {{ $paginator->lastPage() }}</span>
                </p>
            </div>
            <div>
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                    @if ($paginator->onFirstPage())
                        <span
                            class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-700 bg-gray-200 ring-1 ring-inset ring-gray-300">Previous</span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}"
                            class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-700 bg-gray-200 ring-1 ring-inset ring-gray-300 hover:bg-gray-300">Previous</a>
                    @endif

                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <span
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300">{{ $element }}</span>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span
                                        class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}"
                                        class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}"
                            class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-700 bg-gray-200 ring-1 ring-inset ring-gray-300 hover:bg-gray-300">Next</a>
                    @else
                        <span
                            class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-700 bg-gray-200 ring-1 ring-inset ring-gray-300">Next</span>
                    @endif
                </nav>
            </div>
        </div>
    </div>
@endif
