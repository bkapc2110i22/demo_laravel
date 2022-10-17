@extends('layouts.master')
@section('title','About Page')
@section('main')
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


            <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </div>
</div>
@stop()

@section('css')
<style>
body {
    background-color: lightgray
}
</style>
@stop()