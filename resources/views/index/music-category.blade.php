@extends('layouts.index')

@section('content')
    <section id="slider" class="slider-element clearfix swiper_wrapper" style="background: #131722; height: 800px" data-effect="fade" data-loop="true" data-speed="1000">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url('{{$photo->image}}'); background-size: cover">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 class="font-primary nott">{{$photo->title}}</h2>
                            <p class="d-none d-md-block">{{$photo->content}}</p>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="content" class="bgcolor2" style="overflow: visible;">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="single-post nobottommargin">
                    <div class="col-lg-12">
                        <div class="heading-block noborder dark" style="margin-bottom: 15px;">
                            <h3>Author Choice</h3>
                            <span>Something You Should taste ;D</span>
                        </div>

                        <!-- Song Lists Items
                        ============================================= -->
                        <div class="songs-lists-wrap">

                            <!-- List Items
                            ============================================= -->
                            @foreach($musics as $music )
                                <div class="songs-list">
                                    <div class="songs-number">01</div>
                                    <div class="songs-image track-image">
                                        <a href="#" class="track-list"  data-track="{{asset($music->music)}}" data-poster="{{asset($music->artWork)}}" data-title="{{$music->name}}" data-singer="{{$music->artist}}">
                                            <img src="{{asset($music->artWork)}}" alt="Image 1"><span><i class="icon-play"></i></span>
                                        </a>
                                    </div>
                                    <div class="songs-name track-name"><a href="#">{{$music->name}}<br><span>{{$music->artist}}</span></a></div>
                                    <div class="songs-time">{{number_format($music->size/1048576,2).'MB'}}</div>
                                    <div class="songs-button"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-line-ellipsis"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a class="dropdown-item" href="{{asset($music->music)}}"><span class="icon-line-cloud-download"></span> Download Offline</a>
                                                <a class="dropdown-item" href="#"><span class="icon-line-heart"></span> Love</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><span class="icon-line-share"></span> Share</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #content end -->


    <audio id="audio-player" preload="none" class="mejs__player" controls data-mejsoptions='{"defaultAudioHeight": "50", "alwaysShowControls": "true"}' style="max-width:100%;">
        <source src="demos/music/src/audios/nashe-si.mp3" type="audio/mp3">
    </audio>
@endsection
