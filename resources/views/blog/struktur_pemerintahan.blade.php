@extends('other.blog_template1')
@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2" data-background="{{ asset('img/hero/hero4.png') }}">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>Struktur Organisasi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="singel-details-cap mb-40">
                        <p class="mb-30 text-center">Struktur Organisasi Pemerintah Desa Tempurasi</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-details-img mb-30 pt-50">
                        <img id="contoh" src="{{ asset('img/strk.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

            
    @include('other.google_maps')
</main>
@endsection