@extends('layouts.user')
@section('content')

    <!-- Begin Breadcrumb -->
    <section class="breadcrumb-area banner-1" data-background="/user/assets/images/4.jpg" style="background-image: url(&quot;/user/assets/images/4.jpg&quot;);">
        <div class="text-block">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 v-center">
                <div class="bread-inner">
                  <div class="bread-menu">
                    <ul class="list-unstyled">
                      <li><a href="{{url('/')}}">الرئيسية</a></li>
                      <li><a href="#">  تواصل معنا </a></li>
                    </ul>
                  </div>
                  <div class="bread-title">
                    <h2>تواصل معـــنا  </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- Begin Section Contact Us In Page -->
    <section class="contact-page pad-tb">
			<div class="container">
				<div class="row justify-content-center">
          <div class="col-lg-6 v-center wow fadeInUp animated" data-wow-delay=".2s">
            <div class="common-heading text-l">
              <span>اتصل الآن</span>
              <h2 class="mt0 mb0">لديك سؤال؟ اكتب رسالة</h2>
              <p class="mb60 mt20">
                سوف نلحق بك في أقرب وقت كما نتلقى الرسالة
              </p>
            </div>
            <div class="form-block">
              <form action='{{route('user.contactus.store')}}' method="POST" id="contactForm" data-bs-toggle="validator" class="shake" novalidate="true">
                @csrf
                <div class="row">
                  <div class="form-group col-sm-6">
                    <input type="text" name="name" id="name" placeholder="ادخل الاسم" data-error="Please fill Out" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="email" name="email" id="email" placeholder="ادخل البريد الالكتروني" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <input type="number" name="phone" id="mobile" placeholder="ادخل رقم الهاتف " data-error="Please fill Out" required>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="text" name="selectCondition" id="selectCondition" placeholder="حدد الشرط" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea id="message" name="message" rows="5" placeholder="أدخل رسالتك" required></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn disabled" style="pointer-events: all; cursor: pointer;">ارسال <span class="circle"></span></button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
              </form>
                  </div>
          </div>
          <div class="col-lg-5 v-center wow fadeInUp animated" data-wow-delay=".2s">
            <div class="contact-details">
              <div class="contact-card wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <div class="info-card v-center">
                  <span><i class="fas fa-phone-alt"></i> رقم الهاتف:</span>
                  <div class="info-body">
                    
                    <p> ساعات المساعدة:  من الاثنين إلى الجمعة ، -  من الساعة 9 صباحًا حتى الساعة 5 مساءً</p>
                    <a href="tel:{{config('setting.phone')}}">(+2) {{config('setting.phone')}}</a>
                  </div>
                </div>
              </div>
              <div class="email-card mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                <div class="info-card v-center">
                  <span><i class="fas fa-envelope"></i> البريد الالكتروني:</span>
                  <div class="info-body">
                    <p>سيعود فريق الدعم لدينا في غضون 24 ساعة خلال ساعات العمل القياسية.</p>
                    <a href="mailto:info@egapp.com">{{config('setting.email')}}</a>
                  </div>
                </div>
              </div>
              <div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">
                <div class="info-card v-center">
                  <span><i class="fab fa-skype"></i> Skype:</span>
                  <div class="info-body">
                    <p>نحن متصلون بالإنترنت:  من الاثنين إلى الجمعة ، -  من الساعة 9 صباحًا حتى الساعة 5 مساءً</p>
                    <a href="skype:egapp.company?call">egapp.company</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>
		</section>
    <!-- End Section Contact Us In Page -->

    <!-- Begin Section Our Location In Page -->
    <section class="contact-location pad-tb bglight">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="common-heading">
              <span>مواقــــعنا</span>
              <h2>مكتبــــنا</h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center upset shape-numm">
          <div class="col-lg-4 shape-loc wow fadeInUp animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="office-card">
              <div class="skyline-img">
                <img src="/user/assets/images/newyork.png" alt="image" class="img-fluid">
              </div>
              <div class="office-text">
                <h4>{{config('setting.country')}}</h4>
                <p>{{config('setting.address')}}</p>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="office-card">
              <div class="skyline-img">
                <img src="/user/assets/images/sydeny.png" alt="image" class="img-fluid">
              </div>
              <div class="office-text">
                <h4>مصر</h4>
                <p>232 , شارع 6 مدينة نصر</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
            <div class="office-card mb0">
              <div class="skyline-img">
                <img src="/user/assets/images/rome.png" alt="image" class="img-fluid">
              </div>
              <div class="office-text">
                <h4>مصر</h4>
                <p>232 , شارع 6 مدينة نصر</p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- End Section Our Location In Page -->

@stop