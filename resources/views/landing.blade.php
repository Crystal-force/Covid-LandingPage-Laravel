
  @extends('layout.index')

  @section('content')

<style>
  .invalid-feedback {
    display: block;
    color:red;
  }
</style>
<!-- Start Nav Section -->
<nav id="main-nav" class="nav-down top-head" >

    <div id="nav-color" class="gradient-color"></div>

    <div class="nav-wrapper">

        <!-- Add your Logo and Name here -->
        <a class="brand-logo design-font waves-effect waves-light no-bg" data-scroll-nav="0" href="#">
            <img class="responsive-img logo" src="image/logo.png" alt="" >
            <img class="responsive-img title" src="image/title.png" alt="" style="width:25%">
        </a>
        <ul class="right hide-on-med-and-down">
          <li>
            <a href="mailto:info@anaheim.cloud" class="slogan z-depth-1 hoverable waves-effect waves-light atag-under" style="color:aqua; height:6vh"><i class="far fa-envelope" style="padding-right:10px"></i>info@anaheim.cloud</a>
          </li>
          <li>
              <!--Main Menu Social Icons-->
              <div class="fixed-action-btn click-to-toggle">
                  <a class="btn-floating btn-large waves-effect waves-light grey darken-4">
                      <div class="ham-cont">
                      <div class="very_small_hamburger" id="social-hamburger">
                          <svg viewBox="0 0 800 600">
                              <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                              <path d="M300,320 L540,320" class="middle"></path>
                              <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                          </svg>
                      </div>
                   </div>
                  </a>
                  <ul>
                    <!-- Facebook Link -->
                    <li>
                        <a href="mailto:info@anaheim.cloud" class="btn-floating waves-effect waves-light blue atag-under" >
                            <i class="far fa-envelope"></i>
                        </a>
                    </li>
                    <!-- Twitter Link -->
                    <li>
                        <a href="https://lin.ee/msacXYU" class="btn-floating waves-effect waves-light light-blue lighten-2 atag-under">
                            <i class="fab fa-line"></i>
                        </a>
                    </li>
                    <!-- Instagram Link -->
                    <li>
                        <a href="tel:0904-408-0001" class="btn-floating waves-effect waves-light amber darken-3" >
                            <i class="fas fa-phone-alt"></i>
                        </a>
                    </li>
                  </ul>
              </div>
          </li>
      </ul>
    </div>

</nav>
<!-- End Nav Section-->

<!-- Start Header Section-->
<header id="main-header" class="header-img-position" data-scroll-index="0" style="background: url('image/home-bg.jpg') center fixed;">
    <div class="video hide-on-small-and-down"></div>
    <div class="overlay "></div>
    <div class="header-section container">
        <div class="header-text">
            <div>
                <!-- Your App name -->
                <div class="main-title">
                    <img class="responsive-img" src="image/title.png" alt="title image" style="display: block">
                </div>
                <!-- App Main Description -->
                <p class="description">COVID-19は、最近発見されたコロナウイルスによって引き起こされる感染症です。この新しいウイルスと病気は、2019年12月に中国の武漢で発生が始まる前は不明でした。</p>
                <!-- App Slogan -->
                <a href="mailto:info@anaheim.cloud" class="slogan z-depth-1 hoverable waves-effect waves-light email-btn atag-under"><i class="fas fa-envelope" style="padding-right:10px"></i>Email アドレス</a>
                <a href="https://lin.ee/msacXYU"  class="slogan z-depth-1 hoverable waves-effect waves-light line-btn atag-under"><i class="fab fa-line" style="padding-right:10px"></i>Line 連結</a>
            </div>
        </div>
        <div class="owl-carousel owl-header">
            <!-- Mobiles Image-->
            <img class="responsive-img" src="image/app-1.png" alt="">
            <img class="responsive-img" src="image/app-3.png" alt="">
            <img class="responsive-img" src="image/app-5.png" alt="">
            <img class="responsive-img" src="image/app-6.png" alt="">
        </div>
    </div>
</header>
<!-- End Header Section-->

<!-- Start About Section-->
<section id="about-us" class="main-section center-align section-color" data-scroll-index="7" >
    <div class="container">
        <!--Title-->
        <h2 class="reflection-text p-b-2 what-covid">コロナウイルス疾患は何ですか？</h2>
        <!-- Description -->
        <p class="p-t-1 desc what-content">コロナウイルスは、風邪から中東呼吸器症候群や重症急性呼吸器症候群などのより重篤な疾患まで、さまざまな病気を引き起こすウイルスの大きなファミリーです。 2019-nCoVは、これまでにヒトで特定されていない新しい株であり、COVID19 /コロナウイルス病を引き起こします。</p>
    </div>
</section>
<!-- End About Section-->

<!-- Start Features Section-->
<section id="features" data-scroll-index="1" class="main-section center-align">
    <div class="gradient-color overlay"></div>
    <div class="container">
        <!--Title-->
        <h2 class="reflection-text reflection-text-white p-b-2">特 &nbsp;&nbsp;徴</h2>
        <div class="row p-t-2">
            <div class="col s12 m12 l4 p-tb-1 feature-left">
                <div class="single-feature p-tb-2 feature-part">
                    <a class="hoverable feature-link same-height active" data-owl-item="0">
                        <!--Title -->
                        <div>
                            <h5>乾いた咳</h5>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, nisi!</p> -->
                        </div>
                        <!-- Icon -->
                        <div>
                            <i class="fa fa-rocket waves-effect waves-light" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>

                <div class="single-feature p-tb-2 feature-part">

                    <a class="hoverable feature-link same-height" data-owl-item="1">
                        <!-- Title -->
                        <div>
                            <h5>喉の痛み</h5>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, nisi!</p> -->
                        </div>
                        <div>
                            <i class="fa fa-lightbulb-o waves-effect waves-light" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
                <div class="single-feature p-tb-2 feature-part">
                    <a class="hoverable feature-link same-height" data-owl-item="2">
                        <div>
                            <h5>コールド</h5>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, nisi!</p> -->
                        </div>
                        <div>
                            <i class="fa fa-heartbeat waves-effect waves-light" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col push-m3 push-s3 s6 m6 l4 p-tb-1 images-slider">
                <div class="owl-carousel owl-features">
                    <div>
                        <img class="responsive-img" src="image/app-1.png" alt="image of the iPhone app">
                    </div>
                    <div>
                        <img class="responsive-img" src="image/app-2.png" alt="image of the iPhone app">
                    </div>
                    <div>
                        <img class="responsive-img" src="image/app-3.png" alt="image of the iPhone app">
                    </div>
                    <div>
                        <img class="responsive-img" src="image/app-4.png" alt="image of the iPhone app">
                    </div>
                    <div>
                        <img class="responsive-img" src="image/app-7.png" alt="image of the iPhone app">
                    </div>
                    <div>
                        <img class="responsive-img" src="image/app-6.png" alt="image of the iPhone app">
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4 p-tb-1 feature-right">
                <div class="single-feature p-tb-2 feature-part">
                    <a class="hoverable feature-link same-height" data-owl-item="3">
                        <div>
                            <i class="fa fa-eye waves-effect waves-light" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h5>発&nbsp;&nbsp;熱</h5>
                        </div>
                    </a>
                </div>
                <div class="single-feature p-tb-2 feature-part">
                    <a class="hoverable feature-link same-height" data-owl-item="4">
                        <!-- Icon -->
                        <div>
                            <i class="fa fa-code waves-effect waves-light" aria-hidden="true"></i>
                        </div>
                        <div>
                            <h5>頭 &nbsp;&nbsp;痛</h5>
                            <!-- <p>Lorem ipsum dolor sit</p> -->
                        </div>
                    </a>
                </div>

                <div class="single-feature p-tb-2 feature-part">
                    <a class="hoverable feature-link same-height" data-owl-item="5">
                        <!-- Icon -->
                        <div>
                            <i class="far fa-tired waves-effect waves-light" aria-hidden="true"></i>
                        </div>
                        <div>
                            <!-- Title -->
                            <h5>嘔 &nbsp;&nbsp;吐</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End Features Section-->
<section id="showcase" class="main-section">
  <!-- Overlay Color -->
  <div class="gradient-color overlay"></div>
  <div class="container">
      <!--Title-->
      <h2 class="reflection-text p-b-2">Covid-19アプリについて</h2>
      <!-- Description -->
      <div class="row p-tb-3">
          <!-- Single Show Case -->
          <div class="col s12 l6" data-aos="fade-right" data-aos-delay="100">
              <!-- Small Title -->
              <h5 class="p-b-1">リアルタイムなコロナ情報。</h5>
              <p>私たちの暖かい情と生活を図り、そして誰も利便性を最大確保するため、改善された性能であなたに示しています</p>
              <div class="info guide-text">
                  <div>
                      <div>
                          <i class="fa fa-bell gradient-color" aria-hidden="true"></i>
                      </div>
                  </div>
                  <div>
                      <h6>リアルタイムなコロナ情報。</h6>
                  </div>
              </div>
              <div class="info guide-text">
                  <div>
                      <div>
                          <i class="fa fa-book gradient-color" aria-hidden="true"></i>
                      </div>
                  </div>
                  <div>
                      <h6>強力なコロナの予防、対策</h6>
                  </div>
              </div>
              <div class="info guide-text">
                  <div>
                      <div>
                          <i class="fa fa-binoculars gradient-color" aria-hidden="true"></i>
                      </div>
                  </div>
                  <div>
                      <h6>シンプルで便利なコロナ検索機能。</h6>
                  </div>
              </div>
              <div class="info guide-text">
                  <div>
                      <div>
                          <i class="fa fa-cubes gradient-color" aria-hidden="true"></i>
                      </div>
                  </div>
                  <div>
                      <h6>英語、韓国語、中国語をはじめ多言語バージョン。</h6>
                  </div>
              </div>
              <div class="info guide-text">
                <div>
                    <div>
                        <i class="fa fa-lightbulb-o gradient-color" aria-hidden="true"></i>
                    </div>
                </div>
                <div>
                    <h6>日本で初めてのCovid-19モバイルアンドロイド。</h6>
                </div>
            </div>
          </div>
          <div class="col s12 l6 center-align" data-aos="fade-left" data-aos-delay="200">
              <!--Images-->
              <img src="image/phone-1.png" alt="" >
          </div>
      </div>
  </div>
</section>
<!-- Start Download Section-->
<section id="download" data-scroll-index="3" class="main-section header-img-position" style="background: url('image/about-2.jpg') center fixed; width:100%">
  <!-- Overlay Color -->
  <div class="gradient-color overlay"></div>
  <div class="container">
      <!--Title-->
      <h2 class="reflection-text reflection-text-white p-b-2">アプリの入手方法は？</h2>
      <!-- Description -->
      <p class="p-t-1 desc">新しいCovidアプリが完成しました。このアプリはいつでも簡単に入手できます。下記のようにご利用ください。</p>
      <div class="row p-t-2">
          <div class="col s12 l9">
              <!-- Link to download on the Apple store -->
              <a href="mailto:info@anaheim.cloud" class="m-t-1 grey darken-4 waves-effect waves-light email-link-btn" >
                  <span class="big-icon">
                      <i class="fas fa-envelope"></i>
                  </span>
                  <span class="text">
                      <small>使用可能</small><br> 
                  </span>
              </a>
              <!-- Link to download on the Google store -->
              <a href="https://lin.ee/msacXYU" class="m-t-1 grey darken-4 waves-effect waves-light line-link-btn">
                  <span class="big-icon">
                      <i class="fab fa-line"></i>
                  </span>
                  <span class="text">
                      <small>使用可能</small><br> 
                  </span>
              </a>
              <!-- Link to download on the Windows store -->
              <a href="tel:0904-408-0001"  class="m-t-1 grey darken-4 waves-effect waves-light" style="color: #79d3f7 !important; text-decoration: none;">
                  <span class="big-icon">
                      <i class="fas fa-phone-alt"></i>
                  </span>
                  <span class="text">
                      <small>0904-408-0001</small><br> 
                  </span>
              </a>
          </div>
          <!-- Iphone Image on right -->
          <div class="col s12 l3 hide-on-med-and-down"  data-aos="fade-left" data-aos-delay="100">
              <img class="responsive-img" src="image/app-8.png" alt="" style=" width: 60%;">
          </div>
      </div>
  </div>

</section>
<!-- End Download Section-->

<!-- Start Screenshot Section-->
<section id="screenshot" data-scroll-index="2" class="main-section center-align">
    <div class="container">
        <!--Title-->
        <div class="carousel">
            <div class="carousel-item">
                <!-- Link to the image to open in full screen when clicked with lity plugin -->
                <a href="image/app-1.png" data-lity>
                    <!-- Screenshot Image -->
                    <img class="responsive-img" src="image/app-1.png" alt="mobile mockup image">
                </a>
            </div>
            <div class="carousel-item">
                <!-- Link to the image to open in full screen when clicked with lity plugin -->
                <a href="image/app-2.png" data-lity>
                    <!-- Screenshot Image -->
                    <img class="responsive-img" src="image/app-2.png" alt="mobile mockup image">
                </a>
            </div>
            <div class="carousel-item">
                <!-- Link to the image to open in full screen when clicked with lity plugin -->
                <a href="image/app-3.png" data-lity>
                    <!-- Screenshot Image -->
                    <img class="responsive-img" src="image/app-3.png" alt="mobile mockup image">
                </a>
            </div>

            <div class="carousel-item">
                <!-- Link to the image to open in full screen when clicked with lity plugin -->
                <a href="image/app-4.png" data-lity>
                    <!-- Screenshot Image -->
                    <img class="responsive-img" src="image/app-4.png" alt="mobile mockup image">
                </a>
            </div>
            <div class="carousel-item">
                <!-- Link to the image to open in full screen when clicked with lity plugin -->
                <a href="image/app-5.png" data-lity>
                    <!-- Screenshot Image -->
                    <img class="responsive-img" src="image/app-5.png" alt="mobile mockup image">
                </a>
            </div>
        </div>

        <!-- Navigation arrows to be hidden on small and medium screens -->
        <div class="navigation" id="screenshot-navigation">
            <div class="nav-prev" id="screenshot-prev">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="nav-next" id="screenshot-next">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>

</section>
<!-- End Screenshot Section-->

  <!-- Start Video Section-->
<section id="video" class="main-section center-align video-section" style="padding:20px; margin-bottom: 50px;">
  <div class="gradient-color overlay"></div>
  <div class="container">
      <h2 class="reflection-text reflection-text-white p-b-2">ビデオを見る</h2>
      <div class="embed-responsive embed-responsive-16by9">
        <video controls preload="none" poster="image/video-screen.png" >
          <source src="image/20200320_131758.mp4" type=video/mp4>
        </video>
      </div>
  </div>

</section>
<!-- End Video Section-->


<!-- Start Team Section-->
<section id="team" >
    <div class="container">
        <!--Title-->
        <h2 class="reflection-text p-b-2">新しいCovidアプリが完成しました.</h2>
        <!-- Description -->
        <!-- Owl Team Slider -->
        <div class="p-t-2 grid center-align owl-carousel owl-teams">
            <!-- Single Team Container -->
            <div class="team-member m-tb-2 z-depth-2 hoverable">
                <figure>
                    <img class="responsive-img blog-img" src="image/img-1.png" alt="news image">
                </figure>
                <div class="name p-b-1">
                    <a href="#">
                        <h5 class="team-name gradient-color waves-effect waves-light">地域別分布</h5>
                    </a>
                    <!-- Team Member Job -->
                </div>
            </div>
            <div class="team-member m-tb-2 z-depth-2 hoverable">
                <figure>
                    <img class="responsive-img blog-img" src="image/img-2.png" alt="news image">
                </figure>
                <div class="name p-b-1">
                    <a href="#">
                        <h5 class="team-name gradient-color waves-effect waves-light">視覚図表サポート</h5>
                    </a>
                    <!-- Team Member Job -->
                </div>
            </div>
            <div class="team-member m-tb-2 z-depth-2 hoverable">
                <figure>
                    <img class="responsive-img blog-img" src="image/img-3.png" alt="news image">
                </figure>
                <div class="name p-b-1">
                    <a href="#">
                        <h5 class="team-name gradient-color waves-effect waves-light">有用な知識の助け</h5>
                    </a>
                    <!-- Team Member Job -->
                </div>
            </div>
            <!-- Single Team Container -->
            <div class="team-member m-tb-2 z-depth-2 hoverable">
                <figure>
                    <img class="responsive-img blog-img" src="image/img-4.png" alt="news image">
                </figure>
                <div class="name p-b-1">
                    <a href="#">
                        <h5 class="team-name gradient-color waves-effect waves-light">多国を選択</h5>
                    </a>
                    <!-- Team Member Job -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section-->
<!-- Start FAQs Section-->
<section id="faq" data-scroll-index="6" class="main-section" style="padding-bottom:450px">
    <div class="container">
        <!--Title-->
        <h2 class="reflection-text p-b-2">よくある質問</h2>
        <!-- Description -->
        <div class="row p-t-3 faq-main">
            <div class="col s6 push-s4 m3 push-m2 l4 push-l1 faq-image" data-aos="fade-right" data-aos-delay="200">
                <!-- FAQ Image -->
                <div>
                    <img class="responsive-img" src="image/app-10.png" alt="" style="width: 60%;">
                    <img class="responsive-img absolute-image" src="image/app-9.png" alt="" style="width: 60%;">
                </div>
            </div>
            <div class="col s12 m6 push-m2 l7 push-l1 collapsible-container" data-aos="fade-left" data-aos-delay="100">
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <!-- Question -->
                        <div class="collapsible-header active gradient-color waves-effect waves-light">
                            <i class="fa fa-comment" aria-hidden="true"></i>
                            <span>なぜこれがとても素晴らしいアプリなのか！</span>
                        </div>
                        <!-- Answer -->
                        <div class="collapsible-body">
                            <span>便宜上一度でも。それらのどれも何も選択されていません。大湯なく、ユーザーに便利最大保証よ！</span>
                        </div>
                    </li>
                    <li>
                        <!-- Question -->
                        <div class="collapsible-header gradient-color waves-effect waves-light">
                            <i class="fa fa-comment" aria-hidden="true"></i>
                            <span>友達を招待して割引を受けることができますか？</span>
                        </div>
                        <!-- Answer -->
                        <div class="collapsible-body">
                            <span>私たちのいずれかを選択すると仮定！説明しやすい結果を取得します。</span>
                        </div>
                    </li>
                    <li>
                        <!-- Question -->
                        <div class="collapsible-header gradient-color waves-effect waves-light">
                            <i class="fa fa-comment" aria-hidden="true"></i>
                            <span>大変難しいこと、ご理解の難しさ。</span>
                        </div>
                        <!-- Answer -->
                        <div class="collapsible-body">
                            <span>アプリは大変な労働力が良くないサービスだが、多くの場合、真実に到達します。</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End FAQs Section-->

<!-- Start Footer Section-->
<section id="footer" class="main-section center-align gradient-color">
    <div class="footer-main">
        <div class="main-section" style="background-color:#cbf5ff">
            <div class="container">
                <!--Title-->
                <h2 class="reflection-text p-b-2">お問い合わせ</h2>
                <div class="contact-container">
                    <!-- Contact Form -->
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                    @endif
                    <form method="post" action="/contact" style="width:65%">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label class="contact-font">フルネーム</label>
                        <input type="text" class="form-control" name="name">
                        @if($errors->has('name'))
                        <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="contact-font">Eメール</label>
                        <input type="text" class="form-control" name="email">
                        @if($errors->has('email'))
                        <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="contact-font">主題</label>
                        <input type="text" class="form-control" name="subject">
                        @if($errors->has('subject'))
                        <small class="form-text invalid-feedback">{{$errors->first('subject')}}</small>
                        @endif
                      </div>
                      <div class="form-group" >
                        <label class="contact-font">メッセージ</label>
                        <textarea name="message" class="form-control" rows="7" style="height:200px; padding:20px"></textarea>
                        @if($errors->has('message'))
                        <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
                        @endif
                      </div>
                      <button class="btn btn-primary contact-btn contact-btn">参加する</button>
                    </form>

                    <div class="address" style="padding-left:100px">
                        <!-- Your Phone Number -->
                        <p class="p-b-1">
                            <i class="address-icon fa fa-phone"></i>
                            <a href="tel:0904-408-0001" class="atag-under"> 0904-408-0001</a>
                        </p>
                        <!-- Your Email -->
                        <p class="p-b-1">
                            <i class="address-icon fa fa-paper-plane" aria-hidden="true"></i>
                            <a href="mailto:info@anaheim.cloud" class="atag-under">info@anaheim.cloud</a>
                        </p>
                        <!-- Your Social Network Links-->
                        <div class="social-icons p-b-1">
                            <!-- Facebook -->
                            <a href="#" class="atag-under">
                                <i class="far fa-envelope waves-effect waves-light  blue"></i>
                            </a>
                            <!-- Twitter -->
                            <a href="#" class="atag-under"> 
                                <i class="fab fa-line waves-effect waves-light  light-blue lighten-2"></i>
                            </a>
                            <!-- Instagram -->
                            <a href="#" class="atag-under">
                                <i class="fas fa-phone-alt waves-effect waves-light  amber darken-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area -->
        <div class="footer-content p-t-3 left-align">
            <div class="container">
                <div class="row">
                    <div class="about col s12 m6 l3">
                        <!-- Your Logo -->
                        <img class="responsive-img logo" src="image/logo.png" alt="logo image">
                        <br>
                        <!-- Your Title -->
                        <img class="responsive-img title" src="image/title.png" alt="">
                        <!-- Your Info -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End Footer Section-->
<!-- Start Copy Rights Section-->
<div id="copy-rights" class="col s12">
    <div class="container">
        <!-- Your Copy Right -->
        <p>Copyright &copy; 2020 Covid-19 | アプリのランディングページ <a href="#">Crystal team</a></p>
    </div>
</div>
<!-- End Copy Rights Section-->
@endsection
