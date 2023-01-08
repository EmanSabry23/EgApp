@extends('layouts.user')
@section('content')

    <!-- Begin Breadcrumb -->
    <section class="breadcrumb-area banner-1" data-background="/user/assets/images/9.jpg" style="background-image: url(&quot;/user/assets/images/9.jpg&quot;);">
        <div class="text-block">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 v-center">
                <div class="bread-inner">
                  <div class="bread-menu">
                    <ul class="list-unstyled">
                      <li><a href="{{url('/')}}">الرئيسية</a></li>
                      <li><a href="#">نبذة عنـــا </a></li>
                    </ul>
                  </div>
                  <div class="bread-title">
                    <h2>عن الشركة </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- Begin Section About Us In Page -->
    <div class="about-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 v-center">
                  <div class="about-image">
                    {{-- <img src="/user/assets/images/company-about.png" alt="about us" class="img-fluid"> --}}
                    <img src="{{config('AboutU.image')}}" alt="about us" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="common-heading text-l ">
                    <span>نبذة عنـــا</span>
                    <h2>عن الوكالة</h2>
                    <p>
                      {{config('AboutU.aboutUsDescription')}}
                        {{-- لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. هو مجرد نص وهمي لصناعة الطباعة والتنضيد. --}}
                    </p>
                    <p>
                      {{config('AboutU.aboutUsDescription')}}
                        {{-- لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. هو مجرد نص وهمي لصناعة الطباعة والتنضيد. --}}
                    </p>
                  </div>
                  <div class="row in-stats small about-statistics">
                    <div class="col-lg-4 col-4">
                      <div class="statistics">
                        <div class="statnumb counter-number">
                          <span class="counter">{{config('setting.Happy customers')}}</span>
                          <p>عملاء سعداء</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-4">
                      <div class="statistics">
                        <div class="statnumb counter-number">
                          <span class="counter">
                            {{config('setting.work hours')}}
                          </span>
                          {{-- <span> k </span> --}}
                          <p>ساعات العمل</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-4">
                      <div class="statistics mb0">
                        <div class="statnumb counter-number">
                          <span class="counter">{{config('setting.completed projects')}}</span>
                          <p>المشاريع المنجزة</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <!-- End Section About Us In Page -->

@stop