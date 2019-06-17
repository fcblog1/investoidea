@include('partials._userheader')
@include('partials._usernavbar')
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-3 mt-3">
        @include('partials._messages')
      </div>
    </div>
  </div>
  @yield('user-content')

  <!-- REQUIRED SCRIPTS -->

  <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
