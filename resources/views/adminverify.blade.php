@extends('userlayouts.master')
@section('user-content')
  <div class="container text-center"><h1 style="color:#515781;">Please Wait Until Admin Accept</h1>
    <div class="row mt-3">

      <div class="col-md-3"></div>
      <div class="col-md-3">
<img src = {{asset('images/loading.gif')}} width="500px" height="400px" class="rounded-circle" />
</div>
</div>
</div>
</div>



@endsection
