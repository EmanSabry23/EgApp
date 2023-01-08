<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EG APP Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{URL::asset('admin/assets/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{URL::asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/assets/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/assets/js/select.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('user/assets/fontawesome-free-6.1.1-web/css/all.css')}}"> <!--library font-awesome-5-->
  <!-- End plugin css for this page -->
  <link rel="stylesheet" href="{{URL::asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <!-- inject:css -->
  <link rel="stylesheet" href="{{URL::asset('admin/assets/css/vertical-layout-light/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/assets/css/styleEdit.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{URL::asset('admin/assets/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.includes.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('admin.includes.settingPanal')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.includes.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.includes.footer')
        <!-- partial -->
        </div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{URL::asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{URL::asset('admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{URL::asset('admin/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{URL::asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{URL::asset('admin/assets/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{URL::asset('admin/assets/js/off-canvas.js')}}"></script>
  <script src="{{URL::asset('admin/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{URL::asset('admin/assets/js/template.js')}}"></script>
  <script src="{{URL::asset('admin/assets/js/settings.js')}}"></script>
  <script src="{{URL::asset('admin/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{URL::asset('admin/assets/js/dashboard.js')}}"></script>
  <script src="{{URL::asset('admin/assets/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

