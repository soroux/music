@extends('layouts.index')

@section('content')
    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element clearfix swiper_wrapper" style="background: #131722; height: 800px" data-effect="fade" data-loop="true" data-speed="1000">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                <div class="swiper-slide dark" style="background-image: url('{{$slider->image}}'); background-size: cover">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 class="font-primary nott">{{$slider->title}}</h2>
                            <p class="d-none d-md-block">{{$slider->content}}</p>

                            <a href="{{route('index.slider.show',$slider)}}" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>


                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="slider-arrow-left" class="nobg"><i class="icon-line-arrow-left"></i></div>
            <div class="slider-arrow-right" class="nobg"><i class="icon-line-arrow-right"></i></div>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content" class="bgcolor2" style="overflow: visible;">

        <div class="content-wrap nopadding">

            <div class="container clearfix" style="z-index: 7;">


                <div class="heading-block bottommargin-sm noborder dark" style="margin-top: -30px">
                    <h3>Popular Songs of the Week</h3>
                    <span>Something pop in not-pop society</span>
                </div>

                <!-- Carousel
                ============================================= -->
                <div id="oc-popular-songs" class="owl-carousel image-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="6" data-items-xl="6">

                    <!-- Carousel Items
                    ============================================= -->
@foreach($musics as $music)
                    <div class="oc-item" data-animate="fadeInDown">
                        <img src="{{$music->artWork}}" alt="Image 1">
                        <div class="overlay">
                            <div class="text-overlay">
                                <div class="text-overlay-title">
                                    <h3><a href="#">{{$music->name}}</a></h3>
                                </div>
                                <div class="text-overlay-meta">
                                    <a href="#">{{$music->artist}}</a>
                                </div>
                            </div>
                            <div class="on-hover">
                                <a  href="{{asset($music->music)}}"><span class="icon-line-cloud-download"></span> </a>

                                <a href="#" class="play-icon track-list" data-track="{{asset($music->music)}}" data-poster="{{$music->artWork}}" data-title="{{$music->name}}" data-singer="{{$music->artist}}"><i class="icon-play"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- Tabs
                       ============================================= -->
                <div class="tabs tabs-bb tabs-music-demo tabs-responsive dark topmargin-lg clearfix" id="album-tab" data-accordion-style="accordion-bg">

                    <ul class="tab-nav nobottomborder clearfix">
                        <li><a href="#tabs-1">Folk</a></li>
                        <li><a href="#tabs-2">Jazz</a></li>
                        <li><a href="#tabs-3">Blues</a></li>
                        <li><a href="#tabs-4">Clasical</a></li>
                    </ul>

                    <!-- Tabs Container
                    ============================================= -->
                    <div class="tab-container music-tabs-albums">
                        <!-- Tab Content 1
                                               ============================================= -->
                        <div class="tab-content clearfix" id="tabs-1">
                            <div class="row clearfix">

                                <div class="col-md-6">
                                    <img  src="{{asset('images/folk_photo.jpg')}}" alt="">
                                    <div class="overlay">
                                        <div class="text-overlay">
                                            <span class="font-primary">Folk music</span>
                                            <div class="text-overlay-title">
                                                <h2><a href="#" class="font-secondary">Let Us Guide You</a></h2>
                                            </div>
                                            <a href="#" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mx-0 px-0 mt-3 mt-md-0 col-md-6">
                                    <div class="col-6">
                                        <img src="{{asset('images/Woody-Gutherie.jpg')}}" alt="Locked Steel Gate">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">What is Folk</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="{{route('index.blog.post',$Jblog)}}" class="font-secondary">All Started in Folk</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <img src="{{asset('images/unnamed (1).jpg')}}" alt="Mac Sunglasses">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">Folk New Added</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="#" class="font-secondary">Folk World</a></h2>
                                                </div>
                                                <a href="{{route('index.music',[$category='Folk'])}}" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <img src="{{asset('images/Classic-Folk.jpg')}}"  alt="">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">Folk Music</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="#" class="font-secondary">Folk essentials</a></h2>
                                                </div>
                                                <a href="#" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content 2
                        ============================================= -->
                        <div class="tab-content clearfix" id="tabs-2">
                            <div class="row clearfix">

                                <div class="col-md-6">
                                    <img  src="{{asset('images/e53e7548f1bbbe60b7b4c64e02eae023.png')}}" alt="">
                                    <div class="overlay">
                                        <div class="text-overlay">
                                            <span class="font-primary">Jazz music</span>
                                            <div class="text-overlay-title">
                                                <h2><a href="#" class="font-secondary">Let Us Guide You</a></h2>
                                            </div>
                                            <a href="#" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mx-0 px-0 mt-3 mt-md-0 col-md-6">
                                    <div class="col-6">
                                        <img src="{{asset('images/Louis-Armstrong-1953.jpg')}}" alt="Locked Steel Gate">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">{{$Jblog->title}}</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="{{route('index.blog.post',$Jblog)}}" class="font-secondary">All is Jazz</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <img src="{{asset('images/hank mobley.jpg')}}" alt="Mac Sunglasses">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">Jazz new added</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="#" class="font-secondary">Jazz World</a></h2>
                                                </div>
                                                <a href="{{route('index.music',[$category='Jazz'])}}" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <img src="{{asset('images/769274505.jpg')}}"  alt="">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">Jazz Music</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="#" class="font-secondary">Jazz essentials</a></h2>
                                                </div>
                                                <a href="#" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content 3
                                              ============================================= -->
                        <div class="tab-content clearfix" id="tabs-3">
                            <div class="row clearfix">

                                <div class="col-md-6">
                                    <img  src="{{asset('images/1586946891_Drawing-of-man-playing-music-on-a-guitar.jpg')}}" alt="">
                                    <div class="overlay">
                                        <div class="text-overlay">
                                            <span class="font-primary">Blues music</span>
                                            <div class="text-overlay-title">
                                                <h2><a href="#" class="font-secondary">Let Us Guide You</a></h2>
                                            </div>
                                            <a href="#" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mx-0 px-0 mt-3 mt-md-0 col-md-6">
                                    <div class="col-6">
                                        <img src="{{asset('images/blues-music.jpg')}}" alt="Locked Steel Gate">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">What is Blues</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="{{route('index.blog.post',$Jblog)}}" class="font-secondary">All Formed By Blues</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <img src="{{asset('images/The-Blues-1024x865.jpg')}}" alt="Mac Sunglasses">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">Blues New Added</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="#" class="font-secondary">Blues World</a></h2>
                                                </div>
                                                <a href="{{route('index.music',[$category='Blues'])}}" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <img src="{{asset('images/2935251.jpg')}}"  alt="">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">Blues Music</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="#" class="font-secondary">Blues essentials</a></h2>
                                                </div>
                                                <a href="#" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content 4
                                              ============================================= -->
                        <div class="tab-content clearfix" id="tabs-4">
                            <div class="row clearfix">

                                <div class="col-md-6">
                                    <img  src="{{asset('images/15488964144_d835317370_o.jpg')}}" alt="">
                                    <div class="overlay">
                                        <div class="text-overlay">
                                            <span class="font-primary">Classic music</span>
                                            <div class="text-overlay-title">
                                                <h2><a href="#" class="font-secondary">Let Us Guide You</a></h2>
                                            </div>
                                            <a href="#" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mx-0 px-0 mt-3 mt-md-0 col-md-6">
                                    <div class="col-6">
                                        <img src="{{asset('images/musician-1200x1052.jpg')}}" alt="Locked Steel Gate">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">What is Classic</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="{{route('index.blog.post',$Jblog)}}" class="font-secondary">Old is The Note</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <img src="{{asset('images/MP900438549.jfif')}}" alt="Mac Sunglasses">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">Classic new Added</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="#" class="font-secondary">Classic World</a></h2>
                                                </div>
                                                <a href="{{route('index.music',[$category='Classic'])}}" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <img src="{{asset('images/american-classice-169.jpg')}}"  alt="">
                                        <div class="overlay">
                                            <div class="text-overlay">
                                                <span class="font-primary">Classic Music</span>
                                                <div class="text-overlay-title">
                                                    <h2><a href="#" class="font-secondary">Classic essentials</a></h2>
                                                </div>
                                                <a href="#" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>

                <div class="row topmargin-lg clearfix">
                    <div class="col-lg-6">
                        <div class="heading-block noborder dark" style="margin-bottom: 15px;">
                            <h3>Author Choice</h3>
                            <span>Something You Should taste ;D</span>
                        </div>

                        <!-- Song Lists Items
                        ============================================= -->
                        <div class="songs-lists-wrap">

                            <!-- List Items
                            ============================================= -->
                            @foreach($Amusics as $Amusic)
                            <div class="songs-list">
                                <div class="songs-number">01</div>
                                <div class="songs-image track-image">
                                    <a href="#" class="track-list"  data-track="{{asset($Amusic->music)}}" data-poster="demos/music/tracks/poster-images/ibelieveinyou.jpg" data-title="i Believe In You" data-singer="Lost European">
                                        <img src="{{asset($Amusic->artWork)}}" alt="Image 1"><span><i class="icon-play"></i></span>
                                    </a>
                                </div>
                                <div class="songs-name track-name"><a href="#">{{$Amusic->name}}<br><span>{{$Amusic->artist}}</span></a></div>
                                <div class="songs-time">{{number_format($Amusic->size/1048576,2).'MB'}}</div>
                                <div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a class="dropdown-item" href="{{asset($Amusic->music)}}"><span class="icon-line-cloud-download"></span> Download Offline</a>
                                            <a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a href="#" class="button nobg t300 nott fright noleftmargin" style="color: #AAA; padding: 0 16px;">See More..</a>
                    </div>

                    <div class="w-100 d-block d-md-block d-lg-none topmargin-lg clear"></div>

                    <div class="col-lg-6">
                        <div class="heading-block noborder dark" style="margin-bottom: 15px;">
                            <h3>Latest Tracks</h3>
                            <span>Something we Just Added Here</span>
                        </div>
                        <div class="songs-lists-wrap">

                            <!-- List Items
                            ============================================= -->
                            @foreach($lmusics as $lmusic)
                                <div class="songs-list">
                                    <div class="songs-number">01</div>
                                    <div class="songs-image track-image">
                                        <a href="#" class="track-list"  data-track="{{asset($lmusic->music)}}" data-poster="{{asset($lmusic->artWork)}}" data-title="{{$lmusic->name}}" data-singer="{{$lmusic->artist}}">
                                            <img src="{{asset($lmusic->artWork)}}" alt="Image 1"><span><i class="icon-play"></i></span>
                                        </a>
                                    </div>
                                    <div class="songs-name track-name"><a href="#">{{$lmusic->name}}<br><span>{{$lmusic->artist}}</span></a></div>
                                    <div class="songs-time">{{number_format($lmusic->size/1048576,2).'MB'}}</div>
                                    <div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a class="dropdown-item" href="{{asset($lmusic->music)}}"><span class="icon-line-cloud-download"></span> Download Offline</a>
                                                <a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <a href="#" class="button nobg t300 nott fright noleftmargin" style="color: #AAA; padding: 0 16px;">See More..</a>
                    </div>
                </div>


{{--                <!-- Top Charts--}}
{{--                ============================================= -->--}}
{{--                <div class="heading-block bottommargin-sm topmargin noborder dark">--}}
{{--                    <h3>Top Charts</h3>--}}
{{--                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>--}}
{{--                </div>--}}


{{--                <div id="top-charts" class="portfolio grid-container portfolio-6 dark clearfix">--}}

{{--                    <article class="portfolio-item" data-animate="fadeIn">--}}
{{--                        <div class="portfolio-image">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{asset('images/charts/1.jpg')}}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <a href="#" class="left-icon"><i class="icon-line-folder"></i></a>--}}
{{--                                <a href="#" class="right-icon"><i class="icon-line-share"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-desc">--}}
{{--                            <h3><a href="#">Am I that easy</a></h3>--}}
{{--                            <span><a href="#">Jim Reeves</a></span>--}}
{{--                        </div>--}}
{{--                    </article>--}}

{{--                    <article class="portfolio-item" data-animate="fadeIn" data-delay="100">--}}
{{--                        <div class="portfolio-image">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{asset('images/charts/2.jpg')}}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <a href="#" class="left-icon"><i class="icon-line-folder"></i></a>--}}
{{--                                <a href="#" class="right-icon"><i class="icon-line-share"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-desc">--}}
{{--                            <h3><a href="#">Bachelor boy</a></h3>--}}
{{--                            <span><a href="#">Arcade Fire</a></span>--}}
{{--                        </div>--}}
{{--                    </article>--}}

{{--                    <article class="portfolio-item" data-animate="fadeIn" data-delay="200">--}}
{{--                        <div class="portfolio-image">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{asset('images/charts/3.jpg')}}" alt="">--}}
{{--                            </a>--}}
{{--                            <div class="portfolio-overlay">--}}
{{--                                <a href="#" class="left-icon"><i class="icon-line-folder"></i></a>--}}
{{--                                <a href="#" class="right-icon"><i class="icon-line-share"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-desc">--}}
{{--                            <h3><a href="#">I don’t like it, I love it </a></h3>--}}
{{--                            <span><a href="#">Flo Rida ft. Robin Thicke</a></span>--}}
{{--                        </div>--}}
{{--                    </article>--}}

{{--                </div>--}}

{{--                <!-- Singers--}}
{{--                ============================================= -->--}}


{{--                <div class="clear"></div>--}}

{{--                <div class="row topmargin-lg dark clearfix">--}}
{{--                    <!-- Soundcloud--}}
{{--                    ============================================= -->--}}


{{--                    <!-- Mobile App--}}
{{--                    ============================================= -->--}}

{{--                </div>--}}

            </div>

        </div>
        <audio id="audio-player" preload="none" class="mejs__player" controls data-mejsoptions='{"defaultAudioHeight": "50", "alwaysShowControls": "true"}' style="max-width:100%;">
            <source src="demos/music/src/audios/nashe-si.mp3" type="audio/mp3">
        </audio>


        <!-- Default Track - onLoad
        ============================================= -->
{{--        <div id="track-onload" data-track="{{asset('tracks/clean-clean.mp3')}}" data-poster="{{asset('images/popular-songs/7.jpg')}}" data-title="Clean Clean" data-singer="R Costello"></div>--}}

    </section><!-- #content end -->

@endsection

