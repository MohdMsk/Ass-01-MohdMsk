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
            <h2 class="text-center">View CV</h2>
        </div>
    </div>

    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name</strong>
                    <input readonly type="text" name="name" value="{{ $cv->name }}" class="form-control" placeholder="Full Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email</strong>
                    <textarea readonly class="form-control" name="email" placeholder="Email">{{ $cv->email }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Specilization</strong>
                    <textarea readonly class="form-control"  name="spec" placeholder="Specilization">{{ $cv->spec }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Years of experience</strong>
                    <textarea readonly class="form-control"  name="year" placeholder="Years of experience">{{ $cv->year }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Previous works</strong>
                    <textarea readonly class="form-control" style="height:300" name="pwork" placeholder="Previous works">{{ $cv->pwork }}</textarea>
                </div>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('cvs.index') }}"> Back</a>
        </div>
    </div>
@endsection