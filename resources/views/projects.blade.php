@extends('layouts.master')
@section('title','Projects')
@section('content')

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
    </div>
    <section class="page-header">
        <div class="page-header__bg"
             style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>

        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li>/</li>
                <li><span>Projects</span></li>
            </ul>
            <h2>Projects</h2>
        </div>
    </section>
    <div class="projects-one">
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="projects-one__single">
                            <img src="{{Voyager::image($item->image)}}" alt="">
                            <div class="projects-one__content">
                                <h3>{{$item->name}}</h3>
                                <a href="{{route('project_details',$item->id)}}" class="projects-one__button"><i
                                        class="agrikon-icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
