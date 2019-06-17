@extends('adminlayouts.master')
@section('title','| Setting')
@section('content')
  <h2>Settings </h2>
  <hr>
  <form  action="{{route('updatesetting')}}" method="post"  enctype="multipart/form-data">
    <div class="row">

      @csrf
      <div class="col-lg-6">
        <h3>Admin Panel</h3>

        <div class="row mt-3">
          <div class="col-lg-5">
            <label>Amount</label>
          </div>
          <div class="col-lg-4">
            <input type="text" name="amount"  value="@if ($projects == Null)
              {{ 0 }}
              @else
                {{ $projects->min_amt}}
            @endif">

          </div>

        </div>

        <div class="row mt-3">
          <div class="col-lg-5">
            <label>Meta Description :</label>
          </div>
          <div class="col-lg-4">
          <textarea class="form-control" name="meta_desc">{{$meta_desc}}
        </textarea>
          </div>

        </div>

        <div class="row mt-3">
          <div class="col-lg-5">
            <label>Meta Keywords :</label>
          </div>
          <div class="col-lg-4">
          <textarea class="form-control" name="meta_key">
          {{$meta_key}}</textarea>
          </div>

        </div>

         <div class="row mt-3">
          <div class="col-lg-5">
            <label>Meta og:image :</label>
          </div>
          <div class="col-lg-4">
            <input type="file" name="og">
          </div>

        </div>

        <div class="row mt-3">
          <div class="col-lg-5">
            <label>Title :</label>
          </div>
          <div class="col-lg-4">
            <input type="text" class="form-control" name="title" value="{{ $title }}">
          </div>

        </div>

        <div class="row mt-3">
          <div class="col-lg-5">
            <label>Select Logo: ( 190 * 40px )</label>
          </div>
          <div class="col-lg-4">
            <input type="file" name="update_logo">
          </div>
        </div>
        {{-- /end of row  --}}

        <div class="row mt-3">
          <div class="col-lg-5">
            <label>Sidebar background-color:</label>
          </div>
          <div class="col-lg-4">
            <input type="color" name="sideback_color" value="{{$background}}">
          </div>
        </div>
         {{-- /end of row --}}

         <div class="row mt-3">
          <div class="col-lg-5">
            <label>Sidebar Font-color:</label>
          </div>
          <div class="col-lg-4">
            <input type="color" name="side_fontcolor" value="{{$side_font_color}}">
          </div>
        </div>
        {{-- /end of row  --}}

      </div>
      {{-- /.col-lg-6 --}}
      <div class="col-lg-6">

        <h3>User Panel</h3>


        <div class="row mt-3">
          <div class="col-lg-5">
            <label>Navbar background-color:</label>
          </div>
          <div class="col-lg-4">
            <input type="color" name="navbar_backcolor" value="{{$nav_back}}">
          </div>

        </div>
        {{-- end of row  --}}

        <div class="row mt-3">
          <div class="col-lg-5">
            <label>Navbar Font-color:</label>
          </div>
          <div class="col-lg-4">
            <input type="color" name="navbar_fontcolor" value="{{$nav_font}}">
          </div>

        </div>
        {{-- end of row  --}}

        {{-- <div class="row mt-3">
          <div class="col-lg-5">
            <label>Navbar-Prediction color:</label>
          </div>
          <div class="col-lg-4">
            <input type="color" name="navbar_predict_color" value="{{$p_color}}">
          </div>

        </div>  --}}


          {{-- end of row  --}}

      </div>
      {{-- /.col-lg-6 --}}

    </div>

    {{-- end of row --}}
    <input type="submit" class="btn btn-success btn-lg mt-3"  value="Save"/>
  </form>

@endsection
