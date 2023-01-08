<div class="top-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="/user/assets/images/eg-app.png" alt="">
            <img src="{{config('setting.logo')}}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">{{ __('messages.home') }} </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('pages.user.aboutus')}}"> {{ __('messages.about') }} </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('pages.user.team')}}">  {{ __('messages.teamwork') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scrollPortfolio" href="{{url('/')}}"> {{ __('messages.portfolio') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('pages.user.contactus')}}"> {{ __('messages.contactus') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.vacancies.show')}}"> {{ __('messages.vacancies') }}</a>
              </li>
              <li class="nav-item">
                
              </li>
            </ul>
            
            <div class="social">
              @if(Route::has('login'))
                  @auth
                    <x-app-layout></x-app-layout>
                  @else
                  <a href="{{ route('login') }}" class="btn-main">
                    تسجيل الدخول
                    <span class="circle"></span>
                  </a>
                  @endauth
                @endif
               <div class="language">
                  <i class="fa-solid fa-chevron-left icon-select"></i>
                  <select class="form-control changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                  </select>
               </div>
  
                <a href="tel:{{config('setting.phone')}}" class="call-phone"><i class="fa-solid fa-phone"></i></a>
                {{-- <a href="whatsapp://send?phone=+01063335556" class="call-phone call-whats"><i class="fa-brands fa-whatsapp"></i></a> --}}
                <a href="https://api.whatsapp.com/send?phone={{config('setting.phone')}}" class="call-phone call-whats" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                
            </div>
          </div>
        </div>
    </nav>
</div>

@include('sweetalert::alert')