@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <center>{{Session::get('message')}}</center>
</div>
@endif

@if(Session::has('message2'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <center>{{Session::get('message2')}}</center>
</div>
@endif

@if(Session::has('message3'))
<div class="alert alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <center>{{Session::get('message3')}}</center>
</div>
@endif

@if(Session::has('message4'))
<div class="alert alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <center>{{Session::get('message4')}}</center>
</div>
@endif


