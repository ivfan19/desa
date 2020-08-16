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
                            <h2>Karang Taruna</h2>
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
            <div class="section-top-borders">
                <h3 class="mb-30">Table</h3>
					<div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Nama</div>
								<div class="visit">Jabatan</div>
								<div class="percentage">Masa Menjabat</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> Alan</div>
								<div class="visit">Kepala Desa</div>
								<div class="percentage"> 1-2-2000 sampai sekarang</div>
							</div>

							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> Alaan</div>
								<div class="visit">Wakil Kepala Desa</div>
								<div class="percentage"> 1-2-2000 sampai sekarang</div>
							</div>

							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> Alaaan</div>
								<div class="visit">Kepala Dusun</div>
								<div class="percentage"> 1-2-2000 sampai sekarang</div>
							</div>
							
						</div>
					</div>
                </div>
        </div>
    </div>
            
    @include('other.google_maps')
</main>
@endsection