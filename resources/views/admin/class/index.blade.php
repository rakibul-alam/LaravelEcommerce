@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('All Class') }}</div>
                    <div class="card-body">
                        <a href="" class="btn btn-sm btn-primary" style="float:right;">Add New</a>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Class Name</td>
                                    <td>Company Name Short</td>
                                    <td>Action</td>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes as $key => $class)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $class->class_name }}</td>
                                        <td>{{ $class->company_name_short }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-info">edit</a>
                                            <a href="" class="btn btn-sm btn-danger">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
