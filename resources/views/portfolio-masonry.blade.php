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

    <main class="portfolio-masonry-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Dhisan Gallery</h1>
            <div class="grid clearfix">
                <div class="grid-sizer"></div>
                <a href="assets/images/galery/Picture8.jpg" class="grid-item wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/galery/Picture8.jpg" alt="grid item">
                </a>
                <a href="assets/images/galery/Picture13.png" class="grid-item col-span-2 row-span-2 wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/galery/Picture13.png" alt="grid item">
                </a>
                <a href="assets/images/galery/Picture14.jpg" class="grid-item row-span-2 wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/galery/Picture14.jpg" alt="grid item">
                </a>
                <a href="assets/images/galery/Picture37.jpg" class="grid-item row-span-2 wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/galery/Picture37.jpg" alt="grid item">
                </a>
                <a href="assets/images/galery/Picture6.jpg" class="grid-item wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/galery/Picture6.jpg" alt="grid item">
                </a>
                <a href="assets/images/Masonary/banner-4.jpg" class="grid-item col-span-2 wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/Masonary/banner-4.jpg" alt="grid item">
                </a>
                <a href="assets/images/galery/Picture11.png" class="grid-item row-span-2 col-span-2 wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/galery/Picture11.png" alt="grid item">
                </a>
                <a href="aassets/images/galery/Picture22.jpg" class="grid-item row-span-2 wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/galery/Picture22.jpg" alt="grid item">
                </a>
                <a href="assets/images/galery/Picture30.jpg" class="grid-item wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/galery/Picture30.jpg" alt="grid item">
                </a>
                <a href="assets/images/galery/Picture21.jpg" class="grid-item wow fadeInUp" data-fancybox="masonry-gallery">
                    <img src="assets/images/galery/Picture21.jpg" alt="grid item">
                </a>
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

        $('.grid').masonry({
            // options...
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            gutter: 25,
            percentPosition: true
        });
    </script>
</body>
</html>