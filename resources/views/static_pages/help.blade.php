
@extends('layout.default')
@section('content')
  <h1>帮助</h1>
  <li>
    <a href="{{route('home')}}">主页</a>
    <a href="{{route('help')}}">帮助</a>
    <a href="{{Route('about')}}">关于</a>
  </li>
@stop
