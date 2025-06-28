<!-- Post Pagination Start -->
<div class="pq-pagination">
    <nav aria-label="Page navigation">
        <ul class="page-numbers">
            @if ($paginator->hasPages())
                @if ($paginator->onFirstPage())
                    <li><a href="javascript:void(0)" class="page-numbers disabled"><i class="fa fa-arrow-left"></i></a></li>
                @else
                    <li><a href="javascript:void(0)" class="page-numbers" wire:click="previousPage"><i class="fa fa-arrow-left"></i></a></li>
                @endif

                @for ($i = max(1, $paginator->currentPage() - 2); $i <= min($paginator->currentPage() + 2, $paginator->lastPage()); $i++)
                    <li>
                        <a href="javascript:void(0)" class="page-numbers @if ($paginator->currentPage() == $i) current @endif" wire:click="gotoPage({{ $i }})">{{ $i }}</a>
                    </li>
                @endfor

                @if ($paginator->hasMorePages())
                    <li><a href="javascript:void(0)" class="next page-numbers" wire:click="nextPage"><i class="fa fa-arrow-right"></i></a></li>
                @else
                    <li><a href="javascript:void(0)" class="next page-numbers disabled"><i class="fa fa-arrow-right"></i></a></li>
                @endif
            @endif
        </ul>
    </nav>
</div>
<!-- Post Pagination End -->
