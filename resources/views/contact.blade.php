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
                    <form action="POST" class="oleez-contact-form">
                        <div class="form-group">
                            <input type="text" class="oleez-input" id="fullName" name="fullName" required>
                            <label for="fullName">*Full name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" class="oleez-input" id="fullName" name="email" required>
                            <label for="email">*Email</label>
                        </div>
                        <div class="form-group">
                            <label for="message">*Message</label>
                            <textarea name="message" id="message" rows="10" class="oleez-textarea" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    @include('layouts.footer')

    <!-- Modals -->
    <!-- Off canvas social menu -->
    <nav id="offCanvasMenu" class="off-canvas-menu">
        <button type="button" class="close" aria-label="Close" data-dismiss="offCanvasMenu">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="oleez-social-menu">
            <li>
                <a href="#!" class="oleez-social-menu-link">Facebook</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Instagram</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Behance</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Dribbble</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Email</a>
            </li>
        </ul>
    </nav>
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
</body>

</html>