<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">لوحة التحكم</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
          <i class="mdi mdi-account-multiple menu-icon"></i>
          <span class="menu-title">الاعضاء</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="users">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.users.index')}}">عرض الكل</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories">
          <i class="mdi mdi-book-multiple menu-icon"></i>
          <span class="menu-title">الصناعات المقدمة</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="categories">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.category.create') }}">اضافة جديدة</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.category.index') }}">عرض الكل</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#teamwork" aria-expanded="false" aria-controls="teamwork">
          <i class="mdi mdi-worker menu-icon"></i>
          <span class="menu-title"> فريق العمل </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="teamwork">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.teamWork.create') }}">اضافة جديدة</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.teamWork.index') }}">عرض الكل</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#services" aria-expanded="false" aria-controls="services">
          <i class="mdi mdi-server menu-icon"></i>
          <span class="menu-title">  الخدمات </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="services">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.service.create') }}">اضافة جديدة</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.service.index') }}">عرض الكل</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#servicescategory" aria-expanded="false" aria-controls="servicescategory">
          <i class="mdi mdi-server-minus menu-icon"></i>
          <span class="menu-title">  فئه الخدمات </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="servicescategory">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.serviceCategory.create') }}">اضافة جديدة</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.serviceCategory.index') }}">عرض الكل</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#portfolio" aria-expanded="false" aria-controls="portfolio">
          <i class="mdi mdi-file-image menu-icon"></i>
          <span class="menu-title">  اعمالنا </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="portfolio">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.portfolio.create') }}">اضافة جديدة</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.portfolio.index') }}">عرض الكل</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contactAdmin.index') }}">
          <i class="mdi mdi-contact-mail menu-icon"></i>
          <span class="menu-title"> تواصل معنا</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.vacancies_Admin.show') }}">
          <i class="mdi mdi-message-reply-text menu-icon"></i>
          <span class="menu-title">  وظائف شاغرة</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.newsletter.index')}}">
          <i class="mdi mdi-email menu-icon"></i>
          <span class="menu-title">صندوق البريد</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.permissions.index')}}">
          <i class="mdi mdi-buffer menu-icon"></i>
          <span class="menu-title">Permissions</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.roles.index')}}">
          <i class="mdi mdi-clipboard-text menu-icon"></i>
          <span class="menu-title">Roles</span>
        </a>
      </li>
    </ul>
</nav>

<script>
      // Toggle active Class log
      $('.sidebar-offcanvas .nav-item').click(function(){
            // e.preventDefault();
            $(this).addClass('active').siblings().removeClass('active');
        //     $('.' + $(this).data('tab')).fadeIn();
        // $('.bind').not('.' +$(this).data('tab')).hide();
    });
</script>