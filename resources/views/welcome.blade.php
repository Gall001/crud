@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of Users') }}</div>

                <div class="card-body">
                <a href="/user">Users List! (not finished)</a>
                </div>
                <div class="card-body">
                <a href="/contacts">Contact List!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
