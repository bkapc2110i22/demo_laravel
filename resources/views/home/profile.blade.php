@extends('layouts.master')
@section('title','About Page')
@section('main')
<h2>My Profile</h2>

<form action="" method="post">
@csrf
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>{{$customer->id}}</th>
            </tr>
            <tr>
                <th>Name</th>
                <th><input type="text" class="form-control" value="{{$customer->name}}"></th>
            </tr>
            <tr>
                <th>Email</th>
                <th>{{$customer->email}}</th>
            </tr>
            <tr>
                <th>Gender</th>
                <th>{{$customer->gender}}</th>
            </tr>

            <tr>
                <th></th>
                <th>
                    
                    <button type="button" class="btn btn-primary">Update</button>
                    
                </th>
            </tr>
        </thead>

    </table>
</form>

@stop()

@section('css')
<style>
body {
    background-color: lightgray
}
</style>
@stop()