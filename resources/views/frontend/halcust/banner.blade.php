<!-- Slide1 -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url(images/banner/home1.jpg);">
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url(images/banner/home2.jpg);">
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url(images/banner/home3.jpg);">
            </div>

            {{-- @foreach ($banner as $item)
                <div class="item-slick1 item1-slick1">
                    <img src="{{ asset('images/banner/' . $item->gambar_banner) }}"/>
                </div>
            @endforeach --}}
            
        </div>
        <div class="wrap-slick1-dots"></div>
    </div>
</section>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-50 p-b-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-welcome t-center">
                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        MORFEEN THIRTEEN
                    </h3>
                    <a href="/about" class="txt4">
                        selanjutnya
                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-welcome size2 hov-img-zoom m-l-r-auto">
                    <img src="images/official.jpg" alt="IMG-OUR">
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
