@extends('layouts.app')
 
@section('content')
 
@section('header')
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Create new form</span>
        <h3 class="page-title">User Registration </h3>
        </div>
    </div>
@endsection
    <form method="POST" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
 
@endsection