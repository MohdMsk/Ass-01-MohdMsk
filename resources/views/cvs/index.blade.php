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
            <h2 class="text-center"><strong>Welcome to CV Website</strong></h2>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($cvs) > 0)
        <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Specilization</th>
                <th>Years of experience</th>
                <th>Previous works</th>

                <th width="280px">More</th>
            </tr>
            @foreach ($cvs as $cv)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $cv->name }}</td>
                    <td>{{ $cv->email }}</td>
                    <td>{{ $cv->spec }}</td>
                    <td>{{ $cv->year }}</td>
                    <td>{{ $cv->pwork }}</td>
                    <td>
                        <form action="{{ route('cvs.destroy',$cv->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('cvs.show',$cv->id) }}">View</a>
                            <a class="btn btn-primary" href="{{ route('cvs.edit',$cv->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
  
    @else
        <div class="alert alert-alert">Done.</div>

    @endif

    {!! $cvs->links() !!}

@endsection