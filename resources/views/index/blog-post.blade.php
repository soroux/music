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

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                        ============================================= -->
                        <div class="entry-title">
                            <h2>{{$post->title}}</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                        ============================================= -->
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> {{$post->created_at}}</li>
                            <li><a href="#"><i class="icon-user"></i> {{$post->user->name}}</a></li>
                            <li><i class="icon-folder-open"></i> <a href="#">{{$post->category}}</a></li>
                            <li><a href="#"><i class="icon-comments"></i> {{$post->comments->count()}} Comments</a></li>
                            <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                        </ul><!-- .entry-meta end -->

                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image bottommargin">
                            <a href="#"><img src="{{$post->image}}" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">

                            {!! $post->content !!}
                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud
                            ============================================= -->
                            <div class="tagcloud clearfix bottommargin">
                                <a href="#">{{$post->category}}</a>

                            </div><!-- .tagcloud end -->

                            <div class="clear"></div>

                            <!-- Post Single - Share
                            ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>Share this Post:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->

                    <!-- Post Navigation
                    ============================================= -->

                    <div class="line"></div>

                    <!-- Post Author Info
                    ============================================= -->
                    <div class="card">
                        <div class="card-header"><strong>Posted by <a href="#">{{$post->user->name}}</a></strong></div>
                        <div class="card-body">

Some One Who loves The musics                        </div>
                    </div><!-- Post Single - Author End -->

                    <div class="line"></div>

                    <h4>Related Posts:</h4>

                    <div class="related-posts clearfix">

                        <div class="col_half nobottommargin">
@foreach($relatedPosts as $relatedPost)
                            <div class="mpost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img src="{{$relatedPost->image}}" alt="Blog Single"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">{{$relatedPost->title}}</a></h4>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> {{$relatedPost->created_at}}</li>
                                        <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                    </ul>
                                    <div class="entry-content"></div>
                                </div>
                            </div>

                            @endforeach
                        </div>

                    </div>

                    <!-- Comments
                    ============================================= -->
                    <div id="comments" class="clearfix">

                        <h3 id="comments-title"><span>{{$post->comments->count()}}</span> Comments</h3>

                        <!-- Comments List
                        ============================================= -->
                        <ol class="commentlist clearfix">

                            <li class="comment even thread-even depth-1" id="li-comment-1">
@foreach($post->comments as $comment)
                                <div id="comment-1" class="comment-wrap clearfix">

                                    <div class="comment-meta">

                                        <div class="comment-author vcard">

												<span class="comment-avatar clearfix">
												<img alt='' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

                                        </div>

                                    </div>

                                    <div class="comment-content clearfix">

                                        <div class="comment-author">{{$comment->author}}<span><a href="#" title="Permalink to this comment">{{$comment->created_at}}/a></span></div>

                                        <p>{{$comment->content}}</p>

                                        <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                    </div>

                                    <div class="clear"></div>

                                </div>
                                @endforeach
                            </li>

                        </ol><!-- .commentlist end -->

                        <div class="clear"></div>

                        <!-- Comment Form
                        ============================================= -->
                        <div class="card">
                            <div class="card-header">
                                <h3>Leave a <span>Comment</span></h3>
                            </div>
                            <div class="card-body">
                        <div id="respond" class="clearfix">

                            <form class="clearfix" action="{{route('index.blog.post.comment',$post)}}" method="post" id="commentform">
                                @csrf

                                <div class="col_one_third">
                                    <label for="author">Name</label>
                                    <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
                                </div>
                                <div class="col_one_third ">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" value="" size="22" tabindex="1" class="sm-form-control" />
                                </div>

                                <div class="col_one_third col_last">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
                                </div>


                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="comment">Comment</label>
                                    <textarea name="content" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
                                </div>

                                <div class="col_full nobottommargin">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
                                </div>

                            </form>

                        </div><!-- #respond end -->
                            </div>
                        </div>
                    </div><!-- #comments end -->

                </div>

            </div>

        </div>
    </section><!-- #content end -->



@endsection
