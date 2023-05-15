@if ($paginator->hasPages())
<div class="card-footer clearfix">
    <ul class="pagination pagination-sm m-0 float-right">
        @if ($paginator->onFirstPage())
        <li class="page-item disabled" aria-disabled="true">
            <a class="page-link" href="#">&laquo;</a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}">&laquo;</a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true">
                    <a class="page-link" href="#">{{ $element }}</a>
                </li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link" href="#">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
        </li>
        @else
        <li class="page-item disabled" aria-disabled="true">
            <a class="page-link" href="#">&raquo;</a>
        </li>
        @endif
    </ul>
</div>
@endif