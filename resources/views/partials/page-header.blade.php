<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-4">
        <h1 class="display-3 animated slideInDown">{{ $title }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                @isset($breadcrumb)
                    @foreach($breadcrumb as $item)
                        @if(isset($item['url']))
                            <li class="breadcrumb-item"><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                        @else
                            <li class="breadcrumb-item active" aria-current="page">{{ $item['label'] }}</li>
                        @endif
                    @endforeach
                @else
                    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                @endisset
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
