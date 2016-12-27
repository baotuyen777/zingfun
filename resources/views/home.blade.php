<?php
/**
 * Created by PhpStorm.
 * User: tuyenbv
 * Date: 08-Jun-16
 * Time: 11:25 AM
 */
        ?>
@extends('templates.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>HRM</h1>
        </div>

        @if(Auth::check())
            Xin chào, {{Auth::user()->name}}!
            <a href="{{ url('/') }}/auth/logout">Đăng xuất</a>
            <h3>Thông tin người dùng</h3>
            <ul>
                <li>Tên:{{Auth::user()->name}}</li>
                <li>Email:{{Auth::user()->email}}</li>
            </ul>
            <a href="{{ url('/') }}/user/{{Auth::user()->id}}/edit" class="btn btn-default">Sửa lại</a>
        @else
            Chào bạn, vui lòng <a href="{{ url('/') }}/auth/login">Đăng nhập </a>
            hoặc <a href="{{ url('/') }}/auth/register">Đăng ký</a>
        @endif

    </div>
@stop