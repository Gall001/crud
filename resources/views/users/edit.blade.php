    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

            <form method="POST" action="/user/{{$user->id}}">

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="name">Name:</label>

                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none
                    focus:border-gray-400 focus:ring-0" id="name" name="name" value="{{$user->name}}">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="email">Email:</label>

                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none
                    focus:border-gray-400 focus:ring-0" id="email" name="email" value="{{$user->email}}">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="password">Password:</label>

                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none
                    focus:border-gray-400 focus:ring-0" id="password" name="password" value="New Password">
                </div>

                @if (Route::has('login'))
                    @auth
                        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Update</button>
                    @endauth
                @endif

            </form>

            @if (Route::has('login'))
                @auth
                    <form method="POST" action="/user/{{$user->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Delete</button>
                    </form>
                @endauth
            @endif
            <a href="/user" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Cancel</a>
        </div>
