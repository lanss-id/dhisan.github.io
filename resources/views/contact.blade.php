<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.link')
</head>

<body>
    {{-- <div class="oleez-loader"></div> --}}
    <header class="oleez-header">
        @include('layouts.navbar')
    </header>

    <main class="contact-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Contact Us</h1>
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0 pr-lg-5 wow fadeInLeft">
                    <div class="embed-responsive embed-responsive-1by1">
                            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Jl.%20Sarijadi%20Raya%20No.132,%20Sarijadi,%20Kec.%20Sukasari,%20Kota%20Bandung,%20Jawa%20Barat%2040151,%20Indonesia+(Dhisan%20Atelier)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-md-6 pl-lg-5 wow fadeInRight">
                    <div class="alert alert-dismissible fade show in-alert d-none" style="background-color: #FCDF91" role="alert">
                        <strong>Terima Kasih!</strong> Pesan anda sudah terkirim <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                          </svg>
                        <button type="button" class="close align-middle" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <form action="POST" class="oleez-contact-form" name="dhisan-contact-form">
                        <div class="form-group">
                            <input type="text" class="oleez-input" id="fullName" name="nama" required>
                            <label for="fullName">Nama Lengkap</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="oleez-input" id="fullName" name="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea name="pesan" id="message" rows="5" class="oleez-textarea" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit btn-kirim">Kirim</button>
                        <div class="spinner-border spin-load d-none" style="width: 2rem; height: 2rem;" role="status">
                            <span class="sr-only">Memproses...</span>
                        </div>
                    </form>
                </div>
            </div>
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
    @include('layouts.script')
    <script>
        new WOW().init();
    </script>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyy6RYLtYIC48hkOQoUsB8GHMtpPvRw7ziStt0GNsBFbvsHL5LISSfO1UQ-_Rrdcmb4Kw/exec';
        const form = document.forms['dhisan-contact-form'];
        const btnKirim = document.querySelector('.btn-kirim');
        const spinLoad = document.querySelector('.spin-load');
        const myAlert = document.querySelector('.in-alert');
    
        form.addEventListener('submit', e => {
        e.preventDefault();
        //ketika tombol submit di klik
        //tampilkan spinner, hilangkan tombol kirim
        spinLoad.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                //ketika tombol submit di klik
                //tampilkan tombol kirim, hilangkan spinner
                spinLoad.classList.toggle('d-none');
                btnKirim.classList.toggle('d-none');
                //tampilkan alert
                myAlert.classList.toggle('d-none');
                //reset form
                form.reset();
                console.log('Success!', response);
            })
            .catch(error => console.error('Error!', error.message));
        });
    </script>
</body>

</html>