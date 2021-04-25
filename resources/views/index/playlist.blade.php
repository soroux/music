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
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">
                    </div>

                </div><!-- .sidebar end -->
                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <!-- Posts
                    ============================================= -->
                    <div id="posts" class="small-thumbs">
                        @foreach($playlists as $playlist)
                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="{{$playlist->image}}" data-lightbox="image"><img class="image_fade" src="{{$playlist->image}}" alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="">{{$playlist->name}}</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i>{{$playlist->created_at}}</li>
                                    </ul>
                                    <div class="entry-content">
                                        {!! $playlist->content !!}

                                        <a href="{{route('index.playlist.show',$playlist)}}" class="button button-circle button-small button-border button-white button-light t400 ls1 clearfix" style="width: auto;display: inline-block; margin-top: 15px">View All</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div><!-- #posts end -->


                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->


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
