@extends('adminlayouts.master')
@section('title','| Add Project')
@section('content')

  <h2>Create Project</h2><hr>
  <form method="post" action="{{route('insertproject')}}" enctype="multipart/form-data">
    @csrf
  <div class="row">
    <div class="col-md-3 ">

      <label>Project Name</label>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <input type="text" id="pname" name="pname" class="form-control" placeholder="project name" value="{{ old('pname') }}" >
      </div>
    </div>
    <!-- /.col-md-2 -->
  </div>
  <!-- end of row -->
  <div class="row">
    <div class="col-md-3 ">

      <label>Description</label>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <textarea class="form-control" cols="9" rows="4" name="desc" id="desc">{{ old('desc') }}</textarea>
      </div>
    </div>
    <!-- /.col-md-2 -->
  </div>
  <!-- end of row -->

  <div class="row">
    <div class="col-md-3">

      <label>Screenshots</label>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <input type="file"  accept="image/x-png,image/gif,image/jpeg"  multiple id="img1" name="images[]" class="form-control" value="{{ old('images[]') }}">
      </div>
    </div>
    <!-- /.col-md-2 -->
  </div>
  <!-- end of row -->


  <div class="row">
    <div class="col-md-3">

      <label>Permalink</label>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <input type="text" id="link" name="link" class="form-control" value="{{ old('link') }}">
      </div>
    </div>
    <!-- /.col-md-2 -->
  </div>
  <!-- end of row -->

  {{-- <div class="row">
    <div class="col-md-3 ">
      <label>Select match</label>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <select class="form-control" name="match" id="match" required>
          <option>world cup</option>
        </select>
      </div>
    </div>
    <!-- /.col-md-2 -->
  </div>
  <!--end of row  --> --}}
{{--
  <div class="row">
    <div class="col-md-3 ">
      <label>Date</label>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <input type="date" id="date" name="date" class="form-control" required>
      </div>
    </div>
    <!-- /.col-md-2 -->
  </div>
  <!-- end of row --> --}}

  {{-- <div class="row">
    <div class="col-md-3 ">
      <label>Time</label>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <input type="time" class="form-control" name="time" required>

      </div>
    </div>
    <!-- /.col-md-2 -->
  </div>
  <!-- end of row --> --}}
{{--
  <div class="row">
    <div class="col-md-3 ">
      <label>Team A</label>
    </div>

    <div class="col-md-2">
      <div class="form-group">
          <select class="form-control bfh-countries" name="teamA" id="teamA_name" required>

          </select>


      </div>
    </div>
    <!-- /.col-md-2 -->
    <div class="col-md-5">
      <span id="flagA"></span>
      </div>
  </div>
  <!-- end of row --> --}}
{{--
  <div class="row">
    <div class="col-md-3 ">
      <label>Team B</label>
    </div>

    <div class="col-md-2">
      <div class="form-group">
          <select class="form-control bfh-countries"  name="teamB" id="teamB_name" required></select>

      </div>
    </div>

    <div class="col-md-5">
      <span id="flagB"></span>

    </div>
    <!-- /.col-md-2 -->
  </div> --}}
  <!-- end of row -->
{{--
  <div class="row">
    <div class="col-md-3 ">
      <label>Location</label>
    </div>

    <div class="col-md-2">
      <div class="form-group">
        <input type="text" class="form-control" name="location" required>
      </div>
    </div>
    <!-- /.col-md-2 -->
  </div>
  <!-- end of row --> --}}

  <div class="row">
    <div class="col-md-3 "> </div>
    <div class="col-md-2 ">
      <button class="btn btn-success btn-md form-control">submit</button>
    </div>

  </div>

  </form>
  <!-- end of row -->


@endsection
