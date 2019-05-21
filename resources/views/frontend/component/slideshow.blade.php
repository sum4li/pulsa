<!-- SLIDESHOW -->
{{-- <section class="welcome_area clearfix section_padding_100_0" id="home" style="background-image: url({{asset('frontend/img/bg/welcome-bg.png')}})">
    <div class="hero-slides owl-carousel">
        @foreach (App\Slideshow::orderBy('created_at','desc')->get() as $row)
        <!-- Single Hero Slides -->
        <div class="single-hero-slide">
            <div class="hero-slide-content text-center">
                <img class="slide-img" src="{{asset($row->images)}}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</section> --}}
<!-- SLIDESHOW END -->
<section class="carousel slide cid-rr03eANo2i" data-interval="false" id="slider2-1">
    <div class="container content-slider">
        <div class="content-slider-wrap">
            <div>
                <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false"
                    data-interval="false">
                    <ol class="carousel-indicators">
                        @foreach (App\Slideshow::orderBy('created_at','desc')->get() as $row)
                        <li data-app-prevent-settings="" data-target="#slider2-1" data-slide-to="{{$loop->index}}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach (App\Slideshow::orderBy('created_at','desc')->get() as $row)
                        <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false"
                            style="background-image: url({{asset($row->images)}});">
                            <div class="container container-slide">
                                <div class="image_wrapper">
                                    <div class="mbr-overlay"></div>
                                    <img src="assets/images/background1.jpg">
                                        <div class="carousel-caption justify-content-center">
                                            <div class="col-10 align-center">
                                                <p class="lead mbr-text mbr-fonts-style display-7">Choose from the large selection of
                                            latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video
                                            backgrounds, hamburger menu, sticky header and more.</p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider2-1">
                        <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                        <span class="sr-only">Previous </span>
                    </a>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider2-1">
                        <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
