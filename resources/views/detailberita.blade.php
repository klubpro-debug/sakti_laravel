@extends('layouts.master')
@section('nav')
    @include('layouts.nav')
@endsection
@section('content')
    <div class="line"></div>
    <section id="content">
    <div class="content-wrap">
    <div class="container clearfix">
    
    <div class="nobottommargin clearfix">
    <div class="single-post nobottommargin">
    
    <div class="entry clearfix">
    
    <div class="entry-title">
    <h2>{{ $berita->judul }}</h2>
    </div>
    
    <ul class="entry-meta clearfix">
    <li><i class="icon-calendar3"></i> {{ $berita->created_at->format('d F Y') }}</li>
    <li><a href="#"><i class="icon-user"></i> {{ $berita->author }}</a></li>
    <li><i class="icon-folder-open"></i> <a href="#">{{ $berita->kategori->nama }}</a></li>
    </ul>
    
    <div class="entry-image">
    <a href="#"><img src="{{ asset('uploads') }}/{{ $berita->gambar }}" alt="{{ $berita->judul }}"></a>
    </div>

    <div class="entry-content notopmargin">
    <p>{!! $berita->isi !!}</p>
    
    <div class="tagcloud clearfix bottommargin">
    <a href="#">general</a>
    <a href="#">information</a>
    <a href="#">media</a>
    <a href="#">press</a>
    <a href="#">gallery</a>
    <a href="#">illustration</a>
    </div>
    <div class="clear"></div>
    
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
    </div>
    </div>
    </div>
    
    <h4>Berita yang Berkaitan :</h4>
    @foreach ($related as $r)
    <div class="related-posts clearfix">
        <div class="col nobottommargin">
        <div class="mpost clearfix">
        <div class="entry-image">
        <a href="#"><img src="{{ asset('uploads') }}/{{ $r->gambar }}" alt="{{ $r->judul }}"></a>
        </div>
        <div class="entry-c">
        <div class="entry-title">
        <h4><a href="#">{{ $r->judul }}</a></h4>
        </div>
        <ul class="entry-meta clearfix">
            <li><i class="icon-calendar3"></i> {{ $r->created_at->format('d F Y') }}</li>
            <li><a href="#"><i class="icon-user"></i> {{ $r->author }}</a></li>
            <li><i class="icon-folder-open"></i> <a href="#">{{ $r->kategori->nama }}</a></li>
            </ul>
        <div class="entry-content">{!! Str::limit($r->isi, 200) !!}</div>
        </div>
        </div>
        </div>
        </div>        
    @endforeach
    
    <h4>Berita Terbaru :</h4>
    @foreach ($terbaru as $t)
    <div class="related-posts clearfix">
        <div class="col nobottommargin">
        <div class="mpost clearfix">
        <div class="entry-image">
        <a href="#"><img src="{{ asset('uploads') }}/{{ $t->gambar }}" alt="{{ $t->judul }}"></a>
        </div>
        <div class="entry-c">
        <div class="entry-title">
        <h4><a href="#">{{ $t->judul }}</a></h4>
        </div>
        <ul class="entry-meta clearfix">
            <li><i class="icon-calendar3"></i> {{ $t->created_at->format('d F Y') }}</li>
            <li><a href="#"><i class="icon-user"></i> {{ $t->author }}</a></li>
            <li><i class="icon-folder-open"></i> <a href="#">{{ $t->kategori->nama }}</a></li>
            </ul>
        <div class="entry-content">{!! Str::limit($t->isi, 200) !!}</div>
        </div>
        </div>
        </div>
        </div>        
    @endforeach    

    </div>
    </div>
    </section>
@endsection