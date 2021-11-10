
{{--Author(s) name: bishrulhaq
, Date: 25/10/2021
, Title of program/source code: CRUD in Laravel 5.8
, Code version
, and Availability: https://bishrulhaq.com/laravel/crud-in-laravel/ 
--}}

@extends('cvs.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Apply Now</h2>
        </div>

    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Check your fields</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cvs.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <strong>Specilization</strong>
                    <input type="text" name="spec" class="form-control" placeholder="Specilization">
                </div>
                <div class="form-group">
                    <strong>Years of experience</strong>
                    <input type="text" name="year" class="form-control" placeholder="Years of experience">
                </div>
                <div class="form-group">
                    <strong>Previous works</strong>
                    <input type="text" name="pwork" style="height:300px" class="form-control" placeholder="Previous works">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"><strong>Done</strong></button>
            </div>
        </div>

    </form>
@endsection