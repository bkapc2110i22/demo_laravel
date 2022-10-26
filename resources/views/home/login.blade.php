@extends('layouts.master')
@section('title','About Page')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-4">

            <form action="" method="POST" role="form">
                @csrf
                <legend>Form title</legend>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Input Email">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Input password">
                </div>

            <p>
                Nếu bạn chưa có tài khoản, <a href="{{ route('home.register') }}">Click vào đấy để </a> đăng ký
            </p>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>
    </div>
</div>

@stop()