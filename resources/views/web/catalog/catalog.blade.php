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
                            <h2>Catalog</h2>
                            <ul class="breadcrumbs ul--inline ul--no-style">
                                <li>
                                    <a href="{{route('web.index')}}">Home</a>
                                </li>
                                <span>|</span>
                                <li class="active">Catalog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Navigation -->
    <!-- Service List -->
    <section class="service-list">
      <div class="container">
        <div class="row">
          @if(isset($catalog_list) && !empty($catalog_list))
          @foreach ($catalog_list as $catalog)
            <div class="col-lg-4 col-md-6">
              <div class="service-list__item">
                <img alt="Service 1" src="{{asset('images/docs/'.$catalog->image)}}">
                <div class="service-list__text">
                  <h5>
                    <a>{{$catalog->name}}</a>
                  </h5>
                <a href="{{asset('uploads/'.$catalog->file).''}}" class="au-btn au-btn--big au-btn--pill au-btn--yellow au-btn--white">View Catalog</a>
                </div>
              </div>
            </div>
          @endforeach
          @else

          @endif
          </div>
        </div>
      </div>
    </section>
    <!-- Our Process -->

@endsection

@section('script')
@endsection