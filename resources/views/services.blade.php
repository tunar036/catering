@extends('layouts.master')
@section('title','Service')
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
                <li><span>Xidmətlər</span></li>
            </ul>
            <h2>Bizim xidmətlər</h2>
        </div>
    </section>

    <section class="service-one service-one__about">
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__image"></div>
                <p>Our Services list</p>
                <h3>What We’re Doing</h3>
            </div>
            <div class="row">
                @foreach($items as $item)
                    <div class="col-md-12 col-lg-4">
                        <div class="service-one__box">
                            <img src="{{ Voyager::image( $item->image ) }}" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="{{route('service_details',$item->id)}}">{{$item->name}}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-3">
                {{ $items->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>

@endsection
