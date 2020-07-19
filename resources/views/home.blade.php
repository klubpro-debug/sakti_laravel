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
    <a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
    </div>
    </div>
    <div class="portfolio-desc">
    <h3><a href="portfolio-single.html">Open Imagination</a></h3>
    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, nobis voluptates deleniti atque voluptate perferendis fugiat eligendi accusantium inventore dolorum!</p>
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

    <div class="section notopmargin nobottommargin nobottomborder topborder">
        <div class="container clearfix">
        <div class="heading-block center nomargin">
        <h3>Galeri</h3>
        </div>
        </div>
        </div>
    
        <div id="portfolio" class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">
        <article class="portfolio-item pf-media pf-icons">
        
        <div class="portfolio-image">
        <a href="portfolio-single.html">
        <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
        </a>
        <div class="portfolio-overlay">
        <a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
        </div>
        <div class="portfolio-desc">
        <h3><a href="portfolio-single.html">Open Imagination</a></h3>
        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
        </div>
        </article>
        <article class="portfolio-item pf-illustrations">
        <div class="portfolio-image">
        <a href="portfolio-single.html">
        <img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
        </a>
        <div class="portfolio-overlay">
        <a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
        </div>
        <div class="portfolio-desc">
        <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
        <span><a href="#">Illustrations</a></span>
        </div>
        </article>
        <article class="portfolio-item pf-graphics pf-uielements">
        <div class="portfolio-image">
        <a href="#">
        <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
        </a>
        <div class="portfolio-overlay">
        <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
        </div>
        <div class="portfolio-desc">
        <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
        <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
        </div>
        </article>
        <article class="portfolio-item pf-icons pf-illustrations">
        <div class="portfolio-image">
        <a href="portfolio-single.html">
        <img src="images/portfolio/4/4.jpg" alt="Open Imagination">
        </a>
        <div class="portfolio-overlay" data-lightbox="gallery">
        <a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
        <a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
        <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
        </div>
        <div class="portfolio-desc">
        <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
        <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
        </div>
        </article>
        <article class="portfolio-item pf-uielements pf-media">
        <div class="portfolio-image">
        <a href="portfolio-single.html">
        <img src="images/portfolio/4/5.jpg" alt="Console Activity">
        </a>
        <div class="portfolio-overlay">
        <a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
        </div>
        <div class="portfolio-desc">
        <h3><a href="portfolio-single.html">Console Activity</a></h3>
        <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
        </div>
        </article>
        <article class="portfolio-item pf-graphics pf-illustrations">
        <div class="portfolio-image">
        <a href="portfolio-single.html">
        <img src="images/portfolio/4/6.jpg" alt="Open Imagination">
        </a>
        <div class="portfolio-overlay" data-lightbox="gallery">
        <a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
        <a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
        <a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
        <a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
        <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
        </div>
        <div class="portfolio-desc">
        <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
        <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
        </div>
        </article>
        <article class="portfolio-item pf-uielements pf-icons">
        <div class="portfolio-image">
        <a href="portfolio-single-video.html">
        <img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
        </a>
        <div class="portfolio-overlay">
        <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
        </div>
        <div class="portfolio-desc">
        <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
        <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
        </div>
        </article>
        <article class="portfolio-item pf-graphics">
        <div class="portfolio-image">
        <a href="portfolio-single.html">
        <img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
        </a>
        <div class="portfolio-overlay">
        <a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
        </div>
        </div>
        <div class="portfolio-desc">
        <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
        <span><a href="#">Graphics</a></span>
        </div>
        
        </article>
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
        <div class="col-lg-3 col-md-6 bottommargin">
        <div class="ipost clearfix">
    
        <div class="entry-image">
        <a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
        </div>
        <div class="entry-title">
        <h3><a href="blog-single.html">Bloomberg smart cities; change-makers economic security</a></h3>
        </div>
        <ul class="entry-meta clearfix">
        <li><i class="icon-calendar3"></i> 13th Jun 2014</li>
        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
        </ul>
        <div class="entry-content">
        <p>Prevention effect, advocate dialogue rural development lifting people up community civil society. Catalyst, grantees leverage.</p>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 bottommargin">
        <div class="ipost clearfix">
        <div class="entry-image">
        <a href="#"><img class="image_fade" src="images/magazine/thumb/2.jpg" alt="Image"></a>
        </div>
        <div class="entry-title">
        <h3><a href="blog-single.html">Medicine new approaches communities, outcomes partnership</a></h3>
        </div>
        <ul class="entry-meta clearfix">
        <li><i class="icon-calendar3"></i> 24th Feb 2014</li>
        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 17</a></li>
        </ul>
        <div class="entry-content">
        <p>Cross-agency coordination clean water rural, promising development turmoil inclusive education transformative community.</p>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 bottommargin">
        <div class="ipost clearfix">
        <div class="entry-image">
        <a href="#"><img class="image_fade" src="images/magazine/thumb/3.jpg" alt="Image"></a>
        </div>
        <div class="entry-title">
        <h3><a href="blog-single.html">Significant altruism planned giving insurmountable challenges liberal</a></h3>
        </div>
        <ul class="entry-meta clearfix">
        <li><i class="icon-calendar3"></i> 30th Dec 2014</li>
        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
        </ul>
        <div class="entry-content">
        <p>Micro-finance; vaccines peaceful contribution citizens of change generosity. Measures design thinking accelerate progress medical initiative.</p>
        </div>
        </div>
        </div>
    
        <div class="col-lg-3 col-md-6 bottommargin">
        <div class="ipost clearfix">
        <div class="entry-image">
        <a href="#"><img class="image_fade" src="images/magazine/thumb/4.jpg" alt="Image"></a>
        </div>
        <div class="entry-title">
        <h3><a href="blog-single.html">Compassion conflict resolution, progressive; tackle</a></h3>
        </div>
        <ul class="entry-meta clearfix">
        <li><i class="icon-calendar3"></i> 15th Jan 2014</li>
        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 54</a></li>
        </ul>
        <div class="entry-content">
        <p>Community health workers best practices, effectiveness meaningful work The Elders fairness. Our ambitions local solutions globalization.</p>
        </div>
        </div>
        </div>
        
        </div>
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
    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
    </div>
    </div>
    </div>
    <div class="swiper-slide dark">
    <div class="container clearfix">
    <div class="slider-caption slider-caption-center">
    <h2 data-animate="fadeInUp">Beautifully Flexible</h2>
    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
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
    <div class="swiper-slide" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
    <div class="container clearfix">
    <div class="slider-caption">
    <h2 data-animate="fadeInUp">Great Performance</h2>
    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
    </div>
    </div>
    </div>
    </div>
    <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
    <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
    <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
    </div>
    </div>
    </section>
@endsection

@section('title','Home')