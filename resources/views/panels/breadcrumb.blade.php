<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
    <!-- Search for small screen-->
    <div class="container">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>@yield('title') </span></h5>
                @if (isset($breadcrumbs))
                    <ol class="breadcrumbs mb-0">
                        @foreach ($breadcrumbs as $breadcrumb)
                            <li class="breadcrumb-item {{ !isset($breadcrumb['link']) ? 'active' : '' }}">
                                @if (isset($breadcrumb['link']) && $breadcrumb['link'] !== 'javascript:void(0)')
                                    <a href="{{ url($breadcrumb['link']) }}">
                                @endif{{ $breadcrumb['name'] }}
                                @if (isset($breadcrumb['link']))</a>
                                @endif
                            </li>
                        @endforeach
                    </ol>
                @endif
            </div>
        </div>
    </div>
</div>
