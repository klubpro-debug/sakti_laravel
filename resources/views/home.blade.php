@extends('layouts.master')

@section('nav')
@include('layouts.navtrans')
@endsection

@section('content')
<div class="section notopmargin nobottommargin nobottomborder topborder">
    <div class="container clearfix">
        <div class="heading-block center nomargin">
            <h3>Divisi</h3>
        </div>
    </div>
</div>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div id="portfolio" class="portfolio portfolio-1 grid-container portfolio-fullwidth clearfix">

                <article class="portfolio-item pf-media pf-icons clearfix">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="images/portfolio/1/1.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i
                                    class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, nobis voluptates deleniti
                            atque voluptate perferendis fugiat eligendi accusantium inventore dolorum!</p>
                        <ul class="iconlist">
                            <li><i class="icon-ok"></i> <strong>Created Using:</strong> PHP, HTML5, CSS3</li>
                            <li><i class="icon-ok"></i> <strong>Completed on:</strong> 12th January, 2014</li>
                            <li><i class="icon-ok"></i> <strong>By:</strong> John Doe</li>
                        </ul>
                        <a href="portfolio-single.html" class="button button-3d noleftmargin">Launch Project</a>
                    </div>
                </article>

            </div>
        </div>
    </div>
</section>
@endsection

@section('content1')

<div class="section notopmargin nobottommargin nobottomborder topborder">
    <div class="container clearfix">
        <div class="heading-block center nomargin">
            <h3>Galeri</h3>
        </div>
    </div>
</div>

<div id="portfolio"
    class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">
    @foreach ($galeri as $g)
    <article class="portfolio-item pf-media pf-icons">
        <div class="portfolio-image">
            <img src="{{ asset('uploads') }}/{{ $g->gambar }}" alt="Open Imagination">
            <div class="portfolio-overlay">
                <a href="{{ asset('uploads') }}/{{ $g->gambar }}" class="center-icon" data-lightbox="image"><i
                        class="icon-line-plus"></i></a>
            </div>
        </div>
    </article>        
    @endforeach
</div>

<section id="content">
    <div class="content-wrap">
        <div class="section notopmargin notopborder">
            <div class="container clearfix">
                <div class="heading-block center nomargin">
                    <h3>Berita Terbaru UKM SAKTI</h3>
                </div>
            </div>
        </div>


        <div class="container clearfix">
            <div class="row">
                @foreach ($berita as $b)
                <div class="col-lg-3 col-md-6 bottommargin">
                    <div class="ipost clearfix">
                        <div class="entry-image">
                            <a href="berita/{{ $b->slug }}"><img class="image_fade"
                                    src="{{ asset('uploads') }}/{{ $b->gambar }}" alt="Image"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="berita/{{ $b->slug }}">{{ $b->judul }}</a></h3>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> {{ $b->created_at->format('d F, Y') }}</li>
                            <li><i class="icon-user"></i> {{ $b->author }}</li>
                            <li><a href="kategori/{{ $b->kategori_nama }}"><i class="icon-tag"></i>
                                    {{ $b->kategori_nama }}</a></li>
                        </ul>
                        <div class="entry-content">
                            {!! Str::limit($b->isi, 100) !!}
                        </div>
                        <div class="py-4">
                            <a href="berita/{{ $b->slug }}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endsection

        @section('jumbotron')
        <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
            <div class="slider-parallax-inner">
                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark" style="background-image: url('images/slider/swiper/1.jpg');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp">Welcome to Canvas</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just
                                        what
                                        you need for your Perfect Website. Choose from a wide range of Elements &amp;
                                        simply
                                        put them on our Canvas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide dark">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp">Beautifully Flexible</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks
                                        beautiful
                                        &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive
                                        functionality that can be adapted to any screen size.</p>
                                </div>
                            </div>
                            <div class="video-wrap">
                                <video poster="images/videos/deskwork.jpg" preload="auto" loop autoplay muted>
                                    <source src='images/videos/deskwork.mp4' type='video/mp4' />
                                    <source src='images/videos/deskwork.webm' type='video/webm' />
                                </video>
                                <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
                            <div class="container clearfix">
                                <div class="slider-caption">
                                    <h2 data-animate="fadeInUp">Great Performance</h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be
                                        surprised to see the Final Results of your Creation &amp; would crave for more.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                    <div class="slide-number">
                        <div class="slide-number-current"></div><span>/</span>
                        <div class="slide-number-total"></div>
                    </div>
                </div>
            </div>
        </section>
        @endsection

        @section('title','Home')