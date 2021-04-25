<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,600,700|Montserrat:300,400,700|Caveat+Brush" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />

    <!-- Music Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/music.css')}}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/one-page/et-line.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/css/fonts.css')}}" type="text/css" />

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href="{{asset('css/components/bs-switches.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Theme color -->
    <link rel="stylesheet" href="{{asset('css/colors.php?color=ed215e')}}" type="text/css" />

    <!-- Audio Player Plugin CSS -->
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.6/mediaelementplayer.css">--}}

{{--    <link rel="stylesheet" href="{{asset('src/playlist/playlist.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/css/mediaelement/mediaelementplayer.css')}}">


    <!-- Document Title
    ============================================= -->
    <title>Music Steaming | Canvas</title>

    <style>
        @media (max-width: 479px) {
            .swiper_wrapper:not(.force-full-screen),
            .swiper_wrapper:not(.force-full-screen):not(.canvas-slider-grid) .swiper-slide {
                height: 300px !important;
            }
        }

        .css3-spinner { background-color: #131722; }
    </style>

</head>

<body class="stretched bgcolor2" data-loader="4" data-loader-color="theme">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix" style="margin-bottom: 40px">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header transparent-header dark no-sticky">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{route('index')}}" class="standard-logo" data-dark-logo="{{asset('images/logo-dark.png')}}"><img src="{{asset('images/logo.png')}}" alt="Canvas Logo"></a>
                    <a href="{{route('index')}}" class="retina-logo" data-dark-logo="{{asset('images/logo-dark@2x.png')}}"><img src="{{asset('images/logo@2x.png')}}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="clearfix not-dark">

                    <ul>
                        <li class="active"><a href="{{route('index')}}"><div>Home</div></a></li>
                        <li><a href="#"><div>Blog</div></a>
                            <ul>
                                <li><a href="{{route('index.blog')}}"><div>All Posts</div></a></li>
                                <li><a href="{{route('index.blog.category',$category='Jazz')}}"><div>Jazz</div></a></li>
                                <li><a href="{{route('index.blog.category',$category='Bluse')}}"><div>Blues</div></a></li>
                                <li><a href="{{route('index.blog.category',$category='Folk')}}"><div>Folk</div></a></li>
                                <li><a href="{{route('index.blog.category',$category='Rock')}}"><div>Rock</div></a></li>
                                <li><a href="{{route('index.blog.category',$category='Classic')}}"><div>Classic</div></a></li>

                            </ul>
                        </li>
{{--                        <li><a href="{{route('index.radio')}}"><div>Radio</div></a></li>--}}
                        <li><a href="../koel/public/index.html"><div>Player</div></a></li>

                        <li><a href="#"><div>Discover</div></a>
                            <ul>
                                <li><a href="{{route('index.playlist')}}"><div>All Playlists</div></a></li>
                                <li><a href="{{route('index.playlist.category',$category='Jazz')}}"><div>Jazz</div></a></li>
                                <li><a href="{{route('index.playlist.category',$category='Blues')}}"><div>Blues</div></a></li>
                                <li><a href="{{route('index.playlist.category',$category='Folk')}}"><div>Folk</div></a></li>
                                <li><a href="{{route('index.playlist.category',$category='Rock')}}"><div>Rock</div></a></li>
                                <li><a href="{{route('index.playlist.category',$category='Classic')}}"><div>Classic</div></a></li>

                            </ul></li>
                        <li><a href="{{route('index.contact')}}"><div>Contact</div></a></li>
                    </ul>

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Find your Music here....">
                        </form>
                    </div><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    @yield('content')

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="noborder dark" style="background-color: #111;">

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights" style="color: #444;">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2021 All Rights Reserved by Soroux .
                </div>

                <div class="col_half col_last">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Audio Player
============================================= -->


<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up" style="bottom: 70px;"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>

<!-- Audio player Plugin
============================================= -->
<script src="{{asset('js/mediaelement/mediaelement-and-player.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('js/functions.js')}}"></script>

<script>

    // Custom Tab jQuery
    // jQuery( '.tabs' ).on( 'tabsactivate', function( event, ui ) {
    // 	var gridContainerAvailable = jQuery( ui.newPanel ).find('.grid-container');

    // 	if( gridContainerAvailable.length > 0 ) {
    // 		gridContainerAvailable.each( function(){
    // 			var portfolioGrid = jQuery(this);

    // 			if( !portfolioGrid.hasClass('tabs-enabled-grid-container') ) {
    // 				portfolioGrid.isotope('layout');
    // 				jQuery(window).trigger('resize');
    // 				portfolioGrid.addClass('tabs-enabled-grid-container');
    // 			}
    // 		});
    // 	}
    // });

    // Music playing Scripts
    var trackPlaying = '',
        audioPlayer = document.getElementById('audio-player');

    audioPlayer.addEventListener("ended", function(){
        jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
    });

    audioPlayer.addEventListener("pause", function(){
        jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');
    });

    function changeAudio( sourceUrl, posterUrl, trackTitle, trackSinger, playAudio = true ) {
        var audio = $("#audio-player"),
            clickEl = jQuery('[data-track="'+sourceUrl+'"]'),
            playerId = audio.closest('.mejs__container').attr('id'),
            playerObject = mejs.players[playerId];

        jQuery('.track-list').find('i').removeClass('icon-pause').addClass('icon-play');

        if( sourceUrl == trackPlaying ) {
            if (playerObject.paused) {
                playerObject.play();
                clickEl.find('i').removeClass('icon-play').addClass('icon-pause');
            } else {
                playerObject.pause();
                clickEl.find('i').removeClass('icon-pause').addClass('icon-play');
            }
            return true;
        }

        trackPlaying = sourceUrl;

        audio.attr( 'poster', posterUrl );
        audio.attr( 'title', trackTitle );

        jQuery('.mejs__layers').html('').html('<div class="mejs-track-artwork"><img src="'+ posterUrl +'" alt="Track Poster" /></div><div class="mejs-track-details"><h3>'+ trackTitle +'<br><span>'+ trackSinger +'</span></h3></div>');

        if( sourceUrl != '' ) {
            playerObject.setSrc( sourceUrl );
        }
        playerObject.pause();
        playerObject.load();

        if( playAudio == true ) {
            playerObject.play();
            jQuery(clickEl).find('i').removeClass('icon-play').addClass('icon-pause');
        }
    }

    jQuery('.track-list').on( 'click', function(){
        var audioTrack = jQuery(this).attr('data-track'), // Track url
            posterUrl = jQuery(this).attr('data-poster'), // Track Poster Image
            trackTitle = jQuery(this).attr('data-title'); // Track Title
        trackSinger = jQuery(this).attr('data-singer'); // Track Singer Name

        changeAudio( audioTrack, posterUrl, trackTitle, trackSinger );
        return false;
    });

    jQuery(window).on( 'load', function(){
        var trackOnload = jQuery('#track-onload');

        if( trackOnload.length > 0 ) {
            var audioTrack = trackOnload.attr('data-track'), // Track url
                posterUrl = trackOnload.attr('data-poster'), // Track Poster Image
                trackTitle = trackOnload.attr('data-title'); // Track Title
            trackSinger = trackOnload.attr('data-singer'); // Track Singer Name

            setTimeout( function(){
                changeAudio( audioTrack, posterUrl, trackTitle, trackSinger, false );
            }, 500);
        }
    });

</script>

</body>
</html>
