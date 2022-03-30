@extends('layouts.master')
@section('title','Service details')
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
                <li><span>Service Details</span></li>
            </ul>
            <h2>Service Details</h2>
        </div>
    </section>
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="service-sidebar__links">
                            <ul>
                                @foreach($list as $service)
                                    <li><a href="{{route('service_details',$service->id)}}">{{$service->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{--                        <div class="service-sidebar__call">
                                                    <div class="service-sidebar__call-bg"
                                                         style="background-image: url(assets/images/services/service-widget-bg-1.jpg);"></div>

                                                    <h3>We sell best
                                                        agriculture
                                                        products</h3>
                                                </div>--}}
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{ Voyager::image( $item->image ) }}" alt="">
                    <h2>{{$item->title}}s</h2>
                    <p>{!!$item->text!!}</p>
                    {{--                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum
                                            quia
                                            quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port
                                            lacus
                                            quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy
                                            text
                                            of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text
                                            ever
                                            since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.</p>
                                        <ul class="service-details__list list-unstyled">
                                            <li>
                                                <i class="agrikon-icon-right-arrow"></i>
                                                <strong>It has survived not only five centuries.</strong> Lorem Ipsum is simply dummy text
                                                of
                                                the new design printng and type setting Ipsum take a look at our round.
                                            </li>
                                            <li>
                                                <i class="agrikon-icon-right-arrow"></i>
                                                <strong>It has survived not only five centuries.</strong> Lorem Ipsum is simply dummy text
                                                of
                                                the new design printng and type setting Ipsum take a look at our round.
                                            </li>
                                        </ul>
                                        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                            has
                                            survived not only five centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged. </p>
                                        <div class="special-box">Lorem Ipsum has been the ndustry stan when an
                                            unknown printer took a galley.
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="assets/images/services/service-d-1-2.jpg" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <h4>More Benefits</h4>
                                                <ul class="list-unstyled service-details__list-2">
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        Nsectetur cing elit
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        Suspe ndisse suscipit sagittis leo
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        Entum estibulum dignissim posuere
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        If you are going to use a passage
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        Lorem Ipsum gene on the tend to repeat
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae
                                            dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet
                                            finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum
                                            has been the ndustry stan when an unknown printer took a galley.</p>--}}
                </div>
            </div>
        </div>
    </section>

@endsection
