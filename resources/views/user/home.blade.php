@extends('layouts.user')
@section('content')

{{-- @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="mdi mdi-information-outline"></i>
        {{session()->get('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif --}}
<div class="center-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text">
                    <h2>
                        شركة تطوير تطبيقات الجوال  <br>الأعلى تقييمًا
                    </h2>
                    <p>
                         EG APP  هي شركة تطوير تطبيقات الأجهزة المحمولة وتطوير الويب وهي تتميز بالابداع في مجالها  .
                    </p>
                    <a href="" class="btn-main">
                        ابدا الان <i class="fa-solid fa-chevron-left"></i>
                        <span class="circle"></span>
                    </a>
                    <a href=""><i class="fa-solid fa-play"></i></a>
                    <h4>إنجازاتنا</h4>
                    <div class="owl-carousel owl-theme bages-slider">
                        <div class="item">
                            <img src="/user/assets/images/badge2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="/user/assets/images/badge3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="/user/assets/images/badge4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="/user/assets/images/mobile_hero_banner.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Begin Section About -->
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2> <span>EG APP</span> شركة تطوير تطبيقات الهاتف المحمول </h2>
                <p>
                    لوريم إيبسوم هو نص من صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة.
                </p>
                <p>
                    لوريم إيبسوم هو نص من صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="picec src1">
                            <img src="/user/assets/images/startup.svg" alt="niwax app development /user/assets">
                            <span class="services-cuntr counter">2</span><span class="services-cuntr">+</span>
                            <p> سنوات الخبرة </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="picec src2">
                            <img src="/user/assets/images/team.svg" alt="niwax app development /user/assets">
                            <span class="services-cuntr counter">5</span><span class="services-cuntr">+</span>
                            <p>عدد الفريق </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="picec src3">
                            <img src="/user/assets/images/mobile.svg" alt="niwax app development /user/assets">
                            <span class="services-cuntr counter">2</span><span class="services-cuntr">+</span>
                            <p>تطوير التطبيقات </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="picec src4">
                            <img src="/user/assets/images/computers.svg" alt="niwax app development /user/assets">
                            <span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
                            <p>تسليم المشاريع</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="picec src1">
                            <img src="/user/assets/images/deal.svg" alt="niwax app development /user/assets">
                            <span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
                            <p>رضا العملاء </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section About -->

<!-- Begin Section Our Services -->
<div class="our-services">
    <div class="container">
        <div class="sctxt">تطوير التطبيقات </div>
        <div class="header-section">
            <span>الخدمات</span>
            <h2>خدمــــاتــنا</h2>
            <p>نحن نفكر بشكل كبير ولدينا أيدي في جميع منصات التكنولوجيا الرائدة لنقدم لك مجموعة واسعة من الخدمات.</p>
        </div>
        <div class="row">
            @foreach ($services as $service )
                <div class="col-lg-4 col-md-12 wow fadeInUp animated" data-wow-delay="0.4s" data-wow-offset="10" data-wow-duration="0.2s">
                    <div class="service-card-app hoshd">
                        <h4>{{$service -> name}}</h4>
                        <ul class="service-list mt10 list-unstyled">
                            
                                @foreach ($service->service_categories as $sC)
                                    <li>
                                        {{-- <span hidden>
                                            {{ isset($service) &&in_array($service->id,$sC->services()->pluck('service_id')->toArray()) }}
                                        </span> --}}
                                        {{ $sC->title }}
                                    </li>
                                @endforeach
                            
                        </ul>
                        <div class="tec-icon mt30">
                            <ul class="servc-icon-sldr">
                                <li>
                                    <a href="#">
                                        <div class="img-iconbb">
                                            @foreach ($service->service_categories as $sC)                                              
                                                <img src="{{ $sC->photo }}" alt="img">
                                            @endforeach                                   
                                        </div> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p class="mt20">
                            {{$service -> description}}
                        </p>
                        <a href="{{route('pages.user.contactus')}}" class="mt20 link-prbs"> اتصل بنا <i class="fas fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4 col-md-12 wow fadeInUp animated" data-wow-delay="0.4s" data-wow-offset="10" data-wow-duration="0.2s">
                <div class="service-card-app hoshd">
                    <h4>تطوير التطبيقات </h4>
                    <ul class="service-list mt10 list-unstyled">
                        <li> <a href="#">iPhone</a> </li>
                        <li> <a href="#">Android</a> </li>
                        <li> <a href="#">Cross Platform</a> </li>
                    </ul>
                    <div class="tec-icon mt30">
                        <ul class="servc-icon-sldr">
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/android.svg" alt="img"></div> </a></li>
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/apple.svg" alt="img"></div> </a></li>
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/tablet.svg" alt="img"></div> </a></li>
                        </ul>
                    </div>
                    <p class="mt20">
                        صمم وطور موقعًا إبداعيًا بالتفاصيل الدقيقة واستراتيجياتنا الدقيقة.
                    </p>
                    <a href="javascript:void(0)" class="mt20 link-prbs">اقرا المزيد <i class="fas fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeInUp animated" data-wow-delay="0.6s" data-wow-offset="10" data-wow-duration="0.5s">
                <div class="service-card-app hoshd">
                    <h4>تطوير الويب</h4>
                    <ul class="service-list mt10">
                        <li> <a href="#">UI/UX</a> </li>
                        <li> <a href="#">PHP</a> </li>
                        <li> <a href="#">Java</a> </li>
                        <li> <a href="#">WordPress</a></li>
                    </ul>
                    <div class="tec-icon mt30">
                        <ul class="servc-icon-sldr">
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/ux.svg" alt="img"></div></a></li>
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/php.svg" alt="img"></div></a></li>
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/java.svg" alt="img"></div></a></li>
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/wordpress.svg" alt="img"></div></a></li>
                        </ul>
                    </div>
                    <p class="mt20">
                        صمم وطور موقعًا إبداعيًا بالتفاصيل الدقيقة واستراتيجياتنا الدقيقة.
                    </p>
                    <a href="javascript:void(0)" class="mt20 link-prbs">اقرا المزيد  <i class="fas fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeInUp animated" data-wow-delay="0.8s" data-wow-offset="10" data-wow-duration="0.6s">
                <div class="service-card-app hoshd">
                    <h4>تطوير التجارة الإلكترونية</h4>
                    <ul class="service-list mt10">
                        <li> <a href="#">PHP</a> </li>
                        <li> <a href="#">Java</a> </li>
                        <li> <a href="#">WordPress</a></li>
                    </ul>
                    <div class="tec-icon mt30">
                        <ul class="servc-icon-sldr">
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/php.svg" alt="img"></div></a></li>
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/java.svg" alt="img"></div></a></li>
                            <li><a href="#"><div class="img-iconbb"><img src="/user/assets/images/wordpress.svg" alt="img"></div></a></li>
                        </ul>
                    </div>
                    <p class="mt20">
                        صمم وطور موقعًا إبداعيًا بالتفاصيل الدقيقة واستراتيجياتنا الدقيقة.
                    </p>
                    <a href="javascript:void(0)" class="mt20 link-prbs">اقرا المزيد  <i class="fas fa fa-arrow-circle-right"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- End Section Our Services -->

<!-- Begin Section Why Choose -->
<div class="why-choose">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="picec-right">
                    <span>لماذا أخترتنا</span>
                    <h2>
                        <span>EG APP</span> لماذا احتلت  المرتبة الأولى بين شركات تطوير الويب والتطبيقات الرائدة
                    </h2>
                    <p>
                        لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي.
                    </p>
                    <div class="item-media-object">
                        <div class="media">
                            <div class="img-bg">
                                <img src="/user/assets/images/computers-why.svg" alt="">
                            </div>
                            <div class="media-body">
                                <h4>تبسيط إدارة المشروع</h4>
                                <p>
                                    لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي.
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="img-bg">
                                <img src="/user/assets/images/worker.svg" alt="">
                            </div>
                            <div class="media-body">
                                <h4> فريق متخصص من الخبراء</h4>
                                <p>
                                    لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي.
                                </p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="img-bg">
                                <img src="/user/assets/images/deal-why.svg" alt="">
                            </div>
                            <div class="media-body">
                                <h4> الانتهاء من المشروع في الوقت المحدد</h4>
                                <p>
                                    لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="picec-left">
                    <div class="img-bg">
                        <img src="/user/assets/images/about-company.jpg" alt="">
                    </div>
                    <p>
                        لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي.
                    </p>
                    <h2>لنبدأ <span>مشروعًا جديدًا</span> معًا</h2>
                    <p>
                        لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Why Choose -->

<!-- Begin Section Our Work  -->
<div class="our-work" id="portfolio">
    <div class="container">
        <div class="header-section">
            <span>عملنا</span>
            <h2>أحدث أعمالنا الإبداعية</h2>
        </div>
        <div class="row">
            @foreach ($portfolio as $portfolio)
                <div class="col-lg-4">
                    <div class="item">
                        <div class="img-bg">
                            <img src="{{$portfolio -> photo}}" alt="">
                        </div>
                        <div class="item-info">
                            <h4>
                                <a href="{{$portfolio -> link}}" target="_blank">
                                    {{$portfolio -> title}}
                                </a>
                            </h4>
                            <p>{{$portfolio -> description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-4">
                <div class="item">
                    <div class="img-bg">
                        <img src="/user/assets/images/porfolio1.png" alt="">
                    </div>
                    <div class="item-info">
                        <h4><a href="http://nitechr.eg-app.com/">NI TECH</a></h4>
                        <p>HTML 5 , CSS3 , BOOTSTRAP5 , JQUERY , LARAVEL9 , MYSQL</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="img-bg">
                        <img src="/user/assets/images/portfolio2.png" alt="">
                    </div>
                    <div class="item-info">
                        <h4><a href="https://elpayaa.com/">ELPAYAA</a></h4>
                        <p>HTML 5 , CSS3 , BOOTSTRAP5 , JQUERY , LARAVEL8 , MYSQL</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="img-bg">
                        <img src="/user/assets/images/portfolio3.png" alt="">
                    </div>
                    <div class="item-info">
                        <h4><a href="https://me-me-eg.com/">TELE TECH</a></h4>
                        <p>HTML 5 , CSS3 , BOOTSTRAP5 , JQUERY , LARAVEL8 , MYSQL</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="img-bg">
                        <img src="/user/assets/images/porfolio4.png" alt="">
                    </div>
                    <div class="item-info">
                        <h4><a href="http://transport.tele-tech-eg.com/">TRANSPORT</a></h4>
                        <p>HTML 5 , CSS3 , BOOTSTRAP5 , JQUERY , LARAVEL8 , MYSQL</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <div class="img-bg">
                        <img src="/user/assets/images/portfolio5.png" alt="">
                    </div>
                    <div class="item-info">
                        <h4><a href="https://yarotravel.com/">YARO TRAVEL</a></h4>
                        <p>HTML 5 , CSS3 , BOOTSTRAP5 , JQUERY</p>

                    </div>
                </div>
            </div> --}}
            
        </div>
    </div>
</div>
<!-- End Section Our Work  -->

<!-- Begin Section Have Worked -->
<div class="have-worked">
    <div class="container">
        <div class="header-section">
            <span>لقد عملنا عبر صناعات متعددة</span>
            <h2>الصناعات التي نخدمها</h2>
            <p>
                تم تسليم المنتجات الرقمية بنجاح Lorem Ipsum هو ببساطة نصًا وهميًا لصناعة الطباعة والأنسجة.
            </p>
        </div>
        <div class="row">
            @foreach ($category as $cat)
            <div class="col-lg-3 col-md-12"> 
                <div class="picec">
                    <img src="{{$cat -> photo}}" alt="img" /> 
                    <h6>{{ $cat -> description }}</h6> 
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/house.svg" alt="img"> <h6>Real estate</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/travel-case.svg" alt="img"> <h6>Tour &amp; Travels</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/video-tutorials.svg" alt="img"> <h6>Education</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/taxi.svg" alt="img"> <h6>Transport</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/event.svg" alt="img"> <h6>Event</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/smartphone.svg" alt="img"> <h6>eCommerce</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/joystick.svg" alt="img"> <h6>Game</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/healthcare.svg" alt="img"> <h6>Healthcare</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/money-growth.svg" alt="img"> <h6>Finance</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/baker.svg" alt="img"> <h6>Restaurant</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/mobile-app.svg" alt="img"> <h6>On-Demand</h6> </div></div>
            <div class="col-lg-3 col-md-12"> <div class="picec"><img src="/user/assets/images/have-worked/groceries.svg" alt="img"> <h6>Grocery</h6> </div></div>  --}}
        </div>
    </div>
</div>
<!-- End Section Have Working -->

<!-- Begin Section CTA -->
<div class="app-cta">
    <div class="container">
        <div class="header-section">
            <span>لنعمل معًا</span>
            <h2>نحن نحب الاستماع إلى متطلباتك</h2>
        </div>
        <div class="call">
            <a href="{{route('pages.user.contactus')}}" class="btn-main bg-btn4 lnk">ابدا الان <i class="fas fa-chevron-left fa-icon"></i><span class="circle"></span></a>
            <p>
                أو اتصل بنا الآن 
                <a href="tel:(+2) 0106 333 5556"> <i class="fa-solid fa-phone"></i> (+2) {{config('setting.phone')}} </a>
            </p>
        </div>
        <div class="shape shape-c1"></div>
        <div class="shape shape-c2"></div>
        <div class="shape shape-c3"></div>
    </div>
</div>
<!-- End Section CTA -->

<!-- Begin Section Our Location -->
<div class="our-location">
    <div class="container">
        <div class="header-section">
            <span>موقعـــنا </span>
            <h2>مكتبـــنا</h2>
        </div>
        <div class="office-card hoshd">
            <div class="row">
                <div class="col-8">
                    <div class="info-text-div">
                        <h4>{{config('setting.country')}}</h4>
                        <h6 class="mt10">مكتب مسجل</h6>
                        <p>{{config('setting.address')}}</p>
                        <ul class="-address-list mt10 list-unstyled">
                            <li><a href="mailto:{{config('setting.email')}}"><i class="fas fa-envelope"></i> {{config('setting.email')}}</a></li>
                            <li><a href="tel:{{config('setting.phone')}}"><i class="fas fa-phone-alt"></i> (+2) {{config('setting.phone')}}</a> </li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-4">
                    <div class="landscp">
                        <img src="/user/assets/images/india-img.png" alt="location" class="img-fluid">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- End Section Our Location -->

@stop