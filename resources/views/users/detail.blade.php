<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

            <form method="POST" action="/user/{{$user->id}}">

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="name" >Name:</label>

                    <div class="h-10 bg-white py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none
                    focus:border-gray-400 focus:ring-0">{{$user->name}}</div>
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="email">Email:</label>

                    <div class="h-10 bg-white py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none
                    focus:border-gray-400 focus:ring-0">{{$user->email}} </div>
                </div>

                <a href="/user" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Back</a>
            </form>
        </div>
