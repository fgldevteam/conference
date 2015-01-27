@extends('app/layout')

@section('title')
My Surveys
@stop

@section('content')
@include('app/includes/signedinbar')
<div class="page-header">
    <div class="container">
        <h3>Surveys</h3>
    </div>

</div>

<div class="container">


    Survey content
</div>
@stop
