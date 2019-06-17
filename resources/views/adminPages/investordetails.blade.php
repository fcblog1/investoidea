@extends('adminlayouts.master')
@section('title','| Investor Detail')
@section('content')
  {!!$pie->html() !!}


  <div class="row">
    <div class="col-md-9 offset-1 mt-2">
      <div class="table-responsive">
        <table class="table table-hover table-striped" id="myTable">
          <thead class="thead-dark">
            <tr>
              <th>S.N</th>
              <th>Project name</th>
              <th>Amount</th>
            </tr>
          </thead>

          <tbody>
              @php
                $i = 1;
              @endphp
             @foreach($details as $detail)
            <tr>
              <td>{{ $i }}</td>
              <td>{{ $detail->name }}</td>
              <td> @if ($detail->total_amt == Null)
                {{ 0 }}
                @else
                  {{ $detail->total_amt}}
              @endif</td>

            </tr>
            @php
              $i++;
            @endphp
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->

    </div>

    <!-- /.col-md-8 -->
  </div>



  {!! Charts::scripts() !!}
  {!! $pie->script() !!}
@endsection
