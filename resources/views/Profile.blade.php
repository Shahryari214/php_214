@extends('layouts.user')
@section('content')
<div class="container">
@if(\Session::has('error'))
<div class="alert alert-danger">
{{\Session::get('error')}}
</div>
@endif
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading btn-primary">WELCOME TO USER ROUTE</div>
</div>
</div>
</div>
@endsection