
@extends('layouts.master')
@section('title','About')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
    </div>
    <section class="page-header">
        <div class="page-header__bg"
             style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>

        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Ana səhifə</a></li>
                <li>/</li>
                <li><span>Haqqımızda</span></li>
            </ul>
            <h2>Haqqımızda</h2>
        </div>
    </section>

    <section class="about-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-three__image">
                        <img src="{{Voyager::image($about->image)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-three__content">
                        <div class="block-title">
{{--                            <div class="block-title__image"></div>--}}
{{--                            <p>Get to know us</p>--}}
                            <h3>{{$about->title}}</h3>
                        </div>
                        {!! $about->text !!}
{{--                        <ul class="about-three__list list-unstyled">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Suspe ndisse suscipit sagittis
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                If you are going to a passage
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Entum estibulum dignissim
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Entum estibulum dignissim
                            </li>
                        </ul>
                        <div class="about-three__summery">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed deiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Donec scelerisque dolor id nunc dictum, interdum. </p>
                        </div>
                        <div class="about-three__signs">
                            <img src="assets/images/resources/about-3-1.png" alt="">
                            <img src="assets/images/resources/sign-1-1.png" alt="">
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
