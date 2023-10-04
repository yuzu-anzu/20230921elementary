@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
<div class="attendance__content">
    <div class="attendance__content">
        <div class="attendance-table">
            <table class="attendance-table_inner">
                <tr class="attendance-table_date">
                    <th class="attendance-table_name">名前</th>
                    <th class="attendance-table_start">勤務開始</th>
                    <th class="attendance-table_end">勤務終了</th>
                    <th class="attendance-table_rest">休憩時間</th>
                    <th class="attendance-table_work">勤務時間</th>

                <tr class="attendance-table__row">
                   <td class="attendance-table__item">テスト</td>
                   <td class="attendance-table__item">テスト</td>
                   <td class="attendance-table__item">テスト</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@csrf
    <div class="form__group">
      <div class="form__group-content">

@endsection