@extends('adminlayouts.master')
@section('title','| View Investors')
@section('content')
  <form method="post">
    @csrf
    <div class="row pt-3">
      <div class="col-md-9">
        <h3>Investors Details</h3>
      </div>
      <div class="col-md-3">
       <div class="form-group">
        <input type="text" class="form-control" id="myInput" style="border-radius: 15px;" name="search" placeholder="Search...">
      </div>
    </div>

    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-9 offset-1 mt-2">
        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead class="thead-dark">
              <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody id="myTable">
                @php
                  $i = 1;
                @endphp
               @foreach($investors as $investor)
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $investor->name }}</td>
                <td> @if ($investor->total_amt == Null)
                  {{ 0 }}
                  @else
                    {{ $investor->total_amt}}
                @endif</td>
                <td>
                  <a href="{{ route('investordetails',[$investor->id])}}" class="btn btn-primary">Details</a>
                </td>
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
    {{$investors->links()}}
  </form>
    <!-- /.row -->
@endsection
