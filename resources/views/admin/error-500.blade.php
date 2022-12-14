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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center text-center error-page bg-info">
        <div class="row flex-grow">
          <div class="col-lg-7 mx-auto text-white">
            <div class="row align-items-center d-flex flex-row">
              <div class="col-lg-6 text-lg-right pr-lg-4">
                <h1 class="display-1 mb-0">500</h1>
              </div>
              <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                <h2>SORRY!</h2>
                <h3 class="font-weight-light">Internal server error!</h3>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-center mt-xl-2">
                <a class="text-white font-weight-medium" href="{{url('/')}}">Back to home</a>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 mt-xl-2">
                <p class="text-white font-weight-medium text-center">Copyright &copy; 2022  All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
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
