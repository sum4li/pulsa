<section class="mbr-section content5 cid-rr15JpnQAT" id="content5-14">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><span style="font-weight: normal;">@yield('title')</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{route('index.index')}}">Home</a></li>
                            @php
                                $url = explode('/',url()->current());
                            @endphp
                            @if (count($url) > 4)
                            <li class="breadcrumb-item"><a href="{{route('index.menu',$url[3])}}">{{title_case($url[3])}}</a></li>
                            @endif
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>


            </div>
        </div>
    </div>
</section>
