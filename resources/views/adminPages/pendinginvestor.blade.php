@extends('adminlayouts.master')
@section('title','| Pending Investors')
@section('content')

  <div class="row pt-3">
    <div class="col-md-9">
      <h2>Newly Registered Investor List</h2>
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
              <th>Designation</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody id="myTable">
            <?php $sn=1; ?>
            @foreach($pendings as $pending)
            <tr>
              <td>{{ $sn}}</td>
              <td>{{$pending->name}}</td>
              <td>{{$pending->designation}}</td>
              <td>{{$pending->email}}</td>
              <td>{{$pending->contact}}</td>
              <td>
                <a href="{{route('approvalsend',[$pending->id])}}" class="btn btn-primary">Approve</a>
                {{-- <form action={{ route('delete', $project->id) }} method="post">
                  @csrf
                 @method('DELETE')
                  <input type="submit" name= "delete" value="delete" class="btn btn-danger"/>
                </form> --}}
              </td>
            </tr>
            <?php $sn++; ?>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->

    </div>

    <!-- /.col-md-8 -->
  </div>
  {{ $pendings->links() }}

  <!-- /.row -->
@endsection
