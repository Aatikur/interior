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
                            <h2>Room</h2>
                            <ul class="breadcrumbs ul--inline ul--no-style">
                                <li>
                                    <a href="{{route('web.index')}}">Home</a>
                                </li>
                                <span>|</span>
                                <li class="active">Room</li>
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
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 1" src="{{asset('web/img/room/room1.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>TEMPLE</a>
                </h5>
                <p>
                  Temple or Mandir is the home of God in your home. Provide a beautiful and well lit temple for the God to keep the festive mood and faith going on.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 2" src="{{asset('web/img/room/room2.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>LIVING ROOM</a>
                </h5>
                <p>
                  Make your Living Room a place of comfort, be it for family members or guests with stylish and modern interior be the talk of the town.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 3" src="{{asset('web/img/room/room3.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>BEDROOM</a>
                </h5>
                <p>
                  Bedroom a place of resting and intimacy, here we can provide your the ultimate confort you always seek that will take all your tiredness away.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 4" src="{{asset('web/img/room/room4.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>KIDS ROOM</a>
                </h5>
                <p>
                  Accident proof and colourful interior for the growing minds. With intelligent interiors the curious brain will always find something fun to do. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 5" src="{{asset('web/img/room/room5.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>STUDY ROOM</a>
                </h5>
                <p>
                  Let the serious room talk for itself, with sound proof interior you can find the comfort to cuddle in the chair with your favourite book or concentrate for hours in your work.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 6" src="{{asset('web/img/room/room6.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>KITCHEN</a>
                </h5>
                <p>
                  Delicious food makes a kitchen messy, but not anymore. Not only your kitchen will be spotless but it will look as good as new with our modular kitchen laminates. It will also provide colour to your kitchen to keep your mood in makind delicious foods.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 4" src="{{asset('web/img/room/room10.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>WALL SELVES </a>
                </h5>
                <p>
                  Stylish and unique design Wall Selves for your living room, bedroom etc. These beautiful looking wall selves are very light and easy to install. It provides a modern touch to your home. You can check out more designs in the catalogue section. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 5" src="{{asset('web/img/room/room8.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>SPAVE SAVING FURNITURE</a>
                </h5>
                <p>                  
                  Modern problems required modern solution , so here with the problem of space constrain we bring you space saving furniture according to your needs.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 6" src="{{asset('web/img/room/room9.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>FALSE CEILING</a>
                </h5>
                <p>
                  Beautiful and stunning designs for your interior. Reflecting lights of beautifully carved false ceiling give a whole new level to modern interior.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-list__item">
              <img alt="Service 6" src="{{asset('web/img/room/room7.jpg')}}">
              <div class="service-list__text">
                <h5>
                  <a>CLADDING</a>
                </h5>
                <p>
                  Cladding the interior is next after the wave of wallpapers. Cladding has more standard and stylish look even in interior. Cladding on the focus wall gives a whole new look to your room.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Process -->

@endsection

@section('script')
@endsection