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
                            <h2>Visi dan Misi Desa Tempursari</h2>
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
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12">
                    <div class="about-caption mb-50">
                        <div class="section-tittle text-center mb-10">
                            <!-- <h1 data-animation="fadeInDown" data-delay="0.2s" class="text-center"><b>VISI</b></h1> -->
                            <span class="element">VISI</span>
                        </div>
                        <p class="mb-30" style="text-align:justify; text-indent:0.6in">Visi adalah suatu gambaran yang menantang tentang keadaan masa depan yang diinginkan dengan melihat potensi dan kebutuhan desa, penyusunan Visi Desa Tempursari ini dilakukan dengan pendekatan partisipatif, melibatkan pihak-pihak yang berkepentingan di Desa sejahtera seperti pemerintah desa, BPD, tokoh masyarakat, tokoh agama, lembaga masyarakat desa dan masyarakat desa pada umumnya. Pertimbangan kondisi eksternal di desa seperti satuan kerja wilayah pembangunan di Kecamatan. Maka berdasarkan pertimbangan di atas Visi Desa Tempursari adalah :</p>

                        <h3 class="text-center" style="font-style:italic; color:blue">text visi</h3>

                    </div>

                    <div class="about-caption mb-50">
                        <div class="section-tittle text-center mb-10">
                            <!-- <h1 data-animation="fadeInDown" data-delay="0.2s" class="text-center"><b>VISI</b></h1> -->
                            <span class="element">MISI</span>
                        </div>
                        <p class="mb-30" style="text-align:justify; text-indent:0.6in">   Selain penyusunan visi juga telah ditetapkan misi-misi yang memuat sesuatu pernyataan yang harus dilaksanakan oleh desa agar tercapainya visi desa tersebut. Visi berada di atas misi. Pernyataan visi kemudian dijabarkan ke dalam misi agar dapat di operasionalkan/dikerjakan. Sebagaimana penyusunan visi, misipun dalam penyusunannya menggunakan pendekatan partsipatif dan pertimbangan potensi dan kebutuhan Desa Tempursari  sebagaimana proses yang dilakukan maka misi Desa Tempursari adalah :</p>
                        
                        <h3 class="text-center" style="font-style:italic; color:blue">text misi</h3>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
            
    @include('other.google_maps')
</main>
@endsection