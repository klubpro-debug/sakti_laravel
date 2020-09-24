@extends('layouts.master')
@section('nav')
@include('layouts/navtrans')
@endsection
@section('title','About')
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
            <h2>Visi & Misi</h2>
        </div>
    </div>
    <img src="img/about-us.jpg" alt="">
    <div class="row">
        <div class="col-lg-6">
            <div class="about-us">
                {!! $info->visi !!}
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-quality">
                {!! $info->misi !!}
            </div>
        </div>
    </div>
</div>
<!-- Visi Misi Section End -->


<!-- Struktur Organisasi Begin -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="clear"></div>
            <div class="divider  divider-short divider-center"></div>
            <div class="heading-block title-center page-section">
                <h2>Struktur Organisasi</h2>
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
<!-- Struktur Organisasi End -->


<!-- Map Section Begin -->
<div class="clear"></div>
<div class="divider  divider-short divider-center"></div>
<div class="heading-block title-center page-section">
    <h2>Alamat</h2>
</div>
<div class="contact-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.835834958933!2d113.89598131423784!3d-2.2155282379692793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb387eff927dd%3A0x26ab0c830a2ede08!2sUKM%20SAKTI!5e0!3m2!1sid!2sid!4v1583033711447!5m2!1sid!2sid"
        width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <div class="map-hover"></div>
</div>
<!-- Map Section End -->

@endsection