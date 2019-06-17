@extends('userlayouts.master')
@section('title','| ReadMore')
@section('user-content')
  <div class="container">
    <div class="row mt-2">
      <div class="col-md-8 offset-2">

        <h2 class="text-center">{{$projects->name}}</h2>
        {{-- <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#myModal"><i class="fa fa-money" aria-hidden="true"></i>
        Invest
      </button> --}}


      <p>{{$projects->description}}</p>
      <input type="hidden" name="getid" id="getid" value="{{$projects->id}}">

      {{-- {!!$pie->html() !!} --}}
      <div class="row  mt-3">
        <div class="col-md-10 project-link"><label>Project Link:</label><span>
          <a href="{{$projects->link}}"> {{$projects->link}}</a></span>
        </div>
      </div>

      <h3>Screenshots</h3>
      <div class="row mb-3">

        @php
        $images = explode(',',$projects->images);
        @endphp

        @foreach ($images as $image)
          <div class="col-md-6 mt-1 imgcollection">
            <div class="displaypic">
              <img src ="{{asset('images/'.$image)}}" width="90%">
            </div>
          </div>
          {{-- /.col-md-4 --}}
        @endforeach


      </div>
      <form action='{{ route('storeinvest') }}' method="post">
        @csrf
          <div class="invest-form text-center">
          <label class="mr-2">Make an investment</label>
          <input type="hidden" name="project_id" value="{{ $projects->id }}">

          <input type="text" name="amount" required class="mr-2">
         <input type="submit" class="btn btn-success btn-md" value="Invest" />
        </div>

    </form>
      {{--  /.row --}}
    </div>
    {{-- /.col-md-8 offset --}}
  </div>
  {{--  /.row --}}
  {{-- <div class="row offset-2 mt-3">
  <div class="col-md-5" style="font-size:20px;"><label>Link To Site :</label>
  <a href="{{$projects->link}}"> <b>Click Here</b></a>
</div>
</div> --}}
<div class="row mt-4">

  <div class="col-md-8">
    {!!$pie->html() !!}
    <br>
    <!-- Button to Open the Modal -->
    {{-- <div class="text-center">
      <button type="button" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#myModal"><i class="fa fa-money" aria-hidden="true"></i>
        Invest
      </button>
    </div> --}}

  </div>
  <div class="col-md-4">
    <div class="table-responsive">
      <table class="table table-hover table-striped">
        <thead class="thead-dark">
          <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Amount</th>
          </tr>
        </thead>

        <tbody>
          @php
          $i = 1;
          @endphp
          @foreach($datas as $data)
            <tr>
              <td>{{ $i }}</td>
              <td>{{ $data->name }}</td>
              <td>{{$data->total_amt}}</td>
            </tr>
            @php
            $i++;
            @endphp
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive --></div>
  </div>

</div>
{{-- /.container --}}
{{--
<!-- The Modal -->
<div class="modal" id="myModal">
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
<input type="hidden" name="project_id" value="{{ $projects->id }}">
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
{!! Charts::scripts() !!}
{!! $pie->script() !!}
@endsection
