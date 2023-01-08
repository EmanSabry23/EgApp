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
                      <li><a href="#"> فريق العمل </a></li>
                    </ul>
                  </div>
                  <div class="bread-title">
                    <h2>قادتــــنا </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- Begin Section Team In Page -->
    <div class="team">
      <div class="container">
        <div class="header-section">
          <span>نحن رائعون</span>
          <h2>المديرين التنفيذيين لدينا</h2>
          <p class="mb0">
            لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد.
          </p>
        </div>
        <div class="row justify-content-center">
          @foreach ($ceo as $c)
            <div class="col-lg-4">
              <div class="full-image-card hover-scale">
                <div class="image-div">
                  <a href="#">
                    <img src="{{$c -> photo}}" alt="team" class="img-fluid">
                  </a>
                </div>
                <div class="info-text-block">
                  <h4><a href="#">{{$c -> name}} </a></h4>
                  <p>{{$c -> description}}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <section class="team deep-dark">
      <div class="container">
        <div class="header-section">
          <span>نحن رائعون</span>
          <h2>أعضاء فريقـــنا</h2>
          <p class="mb0">
            لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد.
          </p>
        </div>
        <div class="row">
          @foreach ($member as $m)
            <div class="col-lg-3">
              <div class="full-image-card hover-scale">
                <div class="image-div">
                  <a href="#">
                    <img src="{{$m -> photo}}" alt="team" class="img-fluid">
                  </a>
                </div>
                <div class="info-text-block">
                  <h4><a href="#">{{$m -> name}} </a></h4>
                  <p>{{$m -> description}}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End Section Team In Page -->

@stop