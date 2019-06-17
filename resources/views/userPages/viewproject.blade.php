@extends('userlayouts.master')
@section('title','| View Project')
@section('user-content')
<h2 class="mt-5 text-center">List of Project </h2>

<div class="container">
  <div class="row">
    <div class="col-md-8 offset-2">
  @foreach($projects as $project)
  <div class="project_display mt-5">
      @php
      $arr_img = explode(',',$project->images);
      @endphp
    <div class="row">
      <div class="col-md-4">
      <div class="project_img">
          <img src="{{asset('images/'.$arr_img[0])}}" width="100%"height="100%" alt="ScreenShots">
        </div>
      </div>
      <div class="col-md-8 content" >
        <h3>{{$project->name}}</h3> @php
          $id = Crypt::encrypt($project->id)

        @endphp
          <p class="font-weight-normal">{{str_limit($project->description,200)}}</p>
          <a class="btn btn-success btn-md" href="{{route('readmore',[$project->id])}}">View Details</a>
          {{-- <button type="button" class="btn btn-primary viewinvest ml-2"  data-toggle="modal" data-target="#myModal"   projectid="{{$project->id}}"><i class="fa fa-money" aria-hidden="true"></i>
          Invest
          </button> --}}

      </div>
      {{-- /.col-md-8 --}}
    </div>
    {{-- /.row --}}
  </div>
  {{-- /.project_display --}}


@endforeach
</div>

</div>

<!-- News jumbotron -->

{{-- @foreach($projects as $project)
<div class="jumbotron text-center hoverable p-4">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">

      <!-- Featured image -->
      <div class="view overlay">
        @php
        $arr_img = explode(',',$project->images);
        @endphp
        <img src="{{asset('images/'.$arr_img[0])}}" class="img-fluid" alt="ScreenShots">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">


      <h4 class="h4 mb-4">{{$project->name}}</h4>

      <p class="font-weight-normal">{{str_limit($project->description,200)}}</p>
    <br>
      <a class="btn btn-success btn-md" href="{{route('readmore',[$project->id])}}">Read more</a>

    <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary viewinvest"  data-toggle="modal" data-target="#myModal"   projectid="{{$project->id}}"><i class="fa fa-money" aria-hidden="true"></i>
Invest
</button>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
@endforeach
<!-- News jumbotron --> --}}

<!-- The Modal -->
{{-- <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Make an Investment</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form action='{{ route('storeinvest') }}' method="post">
            @csrf
            <input type="hidden" name="project_id" class="project_id" value="">
            <div class="row">
              <div class="col-md-3"></div>
                <div class="col-md-2">
                  <label>Amount : </label>
                </div >
                <div class="col-md-3">
                  <input type="text" name="amount" class="form-control" required>
                </div >
            </div>
            <div class="row mt-1">
              <div class="col-md-5"></div>
               <div class="col-md-3">
                  <input type="submit" class=" btn btn-success btn-md form-control" value="Invest" />
                </div>
            </div>

          </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div> --}}
</div>

@endsection
