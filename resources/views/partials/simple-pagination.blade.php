@if ($paginator->hasPages())
    <nav>
        <div class="join my-2 w-full justify-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-disabled" aria-disabled="true">«</button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn">«</a>
            @endif

            {{-- Check what's the current page number --}}
            <button class="join-item btn">Page {{ $paginator->currentPage() }}</button>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="join-item btn">»</a>
            @else
                <button class="join-item btn btn-disabled" aria-disabled="true">»</button>
            @endif
        </div>
    </nav>
@endif

