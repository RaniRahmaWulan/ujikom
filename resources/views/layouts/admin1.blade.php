<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('template/img/logo/logo.png')}}" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('template/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   @include('layouts.includes.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
      @include('layouts.includes.navbar')
        <!-- Topbar -->


        <section>
            @yield('content')
        </section>

        <!-- Container Fluid-->
      
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>

        <div class="container my-auto py-2">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - distributed by
              <b><a href="https://themewagon.com/" target="_blank">themewagon</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('template/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('template/js/demo/chart-area-demo.js')}}"></script>  
  <script>
    $(document).ready(function(){
      $('#dataTable').DataTable();
    });
  </script>
</body>



</html>