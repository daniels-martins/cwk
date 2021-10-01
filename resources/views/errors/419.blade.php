@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))

@section('content')
  <a href="/" class="btn btn-pry px-5 py-3 c-white">Go Home</a>
@endsection
