@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of Users') }}</div>

                <div class="card-body">
                @foreach ($user as $user)
                    <article class="mb-2">
                    <p class="text-x1 font-bold text-blue-500">{{$user->name}}</p>
                    </article>
                    <hr class="mt-2">
                @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
