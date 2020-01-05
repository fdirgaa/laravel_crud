@extends('layouts.main')
@section('content')

<h1>Home Page</h1>

@if(session('successMsg'))
<div class="alert alert-success" role="alert">
  {{ session('successMsg') }}
</div>

@endif


@endsection