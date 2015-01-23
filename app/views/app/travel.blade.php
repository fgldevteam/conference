@extends('app/layout')

@section('title')
My Travel Plans
@stop

@section('content')

Welcome {{ Auth::user()->first }} {{ Auth::user()->last }}
Your travel info
@stop
