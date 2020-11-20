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
                            <h2>Gallery</h2>
                            <ul class="breadcrumbs ul--inline ul--no-style">
                                <li>
                                    <a href="{{route('web.index')}}">Home</a>
                                </li>
                                <span>|</span>
                                <li class="active">Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Navigation -->
      <!-- Lastest Project -->
      <section class="latest-project latest-project-4 p-tb-30">
        <div class="container">
          <div class="row no-gutters">
            @foreach($gallery as $value)
              <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="latest__item">
                  <img alt="Lastest Project 1" src="{{asset('images/gallery/'.$value->image)}}">
                  <a href="{{asset('images/gallery/'.$value->image)}}" data-lightbox="Lastest Project" class="overlay overlay--yellow overlay--invisible overlay--p-15">
                    <i class="zmdi zmdi-plus-circle-o"></i>
                  </a>
                </div>                  
              </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- End Lastest Project -->

@endsection

@section('script')
@endsection