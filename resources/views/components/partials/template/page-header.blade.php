<div class="page-header">
    <h4 class="page-title">{{ $title }}</h4>
    <ul class="breadcrumbs">
        @foreach ($breadcrumbs as $index => $breadcrumb)
            @if (sizeof($breadcrumbs) > 1)
                @if ($breadcrumb === "dashboard")
                    <li class="nav-home">
                        <a href="{{ route('hrd.dashboard') }}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                @else
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    @if (!$loop->last)
                        <li class="nav-item">
                            <span>{{ ucwords($breadcrumb) }}</span>
                        </li>
                    @else
                        <li class="nav-item">
                            <span class="fw-bold">{{ ucwords($breadcrumb) }}</span>
                        </li>
                    @endif
                @endif
            @else
                <li class="nav-home">
                    <a href="{{ route('hrd.dashboard') }}">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>