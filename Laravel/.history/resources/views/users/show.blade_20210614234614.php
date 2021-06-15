@extends('layouts.layout')

@section('content')

<div class='usershowPage'>
  <div class='container'>
    <header class="header">
      <p class='header_logo'>
      <a href="{{ route('home') }}">
      <img src="/storage/images/techpit-match-icon.png">
      </a>
      </p>
    </header>
    <div class='userInfo'>
      <div class='userInfo_img'>
      <img src="{{$user -> img_name}}">
      </div>
      <div class='userInfo_name'>{{ $user -> name }}</div>
      <div class='userInfo_sex'>{{ $value -> sex }}</div>
      <div class='userInfo_age'>{{ $user -> age }}</div>
      <div class='userInfo_area'>{{ $user -> area }}</div>
      <div class='userInfo_want_talk'>{{ $user -> want_talk }}</div>
      <div class='userInfo_can_talk'>{{ $user -> can_talk}}</div>
      <div class='userInfo_occupation'>{{ $user -> occupation}}</div>
      <div class='userInfo_selfIntroduction'>{{ $user -> self_introduction }}</div>
    </div>
    
      <div class='userAction'>
        <div class="userAction_edit userAction_common">
          <i class="fas fa-edit fa-2x"></i>
          <span>情報を編集</span>
        </div>
        <div class='userAction_logout userAction_common'>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"><i class="fas fa-cog fa-2x"></i></a>
          <span>ログアウト</span>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    
  </div>
</div>

@endsection