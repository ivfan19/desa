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
                            <h2>Profil Wilayah Desa Tempursari</h2>
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
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="about-caption mb-50">
                        <div class="section-tittle mb-10">
                            <h3><b>1. Kondisi Geografis</b></h3>
                        </div>
                        <p class="mb-30">$Isi</p>
                    </div>
                    <div class="about-caption mb-50">
                        <div class="section-tittle mb-10">
                           <h3><b>2. Perbatasan Desa</b></h3>
                        </div>
                        <ul>
                            <li><p class="mb-30">- Batas sebelah utara : {{ $main_info->batas_u }}</p></li>
                            <li><p class="mb-30">- Batas sebelah  : {{ $main_info->batas_t }}</p></li>
                            <li><p class="mb-30">- Batas sebelah selatan : {{ $main_info->batas_s }}</p></li>
                            <li><p class="mb-30">- Batas sebelah barat : {{ $main_info->batas_b }}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

            
    @include('other.google_maps')
</main>
@endsection