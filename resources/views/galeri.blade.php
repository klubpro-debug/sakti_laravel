@extends('layouts.master')

@section('title','Galeri')
@section('nav')
@extends('layouts.nav')
@endsection

@section('content')

<section id="content" class="py-4">
    <div class="heading-block title-center page-section">
        <h2>Galeri</h2>
    </div>    
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="portfolio-shuffle" data-container="#portfolio">
                <i class="icon-random"></i>
            </div>
            <div class="clear"></div>

            <div id="portfolio" class="portfolio grid-container clearfix">
                @foreach ($galeri as $g)
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="{{ asset('uploads') }}/{{ $g->gambar }}" alt="Open Imagination" height="100px" width="100px">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="{{ asset('uploads') }}/{{ $g->gambar }}" class="center-icon" data-lightbox="image"
                                title="{{ $g->judul }}"><i class="icon-line-plus"></i></a>
                        </div>
                    </div>
                </article>                    
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection