@include('partials._adminheader')

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    @include('partials._adminnavbar')


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:{{$background}};">
      @include('partials._adminlogo')

      <!-- Sidebar -->
      <div class="sidebar">

        @include('partials._adminsidebar_userpanel')

        @include('partials._adminsidebar_menu')
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- /.Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


      <!-- Main content -->
      <div class="content">
        <div class="container-fluid display">
          {{-- @include('./partials/_messages') --}}
          @include('partials._messages')
          @yield('content')

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
  <script>
  $('document').ready(function(){
    $('#msg').delay(2000).hide(500);
  });
  </script>

</body>
</html>
