@extends('layouts.master')
@section('nav')
    @extends('layouts.nav')
@endsection
@section('title','Divisi Programming')
@section('jumbotron')
<section id="page-title" class="page-title-parallax page-title-dark page-title-right"
    style="padding: 250px 0; background-image: url('images/about/me-parallax.jpg'); background-size: cover; background-position: center center;"
    data-bottom-top="background-position:0px 440px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>SAKTI</h1>
        <span>UKM - UPR</span>
    </div>
</section>
@endsection
@section('content')
<!-- Visi Misi Section Begin -->
<div class="container clearfix">
    <div class="clear"></div>
    <div class="fancy-title title-border title-center">
        <div class="clear"></div>
        <div class="divider  divider-short divider-center"></div>
        <div class="heading-block title-center page-section">
            <h2>Bio</h2>
        </div>
    </div>
    <img src="img/about-us.jpg" alt="">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="about-us">
                <h3>Klub Programming</h3>
            </div>
        </div>        
        <div class="col-lg-6">
            <div class="about-us">
                <h4>Latar Belakang</h4>
            </div>
            <p>Id aliqua adipisicing laborum ut esse in laborum esse et amet sint mollit aute. Est non sit reprehenderit eu culpa laboris ea. Irure non ut excepteur ea. Fugiat minim veniam cillum est. Cillum in anim in non labore ut exercitation officia. Proident minim eu amet dolor occaecat non nulla adipisicing amet velit enim tempor veniam dolor.</p>
        </div>
        <div class="col-lg-6">
            <div class="about-quality">
                <h4>Kegiatan</h4>
            </div>
            <ul>
                <li>Tempor veniam adipisicing reprehenderit reprehenderit mollit ad proident non minim esse nulla reprehenderit.</li>
                <li>Ea sint adipisicing laborum enim velit anim aute aliqua ea eu minim non exercitation do.</li>
                <li>Voluptate excepteur anim magna magna mollit excepteur ipsum elit fugiat reprehenderit fugiat mollit nostrud in.</li>
            </ul>
        </div>
    </div>
    <div class="heading-block title-center page-section">
        <h2>Visi & Misi</h2>
    </div>    
    <div class="row">
        <div class="col-lg-6">
            <div class="about-us">
                <h4>Visi</h4>
            </div>
            <p>Id aliqua adipisicing laborum ut esse in laborum esse et amet sint mollit aute. Est non sit reprehenderit eu culpa laboris ea. Irure non ut excepteur ea. Fugiat minim veniam cillum est. Cillum in anim in non labore ut exercitation officia. Proident minim eu amet dolor occaecat non nulla adipisicing amet velit enim tempor veniam dolor.</p>
        </div>
        <div class="col-lg-6">
            <div class="about-quality">
                <h4>Misi</h4>
            </div>
            <p>Laboris ad consectetur labore fugiat officia reprehenderit et ex quis nisi consequat esse. Do velit veniam in dolor incididunt aliquip et Lorem duis dolore. Incididunt et eu proident sit incididunt. Elit sit et esse culpa mollit duis mollit veniam velit eu minim ad veniam qui.</p>
        </div>        
    </div>
    <div class="heading-block title-center page-section">
        <h2>Galeri</h2>
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
<div class="heading-block title-center page-section">
    <h2>Berita</h2>
</div>       
</div>
<!-- Visi Misi Section End -->
@endsection