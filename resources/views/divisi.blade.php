@extends('layouts.master')
@section('nav')
@include('layouts.navtrans')
@endsection
@section('title','Divisi '.ucfirst($nama))
@section('jumbotron')
<section id="page-title" class="page-title-parallax page-title-dark page-title-right"
    style="padding: 250px 0; background-image: url('{{ asset('') }}images/about/me-parallax.jpg'); background-size: cover; background-position: center center;"
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
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-block title-center page-section">
                    <h2>Bio</h2>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <p>{!! $divisi->bio !!}</p>
            </div>
        </div>
    </div>
    <img src="img/about-us.jpg" alt="">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="about-us">
                <h3>Divisi {{ ucfirst($nama) ?? '' }}</h3>
            </div>
        </div>        
        <div class="col-lg-6">
            <div class="about-us">
                <h4>Latar Belakang</h4>
            </div>
            <p>{!! $divisi->latar_belakang !!}</p>
        </div>
        <div class="col-lg-6">
            <div class="about-quality">
                <h4>Kegiatan</h4>
            </div>
            <p>{!! $divisi->kegiatan !!}</p>
        </div>
    </div>
    <div class="clear"></div>
    <div class="divider  divider-short divider-center"></div>    
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
<div class="clear"></div>
<div class="divider  divider-short divider-center"></div>    
<div class="container clearfix">
    <div class="heading-block title-center page-section">
        <h2>Berita</h2>
    </div>       
    <div class="row">
        @foreach ($berita as $b)
        <div class="col-lg-3 col-md-6 bottommargin">
            <div class="ipost clearfix">
                <div class="entry-image">
                    <a href="{{ route('berita') }}/{{ $b->slug }}"><img class="image_fade"
                            src="{{ asset('uploads') }}/{{ $b->gambar }}" alt="Image"></a>
                </div>
                <div class="entry-title">
                    <h3><a href="{{ route('berita') }}/{{ $b->slug }}">{{ $b->judul }}</a></h3>
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
                    <a href="{{ route('berita') }}/{{ $b->slug }}">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>  
</div>

<div class="clear"></div>
<div class="divider  divider-short divider-center"></div>  
<!-- Struktur Begin -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="clear"></div>
            <div class="heading-block title-center page-section">
                <h2>Struktur</h2>
            </div>
            <div id="oc-team-list" class="owl-carousel team-carousel carousel-widget" data-margin="30" data-nav="false"
                data-items-md="1" data-items-xl="2">
                @foreach ($struktur as $s)
                <div class="oc-item">
                    <div class="team team-list clearfix">
                        <div class="team-image">
                            <img src="{{ asset('uploads') }}/{{ $s->gambar }}" alt="{{ $s->nama }}">
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4>{{ $s->nama }}</h4><span>{{ $s->jabatan }}</span>
                            </div>
                            <div class="team-content">
                                <p>{{ $s->bio }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<div class="clear"></div>
<div class="divider  divider-short divider-center"></div>
<!-- Struktur End -->
</div>
<!-- Visi Misi Section End -->
@endsection