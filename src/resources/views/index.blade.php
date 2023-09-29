@extends('layouts.App')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="main_content">
  <div class="attendance__alert">
  お疲れ様です
  </div>

  <div class="attendance__content">
    <div class="attendance__panel">
      <form class="attendance__button" action='index' method="post">
        <button class="attendance__button-submit" type="submit" input type="time">勤務開始</button>
      </form>
      <form class="attendance__button">
        <button class="attendance__button-submit" type="submit" input time="time">勤務終了</button>
      </form>
  </div>
  <div class="rest__content">
      <div class="rest__panel">
          <form class="rest__button">
              <button class="rest__button-submit" type="submit" input time="time">休憩開始</button>
          </form>
          <form class="rest__button">
              <button class="rest__button-submit" type="submit" input time="time">休憩終了</button>
          </form>
      </div>
  </div>
</div>
@endsection