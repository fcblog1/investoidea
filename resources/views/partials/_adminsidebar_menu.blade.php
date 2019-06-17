<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->


    {{-- Admin nav items --}}

    {{-- prediction points items --}}

    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
      <i class="nav-icon fa fa-industry"></i>
        <p>
          Project
          <i class="right fa fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          {{-- <a href="#" class="nav-link"> --}}
          <a href="{{route('addproject')}}" class="nav-link">
            <i class="fa fa-plus nav-icon"></i>
            <p>Add Project</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('listproject')}}" class="nav-link">
          {{-- <a href="{{route('listpredictionpoints')}}" class="nav-link"> --}}
            <i class="fa fa-bars nav-icon"></i>
            <p>List Project</p>
          </a>
        </li>
      </ul>
    </li>

    {{-- end of prediction points items --}}


    {{-- view user items --}}

{{-- investor points items --}}

<li class="nav-item has-treeview">
  <a href="#" class="nav-link">
    <i class="nav-icon fa fa-money"></i>
    <p>
      Investor
      <i class="right fa fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('pendinginvestor')}}" class="nav-link">
        <i class="fa fa-plus nav-icon"></i>
        <p>Pending Investor</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{route('viewinvestor')}}" class="nav-link">
      {{-- <a href="{{route('listpredictionpoints')}}" class="nav-link"> --}}
        <i class="fa fa-bars nav-icon"></i>
        <p>List Investors</p>
      </a>
    </li>
  </ul>
</li>

{{-- end of investor points items --}}

    <li class="nav-item">
      <a href="{{route('viewsetting')}}" class="nav-link">
        <i class="nav-icon fa fa-trophy"></i>
        <p>
          Setting
        </p>
      </a>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
