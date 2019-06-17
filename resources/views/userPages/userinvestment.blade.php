@extends('userlayouts.master')
@section('title','| My Investment')
@section('user-content')

<div class="row">
  <div class="col-md-8">

    <!-- /.row -->
        {!!$pie->html() !!}
    </div>
      <div class="col-md-4 content">
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
                $sn=1;
              @endphp

              @foreach($investments as $investment)
                <tr>
                  <td>{{$sn}}</td>
                  <td>{{$investment->name}}</td>
                  <td>{{$investment->total_amt}}</td>

                </tr>
                @php
                  $sn++;
                @endphp
              @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->

      </div>

      <!-- /.col-md-8 -->
    </div>

  <!-- /.row -->
  {!! Charts::scripts() !!}
  {!! $pie->script() !!}
@endsection
