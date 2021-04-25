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
@foreach($posts as $post)
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="{{$post->image}}" data-lightbox="image"><img class="image_fade" src="{{$post->image}}" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h2><a href="{{route('index.blog.post',$post)}}">{{$post->title}}</a></h2>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i>{{$post->created_at}}</li>
                                    <li><a href="#"><i class="icon-user"></i> {{$post->user->name}}</a></li>
                                    <li><i class="icon-folder-open"></i> <a href="#">{{$post->category}}</a></li>
                                    <li><a href="{{route('index.blog.post',$post)}}#comments"><i class="icon-comments"></i>
                                        {{$post->comments->count()}}</a></li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul>
                                <div class="entry-content">
                                    {!! $post->content !!}

                                    <a href="{{route('index.blog.post',$post)}}"class="more-link">Read More</a>
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

    </section><!-- #content end -->



@endsection
