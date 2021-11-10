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
            <h2 class="text-center">Update your CV</h2>
        </div>
       
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Chech your fields</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cvs.update',$cv->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name</strong>
                    <input type="text" name="name" value="{{ $cv->name }}" class="form-control" placeholder="Full Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email</strong>
                    <textarea class="form-control" style="height:100px" name="email" placeholder="Email">{{ $cv->email }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Specilization</strong>
                    <textarea class="form-control" style="height:100px" name="spec" placeholder="Specilization">{{ $cv->spec }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Years of experience</strong>
                    <textarea class="form-control" style="height:100px" name="year" placeholder="Years of experience">{{ $cv->year }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Previous works</strong>
                    <textarea class="form-control" style="height:300px" name="pwork" placeholder="Previous works">{{ $cv->pwork }}</textarea>
                </div>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('cvs.index') }}"> Back</a>

            <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>
    </form>
@endsection