@extends('adminlayouts.master')
@section('title','| Edit Project')
@section('content')


  <h2>Edit Project</h2><hr>


        <form action ="{{route('updateproject',[$projects->id])}}" method="post" enctype="multipart/form-data">
          @csrf
    <div class="row">
      <div class="col-md-3 ">

        <label>Project Name</label>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <input type="text" id="pname" name="updatepname" class="form-control" value="{{$projects->name}}" placeholder="project name" >
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
          <textarea class="form-control" cols="9" rows="4" name="updatedesc" id="desc">{{str_limit($projects->description,200)}}</textarea>
        </div>
      </div>
      <!-- /.col-md-2 -->
    </div>

    <!-- end of row -->

    <div class="row">
      <div class="col-md-3">

        <label>Upload Image</label>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <input type="file"  accept="image/x-png,image/gif,image/jpeg"  multiple id="update_images" name="update_images[]" class="form-control">
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
          <input type="text" id="link" name="updatelink" value="{{$projects->link}}" class="form-control">
        </div>
      </div>
      <!-- /.col-md-2 -->
    </div>
    <!-- end of row -->

    <div class="row">
      <div class="col-md-3 "> </div>
      <div class="col-md-2 ">


          <input type ="submit" value="Update" name="updateproject" class="btn btn-success btn-md"/>

          <input type="hidden" name="hidden_img_arr" value="{{$projects->images}}">
      </div>

    </div>
    </form>

  <h2 class="mt-5 text-center">List Of ScreenShots</h2><hr>
  <div class="row mt-5">

  @foreach($arr_img as $single_img)

      @csrf

        <div class="col-lg-4 mt-2">

          <img src={{asset('images/'.$single_img)}} width="300px" height="200px"/><br>
          <a href=" {{ route('img_delete',[$projects->id,$single_img])}}" class="btn btn-danger mt-2" >delete</a>
        </div>

    @endforeach

</div>
    <!-- end of row -->


@endsection
