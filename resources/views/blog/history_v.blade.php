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
                            <h2>Sejarah Desa Tempursari</h2>
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
                        <div class="section-tittle mb-35">
                            <h2>Awal Mula Terbentuk</h2>
                        </div>
                        <p class="mb-30">
                            @if( $main_info->sejarah != '' && $main_info->sejarah != 'NULL')
                            {{$main_info->sejarah}}
                            @else
                            Belum Tersedia
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('other.google_maps')
</main>
@endsection