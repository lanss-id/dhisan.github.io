<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.link')
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        @include('layouts.navbar')
    </header>
    
    <main class="about-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInLeft">About Us</h1>
        </div>
        <img src="assets/images/a.png" alt="about" class="img-fluid wow fadeInUp ">
        <div class="container">           
            <p class="mt-5 oleez-page-header-content wow fadeInLeft" style="font-size: 20px">
                &emsp;Dhisan Atelier adalah arsitek profesional dan studio desain interior di Bandung yang menyediakan jasa solusi desain bangunan hingga konstruksi eksterior dan interior terbaik sesuai budget Anda. Berbasis di kota Bandung, Dhisan dibentuk pada tahun 2021 dengan 4 formasi tim utama yang solid antara arsitek, desainer interior, manajer dan tim kreatif. <br> <br>
                &emsp;Kami memiliki semangat untuk menciptakan solusi desain yang mengutamakan fungsi, ergonomi, estetika, dan tanggung jawab lingkungan. Di studio Dhisan, kami berkomitmen untuk memberikan layanan penuh kepada klien dengan desain berkualitas tinggi dan sesuai dengan kepuasan klien.
            </p>
            <section class="oleez-about-features">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                        <h5 class="feature-card-title"><span style="color: #F7B500"> Desain </span>&nbsp;  Sempurna</h5>
                        <p class="feature-card-content">Dhisan Atelier berkomitmen untuk memberikan desain sesuai keinginan Anda tanpa mengurangi nilai fungsional maupun artistik dalam desain.</p>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                        <h5 class="feature-card-title">Perancangan &nbsp; <span style="color: #F7B500"> Matang </span></h4>
                        <p class="feature-card-content">Tidak Hanya desain yang sempurna, kami juga akan merancang setiap detail fungsional pada bangunan anda.</p>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                        <h5 class="feature-card-title"><span style="color: #F7B500">Hasil</span>&nbsp; Terbaik</h4>
                        <p class="feature-card-content">Kami selalu berusaha untuk memberikan hasil yang membuat anda puas atas jasa kami.</p>
                    </div>
                </div>
            </section>
            <section class="oleez-what-we-do">
                <div class="row">
                    <div class="col-lg-11 offset-lg-1">
                        <h2 class="section-title wow fadeInUp">Opsi Layanan</h2>
                        <h4 class="section-subtitle wow fadeInUp">Kami memberikan pilihan layanan agar klien kami lebih puas</h4>
                        <div class="row d-flex justify-content-around">
                            <div class="col-md-4 mb-5 mb-md-0 wow fadeInUp">
                                <h5 class="what-we-do-list-title font-weight-bold">Paket desain arsitek</h5>
                                <ul class="what-we-do-list">
                                    <li>Konsultasi biaya dan desain</li>
                                    <li>Konsep pemrograman skema</li>
                                    <li>Gambar kerja konstruksi</li>
                                    <li>model 3D </li>
                                    <li>Visualisasi animasi </li>
                                    <li>Perencanaan anggaran</li>
                                    <li>Administrasi IMB</li>
                                    <li>Pengawasan lapangan</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-5 mb-md-0 wow fadeInUp">
                                <h5 class="what-we-do-list-title font-weight-bold">Paket desain interior</h5>
                                <ul class="what-we-do-list">
                                    <li>Konsultasi biaya dan desain</li>
                                    <li>Konsep pemrograman skema</li>
                                    <li>Gambar kerja konstruksi</li>
                                    <li>model 3D </li>
                                    <li>Visualisasi animasi </li>
                                    <li>Perabotan khusus</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-5 mb-md-0 wow fadeInUp">
                                <h5 class="what-we-do-list-title font-weight-bold">Bagaimana kita bekerja</h5>
                                <ul class="what-we-do-list">
                                    <li>Pertemuan tim dan klien</li>
                                    <li>Konsep pemrograman dan permintaan dari klien</li>
                                    <li>Transparansi rencana anggaran desain</li>
                                    <li>Pengembangan konsep desain berdasarkan permintaan</li>
                                    <li>Pengawasan pembangunan di lapangan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="oleez-about-work-with-us wow fadeInUp">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        {{-- <h2 class="section-title">Cara Kerja Kami</h2> --}}
                        {{-- <p class="section-subtitle">Would you like us to <a href="#!">work</a>  on your brand identity? We would be happy to <a href="#!">help</a>.</p> --}}
                        <div class="row d-flex justify-content-around">
                        <a href="{{ url('/contact') }}" class="btn work-with-us-btn">Pesan Sekarang!</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    @include('layouts.footer')

    <!-- Modals -->
    <!-- Off canvas social menu -->
    @include('partials.off-canvas')
    <!-- Full screen search box -->
    <div id="searchModal" class="search-modal">
        <button type="button" class="close" aria-label="Close" data-dismiss="searchModal">
            <span aria-hidden="true">&times;</span>
        </button>
        <form action="index.html" method="get" class="oleez-overlay-search-form">
            <label for="search" class="sr-only">Search</label>
            <input type="search" class="oleez-overlay-search-input" id="search" name="search" placeholder="Search here">
        </form>
    </div>
</body>
@include('layouts.script')
<script>
    new WOW().init();
</script>

</html>