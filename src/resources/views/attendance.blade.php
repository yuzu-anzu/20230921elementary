@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
@endsection

@section('content')
<div class="attendance__content">
    <div class="attendance__content">
        <div class="attendance-table">
            <table class="attendance-table_inner">
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