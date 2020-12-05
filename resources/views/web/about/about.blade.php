@extends('web.templete.master')

@section('seo')
<meta name="description" content="InteriorLife">
@endsection

@section('content')

    <!-- Navigation -->
    <section class="navigation">
        <div class="parallax parallax--nav-2">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-item">
                            <h2>About</h2>
                            <ul class="breadcrumbs ul--inline ul--no-style">
                                <li>
                                    <a href="{{route('web.index')}}">Home</a>
                                </li>
                                <span>|</span>
                                <li class="active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Navigation -->
    <!-- We Are -->
    <section class="we-are">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="we-are__left">
                        <div class="top">
                            <div class="we-are__item">
                                <img alt="We Are 1" src="{{asset('web/img/we-are-01.jpg')}}">
                            </div>
                            <div class="we-are__item">
                                <img alt="We Are 2" src="{{asset('web/img/we-are-02.jpg')}}">
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="we-are__item">
                                <img alt="We Are 3" src="{{asset('web/img/we-are-03.jpg')}}">
                            </div>
                            <div class="we-are__item">
                                <img alt="We Are 4" src="{{asset('web/img/we-are-06.jpg')}}">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="we-are__right">
                        <h2>InteriorLife</h2>
                        <h2 class="title--small" style="color: #ee3535;">A Complete Home Solution</h2>
                        <p class="m-b-10">
                          InteriorLife is an interior designing firmwhich helps you to bring creative and stylishdesigns for your  humble abode. We with our teams of consultants,  designers, wholesale distributors, supervisors,  workers and labour,  provides you an one stop solution in making your dream house a reality. We not only help you in maximum utilization of  your space but also beautification of your home with customize, stylish and new designed furniturewith a large options of laminates that will enhance the beauty of your home.  Because love is where home is and here we are to help you make your dream home a reality with all the modern facilities within best and affordable price. 
                        </p>
                    </div>
                </div>
              </div>
        </div>
    </section>
    <!-- End we are -->
@endsection

@section('script')
@endsection