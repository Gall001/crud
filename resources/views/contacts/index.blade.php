<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacts</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

        <h1 class="text-4x1 font-bold mb-4">My Contacts</h1>

        @foreach($contacts as $contact)

        <article class="mb-2">
            <a href="/contacts/{{$contact->id}}/detail" class="text-x1 font-bold text-blue-500">{{$contact->name}}</a>
        </article>

        <div style="display: flex;">
                    @if (Route::has('login'))
                        @auth
                            <a href="/contacts/{{$contact->id}}/edit" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Edit</a>
                        @endauth
                    @endif

                    @if (Route::has('login'))
                        @auth
                            <form method="POST" action="{{$contact->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Delete</button>
                            </form>
                        @endauth
                    @endif
                    </div>
        <hr class="mt-2">
        @endforeach

        @if (Route::has('login'))
            @auth
                <a href="/contacts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mt-6 shadow-1g rounded hover:shadow">Add contact</a>
            @endauth
        @endif

        </div>
    </body>
</html>
