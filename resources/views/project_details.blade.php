@extends('layouts.master')
@section('title','Project detailsS')
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
                <li><span>Project Details</span></li>
            </ul>
            <h2>Project Details</h2>
        </div>
    </section>
    <section class="project-details">
        <div class="container">
            <img src="{{Voyager::image($item->image)}}" class="img-fluid w-100" alt="">
            <ul class="list-unstyled project-details__list">
                {{--<li>
<span>Date:
</span>
                    20 July, 2020
                </li>
                <li>
<span>Client:
</span>
                    Mike Hardson
                </li>
                <li>
 <span>Category:
</span>
                    Agriculture, Eco
                </li>
                <li>
<span>Service:
</span>
                    Organic Products
                </li>
            </ul>--}}
            <h2>{{$item->name}}</h2>
                <div class="bottom-content">
                   {!! $item->text !!}
               </div>
{{--            <p>
                Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia
                quaed
                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim
                var
                sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing
                and
                typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum
                Take
                a look at our round up of the best shows coming soon to your telly box has been the is industrys. When
                an
                unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
                was
                popularised in the 1960s with the release of Letraset sheets containing.
            </p>
            <div class="bottom-content">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Most important and challenging
                            facts about this project</h3>
                        <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim
                            var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                            simply dummy text of the printing and typesetting industry.</p>
                        <ul class="list-unstyled project-details__check-list">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Take a look at our round up of the best shows
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                It has survived not only five centuries
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Lorem Ipsum has been the ndustry standard dummy text
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-details__images">
                            <img src="assets/images/projects/project-d-2-1.jpg" alt="">
                            <img src="assets/images/projects/project-d-2-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </section>
@endsection
