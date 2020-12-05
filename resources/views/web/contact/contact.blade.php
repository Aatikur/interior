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
                            <h2>Contact</h2>
                            <ul class="breadcrumbs ul--inline ul--no-style">
                                <li>
                                    <a href="{{route('web.index')}}">Home</a>
                                </li>
                                <span>|</span>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Navigation -->
    <!-- Contact content -->
    <section class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="m-t-40">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5063.794775101565!2d91.75598726253988!3d26.175733398394723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a59818fbb4e31%3A0x33600196f49897a3!2sRudraksha%20Bar%20%26%20Restaurant!5e0!3m2!1sen!2sin!4v1605785813982!5m2!1sen!2sin" height="400" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-contact-wrap m-t-40">
                        <h4>Send us a message</h4>
                        <form class="form-contact js-contact-form" action="{{ route('web.add_contact') }}" method="POST" role="form" name="contact">
                        @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <input type="text" name="name" required placeholder="Your Name*">
                                </div>
                                <div class="col-md-6 col-12">
                                    <input type="email" name="email" placeholder="Your Email*" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="message" class="message" placeholder="Your Message" value=""></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="au-btn au-btn--pill au-btn--yellow au-btn--big">Contact Us</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Content -->
    <!-- Contact Info -->
    <section class="contact-info">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <h4 class="p-t-30 text-center">Contact info</h4>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-item p-t-30">
                    <i class="fa fa-phone m-r-8"></i>
                    <a href="tel:8638195069">8638195069</a><a href="tel:8638465137">8638465137</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-item p-t-30">
                    <i class="fa fa-home m-r-8"></i>
                    3rd Floor, HN No.- 37 (from Hatigaon side), Lane No.-2, Basisthapur, Beltola, Guwahati, Assam 781028
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-item p-t-30">
                    <i class="fa fa-envelope m-r-8"></i>
                    <a href="mailto:info@interiorlife.co.in">info@interiorlife.co.in</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Contact Info -->

@endsection

@section('script')
@endsection