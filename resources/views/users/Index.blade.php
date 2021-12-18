@extends('layouts.app')

@section('content')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of Users') }}</div>

                <div class="card-body">
                @foreach ($user as $user)
                    <article class="mb-2">
                    <a href="/user/{{$user->id}}/detail" class="text-x1 font-bold text-blue-500">{{$user->name}}</a>

                    <div style="display: flex;">
                    @if (Route::has('login'))
                        @auth
                            <a href="/user/{{$user->id}}/edit" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Edit</a>
                        @endauth
                    @endif

                    </div>

                    </article>
                    <hr class="mt-2">
                @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
