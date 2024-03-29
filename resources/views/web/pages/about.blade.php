@extends('layouts.web')

<?php $seo = DB::table('seo')->where('id_seo', '1')->first(); ?>
@section('title')
  {{ $seo->title ? $seo->title : 'Jasa Pembuatan Website | websitetangguh.com' }}
@endsection

@section('description')
  {{ $seo->deskripsi ? $seo->deskripsi : 'Jasa Pembuatan Website | websitetangguh.com' }}
@endsection

@section('keyword')
  {{ $seo->keyword ? $seo->keyword : 'Jasa Pembuatan Website | websitetangguh.com' }}
@endsection

@section('content')

  @include('web.components.header')

  <!-- Main Content Wrapper Start -->
  
  <div class="breadcrumbs">
    <div class="container">
      <h1 class="category-name">{{ $aboutus->title }}</h1>
      <ul class="breadcrumb">
        <li>
          <a href="/home" class="smooth" title="">Home</a>
        </li>
        <li>
          <a href="#" class="smooth" title="">About Us</a>
        </li>
      </ul>
    </div>
  </div>


  <!-- ABOUT US -->
  <div class="about-us">
    <div class="about-us-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{asset('assets/aboutus/'.$aboutus->gambar)}}" alt="" class="img-responsive">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 about-desc-box">
            <h2 class="about-title">{{ $aboutus->title }}</h2>
            <div class="about-desc">
              <p>{!! $aboutus->konten !!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- //ABOUT US -->

  <!-- Main Content Wrapper End -->

  @include('web.components.footer')

@endsection
