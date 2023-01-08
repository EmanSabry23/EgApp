@extends('layouts.user')
@section('content')

<section class="breadcrumb-area banner-1" data-background="/user/assets/images/9.jpg" style="background-image: url(&quot;/user/assets/images/9.jpg&quot;);">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-menu">
                <ul class="list-unstyled">
                  <li><a href="{{url('/')}}">الرئيسية</a></li>
                  <li><a href="#">  وظائف شاغره </a></li>
                </ul>
              </div>
              <div class="bread-title">
                <h2> وظائـــف شـــاغره  </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

    <div class="vacancies">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="common-heading text-l">
                        <span>وظائف شاغرة </span>
                        <h2 class="mt0 mb0">  قد الان علي وظيفة والتحق بفرصة عمل !! </h2>
                        <p class="mb60 mt20">
                          سوف نلحق بك في أقرب وقت كما نتلقى الرسالة
                        </p>
                    </div>
                    <form action="{{ route('user.vacancies.store') }}" method="POST" enctype="multipart/form-data" class="form-block">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="username">الاسم الاول</label>
                                    <input id="username" type="text" name="username" class="form-control" placeholder="ادخل الاسم الاول" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="lastname">الاسم الاخير</label>
                                    <input id="lastname" type="text" name="lastname" class="form-control" placeholder="ادخل الاسم الاخير" required>
                                   
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email"> البريد الالكتروني</label>
                                    <input id="email" type="email" name="email" class="form-control" placeholder="ادخل البريد الالكتروني" required>
                                   
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone">  رقم الهاتف</label>
                                    <input id="phone" type="number" name="phone" min="0" class="form-control" placeholder="ادخل  رقم الهاتف" required>
                                   
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="photo"> رفع السيرة الذاتية</label>
                                    <input id="photo" type="file" name="photo" class="form-control" required>
                                    
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-main">
                            ارســـال
                            <span class="circle"></span>
                        </button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="image">
                        <img src="/user/assets/images/eg-app.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop