@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <a href="{{ route('class.index') }}" class="btn btn-info btn-sm">Class</a>
                        <a href="" class="btn btn-danger btn-sm">Students</a>
                        <br>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }} {{ Auth::user()->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
