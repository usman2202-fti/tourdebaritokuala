@extends('../template')
@section('body')

<section class="home-section home-full-height bg-dark-30" id="home" data-background="{{ asset('asset/assets/images/jembatan.jpg')}}">
      <!--<div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=JJ5joNOG8QQ', containment:'.home-section', startAt:1, mute:false, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>-->
      <!--<div class="video-controls-box">-->
      <!--  <div class="container">-->
      <!--    <div class="video-controls"><a class="fa fa-volume-up" id="video-volume" href="#">&nbsp;</a><a class="fa fa-pause" id="video-play" href="#">&nbsp;</a></div>-->
      <!--  </div>-->
      <!--</div>-->
      <div class="titan-caption">
        <div class="caption-content">
          <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
          <div class="font-alt mb-40 titan-title-size-4">Tour de Barito Kuala</div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
        </div>
      </div>
    </section>
    <div class="main">
      <section class="module" id="alt-features">
        <div class="container">
            <div class="row">
              <br><br>
              <div class="module-subtitle font-serif">
                <h1><b></b>Pandaftaran ditutup Hari Rabu Tanggal 25 Oktober 2023 Pukul 23.59 Wita</b></h1>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <img src="{{ asset('asset/assets/images/logo.png') }}" alt="Tour de Barito Kuala 2023" align="center">
              <div class="module-subtitle font-serif"><h2>Disporbudpar Kabupaten Barito Kuala</h2></div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
              
            </div>
            <div class="col-md-6 col-lg-6" id="about">
                <div class="alt-services-image align-center"><img src="{{ asset('asset/assets/images/banner-0.png') }}" alt="Tour de Barito Kuala 2023"></div>
              <br>
              <div class="alt-services-image align-center"><img src="{{ asset('asset/assets/images/banner.jpg') }}" alt="Tour de Barito Kuala 2023"></div>
              <br>
              <div class="alt-services-image align-center"><img src="{{ asset('asset/assets/images/banner-funbike.jpeg') }}" alt="Tour de Barito Kuala 2023"></div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              
            </div>
          </div>
        </div>
      </section>
      <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="{{ asset('') }}asset/assets/images/jembatan.jpg">
        <div class="testimonials-slider pt-140 pb-140">
          <ul class="slides">
            <li>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="module-icon"><span class="icon-quote"></span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <blockquote class="testimonial-text font-alt">Life is like riding a bicycle. To keep your balance, you must keep moving.</blockquote>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-4">
                    <div class="testimonial-author">
                      <div class="testimonial-caption font-alt">
                        <div class="testimonial-title">Albert Einsten</div>
                        <div class="testimonial-descr"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="module-icon"><span class="icon-quote"></span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <blockquote class="testimonial-text font-alt">Doa itu seperti kayuhan sepeda, semakin sering dipanjatkan maka semakin dekat dengan tujuan.</blockquote>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-4">
                    <div class="testimonial-author">
                      <div class="testimonial-caption font-alt">
                        <div class="testimonial-title">Anonym</div>
                        <div class="testimonial-descr"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="module-icon"><span class="icon-quote"></span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
                    <blockquote class="testimonial-text font-alt">Bersepeda... Ketika tanjakan, nikmati sehatnya. Ketika turunan, syukuri segarnya.</blockquote>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-4">
                    <div class="testimonial-author">
                      <div class="testimonial-caption font-alt">
                        <div class="testimonial-title">Anonym</div>
                        <div class="testimonial-descr"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="module pb-0" id="works">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Wonderful Batola</h2>
              <div class="module-subtitle font-serif"></div>
            </div>
          </div>
        </div>
        <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
          <li class="work-item"><a href="#">
            <div class="work-image"><img src="{{ asset('') }}asset/assets/images/Jembatan Rumpiang (New).jpeg" alt="Portfolio Item"/></div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Jembatan Rumpiang</h3>
            </div></a></li>
            <li class="work-item"><a href="#">
              <div class="work-image"><img src="{{ asset('') }}asset/assets/images/pulau-kembang.jpg" alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Pulau Kembang</h3>
              </div></a></li>
              <li class="work-item"><a href="#">
                <div class="work-image"><img src="{{ asset('') }}asset/assets/images/jembatan-barito-di-banjarmasin-kalimantan-selatan.jpg" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title">Jembatan Barito</h3>
                </div></a></li>
                <li class="work-item"><a href="#">
                  <div class="work-image"><img src="{{ asset('') }}asset/assets/images/bahalap.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Marabahan</h3>
                  </div></a></li>
                  <li class="work-item"><a href="#">
                    <div class="work-image"><img src="{{ asset('') }}asset/assets/images/pulau-bakut.jpg" alt="Portfolio Item"/></div>
                    <div class="work-caption font-alt">
                      <h3 class="work-title">Pulau Bakut</h3>
                    </div></a></li>
                    <li class="work-item"><a href="#">
                      <div class="work-image"><img src="{{ asset('') }}asset/assets/images/siring.jpg" alt="Portfolio Item"/></div>
                      <div class="work-caption font-alt">
                        <h3 class="work-title">Ulek Marabahan</h3>
                      </div></a></li>
                    </ul>
                  </section>      
@endsection              