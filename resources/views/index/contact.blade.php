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

                        <!-- Contact Form Overlay
                        ============================================= -->
                        <div id="contact-form-overlay" class="clearfix">

                            <div class="fancy-title title-dotted-border">
                                <h3>Send us an Email</h3>
                            </div>


                                <div class="form-result">
                                    @if(session('message'))
                                        <div class="alert alert-success">{{session('message')}}</div>
                                    @endif
                                </div>

                                <!-- Contact Form
                                ============================================= -->
                                <form class="nobottommargin"  action="{{route('index.mail')}}" method="post">
@csrf
                                    <div class="col_half">
                                        <label for="template-contactform-name">Name <small>*</small></label>
                                        <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="template-contactform-email">Email <small>*</small></label>
                                        <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_half">
                                        <label for="template-contactform-phone">Phone</label>
                                        <input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col_half col_last">
                                        <label for="template-contactform-service">Services</label>
                                        <select id="template-contactform-service" name="service" class="sm-form-control">
                                            <option value="">-- Select One --</option>
                                            <option value="Player">Player Request</option>
                                        </select>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full">
                                        <label for="template-contactform-subject">Subject <small>*</small></label>
                                        <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="template-contactform-message">Message <small>*</small></label>
                                        <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
                                    </div>


                                    <div class="col_full">
                                        <button class="button button-3d nomargin" type="submit"  name="template-contactform-submit" value="submit">Send Message</button>
                                    </div>

                                </form>

                        </div><!-- Contact Form Overlay End -->


            </div>

        </div>

    </section><!-- #content end -->



@endsection
