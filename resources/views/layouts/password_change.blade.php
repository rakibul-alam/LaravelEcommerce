@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Change Your Password') }}</div>

                    <div class="card-body">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf

                            <div>
                                <label>Current Password</label>
                                <input type="password" name="old_password" class="form-control" required>
                            </div><br>
                            <div>
                                <label>New Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div><br>
                            <div>
                                <label>Current Password</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div><br>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
