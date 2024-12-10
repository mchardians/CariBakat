<!-- Header End -->
<div {{ $attributes->merge(['class' => 'container-xxl py-5 bg-dark page-header']) }} style="max-width: 100% !important;">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{ ucwords($title) }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                @foreach ($breadcrumbs as $index => $breadcrumb)
                    @if (!$loop->last)
                        <li class="breadcrumb-item"><a href="#">{{ strtoupper($breadcrumb) }}</a></li>
                    @else
                        <li class="breadcrumb-item text-white active" aria-current="page">
                            {{ strtoupper($breadcrumb) }}
                        </li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->
