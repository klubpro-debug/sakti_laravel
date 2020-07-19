@extends('layouts.master')
@section('nav')
    @extends('layouts.nav')
@endsection
@section('title','Home')
@section('content')
    
<section id="page-title">
    <div class="container clearfix">
    <h1>Berita</h1>
    <span>Our Latest News in Timeline Layout</span>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Berita</li>
    </ol>
    </div>
    </section>
    
    {{-- KONTEN BERITA --}}
    <section id="content">
    <div class="content-wrap">
    <div class="container clearfix">
    <div class="postcontent nobottommargin col_last clearfix">
    <div id="posts" class="post-timeline clearfix">
    <div class="timeline-border"></div>
    {{-- mulai berita  --}}
    <div class="entry clearfix">
    <div class="entry-timeline">10<span>Feb</span>
    <div class="timeline-divider"></div>
    </div>
    <div class="entry-image">
    <a href="images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/standard/17.jpg" alt="Standard Post with Image"></a>
    </div>
    <div class="entry-title">
    <h2><a href="/detailberita">This is a Standard post with a Preview Image</a></h2>
    </div>
    <ul class="entry-meta clearfix">
    <li><a href="#"><i class="icon-user"></i> admin</a></li>
    <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
    <li><a href="/detailberita#comments"><i class="icon-comments"></i> 13 Comments</a></li>
    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
    </ul>
    <div class="entry-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
    <a href="/detailberita" class="more-link">Read More</a>
    </div>
    </div>
    </div>
    </div>

    <div class="sidebar nobottommargin clearfix">
    <div class="sidebar-widgets-wrap">
    <div class="widget clearfix">
    <h4>Flickr Photostream</h4>
    <div id="flickr-widget" class="flickr-feed masonry-thumbs" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>
    </div>
    <div class="widget clearfix">
    <div class="tabs nobottommargin clearfix" id="sidebar-tabs">
    <ul class="tab-nav clearfix">
    <li><a href="#tabs-1">Popular</a></li>
    <li><a href="#tabs-2">Recent</a></li>
    <li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
    </ul>
    <div class="tab-container">
    <div class="tab-content clearfix" id="tabs-1">
    <div id="popular-post-list-sidebar">
    <div class="spost clearfix">
    <div class="entry-image">
    <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt=""></a>
    </div>
    <div class="entry-c">
    <div class="entry-title">
    <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
    </div>
    <ul class="entry-meta">
    <li><i class="icon-comments-alt"></i> 35 Comments</li>
    </ul>
    </div>
    </div>
    <div class="spost clearfix">
    <div class="entry-image">
    <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt=""></a>
    </div>
    <div class="entry-c">
    <div class="entry-title">
    <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
    </div>
    <ul class="entry-meta">
    <li><i class="icon-comments-alt"></i> 24 Comments</li>
    </ul>
    </div>
    </div>
    <div class="spost clearfix">
    <div class="entry-image">
    <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt=""></a>
    </div>
    <div class="entry-c">
    <div class="entry-title">
    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
    </div>
    <ul class="entry-meta">
    <li><i class="icon-comments-alt"></i> 19 Comments</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-content clearfix" id="tabs-2">
    <div id="recent-post-list-sidebar">
    <div class="spost clearfix">
    <div class="entry-image">
    <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt=""></a>
    </div>
    <div class="entry-c">
    <div class="entry-title">
    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
    </div>
    <ul class="entry-meta">
    <li>10th July 2014</li>
    </ul>
    </div>
    </div>
    <div class="spost clearfix">
    <div class="entry-image">
    <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt=""></a>
    </div>
    <div class="entry-c">
    <div class="entry-title">
    <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
    </div>
    <ul class="entry-meta">
    <li>10th July 2014</li>
    </ul>
    </div>
    </div>
    <div class="spost clearfix">
    <div class="entry-image">
    <a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt=""></a>
    </div>
    <div class="entry-c">
    <div class="entry-title">
    <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
    </div>
    <ul class="entry-meta">
    <li>10th July 2014</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-content clearfix" id="tabs-3">
    <div id="recent-post-list-sidebar">
    <div class="spost clearfix">
    <div class="entry-image">
    <a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>
    </div>
    <div class="entry-c">
    <strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
     </div>
    </div>
    <div class="spost clearfix">
    <div class="entry-image">
    <a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>
    </div>
    <div class="entry-c">
    <strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
    </div>
    </div>
    <div class="spost clearfix">
    <div class="entry-image">
    <a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>
    </div>
    <div class="entry-c">
    <strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="widget clearfix">
    <h4>Portfolio Carousel</h4>
    <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">
    <div class="oc-item">
    <div class="iportfolio">
    <div class="portfolio-image">
    <a href="#">
    <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
    </a>
    <div class="portfolio-overlay">
    <a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
    </div>
    </div>
    <div class="portfolio-desc center nobottompadding">
    <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
    <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
    </div>
    </div>
    </div>
    <div class="oc-item">
    <div class="iportfolio">
    <div class="portfolio-image">
    <a href="portfolio-single.html">
    <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
    </a>
    <div class="portfolio-overlay">
    <a href="images/blog/full/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
    </div>
    </div>
    <div class="portfolio-desc center nobottompadding">
    <h3><a href="portfolio-single.html">Open Imagination</a></h3>
    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="widget clearfix">
    <h4>Tag Cloud</h4>
    <div class="tagcloud">
    <a href="#">general</a>
    <a href="#">videos</a>
    <a href="#">music</a>
    <a href="#">media</a>
    <a href="#">photography</a>
    <a href="#">parallax</a>
    <a href="#">ecommerce</a>
    <a href="#">terms</a>
    <a href="#">coupons</a>
    <a href="#">modern</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection

