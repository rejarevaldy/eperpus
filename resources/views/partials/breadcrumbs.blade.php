    <!-- Breadcrum Start -->
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '/';">
        <ol class="breadcrumb">
            <li class="breadcrumb-item ">Home</li>
            <li class="breadcrumb-item ">{{ $title }}</li>
            @if ($sub !== null)
                <li class="breadcrumb-item">{{ $sub }}</li>
            @endif
            @if (!$item !== null)
                <li class="breadcrumb-item">{{ $item }}</li>
            @endif
        </ol>
    </nav>
    <!-- Breadcrumb End -->
