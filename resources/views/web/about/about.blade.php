@extends('web.templete.master')

@section('seo')
<meta name="description" content="Stups Printing">
@endsection

@section('content')

    <section class="page-title">
        <div class="thm-container">
            <h3>About us</h3>        
        </div><!-- /.thm-container -->
    </section><!-- /.page-title -->

    <div class="breadcumb-wrapper">
        <div class="thm-container">
            <ul class="breadcumb">
                <li><a href="{{route('web.index')}}">Homepage</a></li><!--
                --><li><span class="sep">-</span></li><!--
                --><li><span>About Us</span></li>
            </ul><!-- /.breadcumb -->
        </div><!-- /.thm-container -->
    </div><!-- /.breadcumb-wrapper -->

    <section class="intro-section">
        <div class="thm-container">
            <div class="sec-title text-center">
                <span>How we started</span>
                <h3>Introduction</h3>
            </div><!-- /.sec-title -->
            <div class="intro-cont text-center">
                <p>Operating from premises in Central Johannesburg with a small machine room and a few employees. Mr U. Stobaus started supplying printed materials to a developing client base in the 1980’s.</p>
                <p>In 1987 his little company moved premises and was renamed Stups Printing CC. Over the ensuing 28 years, Stups Printing has grown into a medium sized sheet fed lithographic printing company, that can offer conceptualisation and design through DeskTopPublishing to production and finishing of a large variety of printed items.</p>
                <p>In 2010 at the retirement age Mr. Stobaus sold the company to one of it’s most valuable staff member who has 35 years of experience in the print industry to Manoj Kalyan. Since 2010 we have branched out into various other categories starting with flexo (label) printing to digital printing which included corporate gifts, recently due to some client’s requests we have ventured into display stand, counter stands and promotional stands for expo and instore marketing. With all these additions we are now able to offer a complete service to our clients. We are extremely proud of our achieves and are passionate with purpose to grow bigger. Our attention to detail and quality products have attracted many clients from all over Africa and Europe as well.</p>

            </div>
        </div><!-- /.thm-container -->
    </section><!-- /.team-section -->

    <section class="service-style-one industry sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-12 service-content">                    
                    <div class="title text-center">
                        <h2>Industry Overview</h2>
                    </div><!-- /.title -->
                </div>
                <div class="col-md-6">
                    <div class="industry-img-box">
                        <img src="{{asset('web/img/download-guide-line-1-1.jpg')}}" alt="Awesome Image">
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="service-content">
                        <p>The main forces that influence a printing company are the paper supply houses, competing printers and, of course, the customers. The abundance of printing companies and machine capacity means that competition is extremely fierce.</p>
                        <p>Printing companies draw their customers from virtually every industry in our economy and the scope of printed materials supplied is extensive-products range from the massive field of advertising items to a vast variety of product labels and packaging, company stationery and security documents.</p>
                    </div><!-- /.service-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-12">
                    <div class="service-content">                     
                        <p>The colourful and challenging process of producing these articles often involves design houses and marketing agencies, who ask for the creation of a myriad unusual and interesting end products, which require high levels of expertise to manufacture.</p>
                        <h4>Our Place Within The Industry</h4>
                        <p>Stups Printing is well positioned for several reasons:</p>
                        <p>Our company has a strong sense of business ethics which has stood us in good stead with our customers, as well as forging successful strategic partnerships with a number of highly specialised finishing companies, which translates to a high standard of service flexibility and quality.</p>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.service-style-one -->

    <section class="service-style-two about-page">
        <div class="overlay"></div><!-- /.overlay -->
        <img src="{{asset('web/img/what-we-do-2-1.jpg')}}" class="background-right" style="border-radius: 9% 0 0 9%;" alt="Awesome Image"/>
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-content">
                        <span>Where we are</span>
                        <h2>Our place within<br /> the industry</h2>
                        <h4>Stups Printing is well positioned for several reasons:</h4>
                        <p class="text-justify">Our company has a strong sense of business ethics which has stood us in good stead with our customers, as well as forging successful strategic partnerships with a number of highly specialised finishing companies, which translates to a high standard of service flexibility and quality.</p>
                    </div><!-- /.service-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6"></div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.service-style-two -->

    <section class="faq-section abt-pg">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-content">
                        <div class="title">
                            <span>Our core values</span>
                            <h2>Mission And<br /> Moto</h2>
                        </div><!-- /.title -->
                    </div><!-- /.faq-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-6 p0">
                    <div class="vision-content">
                        <h3>“Success through service” is our mission statement. We strive to achieve this by applying the following:</h3>
                        <ul>                                
                            <li>Service excellence – we strive to give our clients the best service</li>
                            <li>Quality – we believe in only offering our clients quality products</li>
                            <li>Uniqueness – we strive to offer exclusive products to our clients</li>
                            <li>Price – our prices must be competitive to give you the edge.</li>
                        </ul>
                    </div><!-- /.contact-form-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 p0" style="border: 5px solid #eaeaea;">
                    <div class="contact-section">
                        <div class="title text-center">
                            <h2>Our Moto</h2>
                        </div>
                        <div class="moto-content">
                            <p>We believe it has everything to do with performance delivery and a relationship that is tried, tested and trusted. Our people are passionate about this business and our credentials walk the talk. The relationships we forge are what set us apart in the business.   </p>
                        </div><!-- /.contact-info -->
                    </div>
                </div><!-- /.col-md-6 -->
            </div>
        </div><!-- /.thm-container -->
    </section><!-- /.faq-section -->

    <section class="mail-us-section text-center">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Contact us for any query</h5>
                </div><!-- /.col-md-5 -->
                <div class="col-md-6">
                    <div class="contact-btn">					
                        <a href="tel:+27 (11) 334 1850" class="thm-btn yellow-bg">Mail Us</a>
                        <a href="tel:+27 (11) 334 1850" class="thm-btn yellow-bg">Call Us</a>
                    </div>
                </div><!-- /.col-md-7 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.faq-section -->

@endsection

@section('script')
@endsection