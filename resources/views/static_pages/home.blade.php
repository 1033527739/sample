@extends('layout.default')
@section('content')
  <h1>主页</h1>
  <li>
    <a href="{{route('home')}}">主页</a>
    <a href="{{route('help')}}">帮助</a>
    <a href="{{route('about')}}">关于</a>
    <a href="{{route('signup')}}">注册</a>
  </li>
@stop
