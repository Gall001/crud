@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Site') }}</div>


                <div class="card-body">
                <a href="/contacts">Contact List!</a>
                </div>

                <div class="card-body">
                <a href="/user">Users of the site list</a>
                </div>

                <div class="card-body">
                Explanation: When I was reading the prompt I got the idea that I needed to make a CRUD with the users of the site…  a few hours laters as i was stuck on changing the email/password in the edit page i went to read the prompt again and saw that the crud was not supposed to be made with the users, because i spent a few hours trying to do that I decided instead of deleting it leaving it in the site for you to understand why I didn't had the time to finish everything that was asked in the CRUD
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
