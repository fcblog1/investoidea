@extends('adminlayouts.master')
@section('title','| List Project')
@section('content')

  <div class="row">
    <div class="col-md-9 mt-2">
      <h3>List of Project</h3>
    </div>
    <div class="col-md-3">
     <div class="form-group mt-2">
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
              <th>Description</th>
              <th>Amount</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody  id="myTable">
            <?php $sn=1; ?>
            @foreach($projects as $project)
            <tr>
              <td>{{ $sn}}</td>
              <td>{{$project->name}}</td>
              <td>{{str_limit($project->description,200)}}</td>
              <td>{{$project->min_amt}}</td>
              <td style="display:flex;">
                <a href="editproject/{{$project->id}}" class="btn btn-primary mr-2"><i class="fa fa-pencil-square-o"><span class="ml-1">Edit</span></i></a>
                <form action={{ route('delete', $project->id) }} method="post">
                  @csrf
                 {{-- @method('DELETE') --}}
              <button type="submit" name= "delete"  class="btn btn-danger fa fa-trash-o"/><span class="ml-1">Delete</span></button>
                </form>
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

  {{ $projects->links() }}

  <!-- /.row -->
@endsection
