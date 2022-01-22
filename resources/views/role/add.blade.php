@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">{{ __('User Role') }}</div>

                <div class="card-body">
                
                    <form action="{{url('/role/add')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="role">
                            @error('role')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-info text-light">Submit</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-lg-8"></div>
    </div>
</div>
@endsection