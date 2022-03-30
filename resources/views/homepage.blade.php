@extends('layouts.master')
@section('title','Homepage')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
    </div>
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url({{Voyager::image($slider->image)}})center/cover;">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7">
{{--                                <span class="tagline">Welcome to Agriculture Farm</span>--}}
                                <h2><span>{{$slider->title}}</span></h2>
                                <p>{{$slider->text}}</p>
                                <a href="{{$slider->link}}" class=" thm-btn">Ətraflı</a>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                        class="agrikon-icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                        class="agrikon-icon-right-arrow"></i></div>
            </div>
        </div>
    </section>
    <section class="service-one">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="{{Voyager::image($service->image)}}" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="{{route('service_details',$service->id)}}">{{$service->name}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="about-one">
        <img src="assets/images/icons/about-bg-icon-1-1.png" class="about-one__bg-shape-1" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-one__images">
                        <img
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.jimcdn.com%2Fapp%2Fcms%2Fimage%2Ftransf%2Fdimension%3D1920x10000%3Aformat%3Djpg%2Fpath%2Fs031129f2de43f01b%2Fimage%2Fi1be447985758b4ef%2Fversion%2F1573753146%2Fimage.jpg&f=1&nofb=1"
                            alt="">
                        <img
                            src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fdaily.sevenfifty.com%2Fapp%2Fuploads%2F2018%2F08%2FSFD_Cocktail_Catering_1_CR_Courtesy_The_Cup_Bearer_2520x1420.jpg&f=1&nofb=1"
                            alt="">
                        <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                            <span>Trusted by</span>
                            <h4>8900</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-one__content">
                        <div class="block-title text-left">
                            <div class="block-title__image"></div>
                            <p>Welcome to agricon</p>
                            <h3>Better Catering for
                                Better Future</h3>
                        </div>
                        <div class="about-one__tagline">
                            <p>We have 30 years of agriculture & eco farming experience globaly</p>
                        </div>
                        <div class="about-one__summery">
                            <p>There are many variations of passages of lorem ipsum available but the majority have
                                suffered
                                alteration in some form by injected humor or random word which don't look even.</p>
                        </div>
                        <div class="about-one__icon-row">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="about-one__box">
                                        <i class="fa fa-utensils"></i>
                                        <h4><a href="about.html">Professional
                                                Team</a></h4>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-one__box">
                                        <i class="agrikon-icon-agriculture"></i>
                                        <h4><a href="services.html">Organic & Eco
                                                Products</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="about.html" class="thm-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-two">
        <div class="service-two__bottom-curv"></div>
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__image"></div>
                <p>Our Services list</p>
                <h3>What We’re Offering</h3>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img
                                src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.oFRL2Wcbqi5Tac_yX8MjPwHaE7%26pid%3DApi&f=1"
                                alt="">
                        </div>
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="fa fa-utensil-fork"></i>
                            </div>
                            <h3><a href="service-details.html">Agriculture Products</a></h3>
                            <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="assets/images/services/service-2-2.jpg" alt="">
                        </div>
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-organic-food"></i>
                            </div>
                            <h3><a href="service-details.html">Oragnic
                                    Products</a></h3>
                            <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img
                                src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.xOUIjZCPPSS3o2dLHXIwAwHaE8%26pid%3DApi&f=1"
                                alt="">
                        </div>
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-vegetable"></i>
                            </div>
                            <h3><a href="service-details.html">Fresh
                                    Vegetables</a></h3>
                            <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img
                                src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.6ABzeIDaX1Jd699py9Z4KQHaE7%26pid%3DApi&f=1"
                                alt="">
                        </div>
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-dairy"></i>
                            </div>
                            <h3><a href="service-details.html">Dairy
                                    Products</a></h3>
                            <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-one">
        <img src="assets/images/icons/testimonials-bg-1-1.png" class="testimonials-one__bg" alt="">
        <div class="container">
            <h2 class="testimonials-one__title">Testimonials</h2>
            <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s
                            throughly
                            refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure
                            dolor in
                            reprehenderit in esse nulla pariatur.</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s
                            throughly
                            refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure
                            dolor in
                            reprehenderit in esse nulla pariatur.</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s
                            throughly
                            refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure
                            dolor in
                            reprehenderit in esse nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div id="testimonials-one__thumb" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="assets/images/resources/testimonials-1-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="assets/images/resources/testimonials-1-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="assets/images/resources/testimonials-1-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Jessica Brown</h4>
                            <span>Customer</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Caleb Hoffman</h4>
                            <span>Customer</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Bradley Kim</h4>
                            <span>Customer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
        </div>
    </section>
    <section class="contact-two">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                    <div class="contact-two__image">
                        <div class="contact-two__image-bubble-1"></div>
                        <div class="contact-two__image-bubble-2"></div>
                        <div class="contact-two__image-bubble-3"></div>
                        <img src="assets/images/resources/contact-1-1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                    <div class="contact-two__content">
                        <div class="block-title">
                            <div class="block-title__image"></div>
                            <p>Contact now</p>
                            <h3>Leave Us A
                                Message</h3>
                        </div>
                        <div class="contact-two__summery">
                            <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua lonm andhn. Aenean tincidunt id mauris id auctor. Donec
                                at
                                ligula lacus dignissim mi quis simply neque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <form action="https://ninetheme.com/themes/html-templates/agrikon/assets/inc/sendemail.php"
                          class="contact-one__form contact-form-validated">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" placeholder="Full Name">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Write Message"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="thm-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
