@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li
                    aria-disabled="true"
                    aria-label="@lang('pagination.previous')"
                    class="page-item disabled"
                >
                    <span class="page-link"><i class="bi bi-chevron-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a
                        aria-label="@lang('pagination.previous')"
                        class="page-link"
                        href="{{ $paginator->previousPageUrl() }}"
                        rel="prev"
                    >
                        <i class="bi bi-chevron-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true" class="page-item disabled"><span
                            class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page" class="page-item active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a
                        aria-label="@lang('pagination.next')"
                        class="page-link"
                        href="{{ $paginator->nextPageUrl() }}"
                        rel="next"
                    >
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </li>
            @else
                <li
                    aria-disabled="true"
                    aria-label="@lang('pagination.next')"
                    class="page-item disabled"
                >
                    <span class="page-link"><i class="bi bi-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
