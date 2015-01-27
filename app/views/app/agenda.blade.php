@extends('app/layout')

@section('title')
My Conference Agenda
@stop

@section('content')
@include('app/includes/signedinbar')
<div class="page-header">
    <div class="container">
        <h3>My Agenda</h3>
    </div>

</div>

<div class="container">


    agenda content
</div>
@stop
