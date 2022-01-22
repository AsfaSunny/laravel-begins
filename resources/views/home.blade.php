@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Table') }}</div>

                <div class="card-body">
                
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($all_user as $show_user)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $show_user->name }}</td>
                            <td>{{ $show_user->email }}</td>
                            <td>-</td>
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
