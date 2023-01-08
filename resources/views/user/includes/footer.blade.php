<!-- Begin Section News -->
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="email-subs">
                    <h3>احصل على رؤى جديدة أسبوعيًا</h3>
                    <p>
                        رسالة اخبارية قم بادخال بريدك الالكتروني وقم بارسال رسالتك
                    </p>
                </div>
            </div>
            <div class="col-lg-6 v-center">
                <div class="email-subs-form">
                    <form action="{{route('user.newsletter.store')}}" method="POST">
                        @csrf
                        <input type="email" placeholder="أرسل عنوانك بالبريد الإلكتروني" name="email" required>
                        <button type="submit" name="submit" class="lnk btn-main bg-btn">الإشتراك <i class="fas fa-chevron-left fa-icon"></i><span class="circle"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section News -->

<!-- Begin Section Footer -->
<div class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3 ftr-brand-pp">
                <a class="navbar-brand mt30 mb25 f-dark-logo" href="{{url('/')}}"> 
                    <img src="/user/assets/images/eg-app.png" alt="Logo">
                    
                </a>
               
                <p>
                    {{config('setting.websiteDescription')}}
                </p>
                <!-- <a href="#" class="btn-main bg-btn3 lnk mt20">Become Partner <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a> -->
            </div>
            <div class="col-lg-3">
                <h5>تواصل معنا </h5>
                <ul class="footer-address-list ftr-details">
                    <li>
                        <span><i class="fas fa-envelope"></i></span>
                        <p>البريد الالكتروني <span> <a href="mailto:{{config('setting.email')}}">{{config('setting.email')}}</a></span></p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone-alt"></i></span>
                        <p>رقم الهاتف <span> <a href="tel:{{config('setting.phone')}}">(+2) {{config('setting.phone')}}</a></span></p>
                    </li>
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>العنوان <span>{{config('setting.address')}}</span></p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h5>روابط الموقع</h5>
                <ul class="footer-address-list link-hover">
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li><a href="{{route('pages.user.aboutus')}}">نبذة عنا</a></li>
                    <li><a href="{{route('pages.user.team')}}">فريق العمل</a></li>
                    <li><a href="{{url('/')}}" class="scrollPortfolio">سابقة الاعمال</a></li>
                    <li><a href="{{route('pages.user.contactus')}}"> تواصل معنا</a></li>
                    <li><a href="{{route('user.vacancies.show')}}">وظائف شاغرة</a></li>
                </ul>
            </div>
            <div class="col-lg-4 footer-blog-">
                <h5>أحدث المدونات</h5>
                <div class="single-blog-">
                    <div class="post-thumb">
                        <img src="/user/assets/images/blog-small.jpg" alt="blog">
                    </div>
                    <div class="content">
                        <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>15 أبريل 2020</span></p>
                        <h4 class="title">
                            <p>
                                نحن نقدم لك أفضل خدمة استشارية مبتكرة                                
                            </p>
                        </h4>
                    </div>
                </div>
                <div class="single-blog-">
                    <div class="post-thumb">
                        <img src="/user/assets/images/blog-small.jpg" alt="blog">
                    </div>
                    <div class="content">
                        <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>15 أبريل 2020</span></p>
                        <h4 class="title">
                            <p>
                                نحن نقدم لك أفضل خدمة استشارية مبتكرة                                
                            </p>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="social">
            <a href="{{config('setting.facebook')}}"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="{{config('setting.linkedin')}}"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="{{config('setting.instagram')}}"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <hr>
        <div class="copyright">
            <p>© 2020-2022. All Rights Reserved By <a href="" target="blank">{{config('setting.websitename')}}  </a></p>
        </div>
    </div>
</div>
<!-- End Section Footer -->

<div class="go-top"><i class="fas fa-angle-double-up"></i></div>