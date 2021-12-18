<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

            <form method="POST" action="/contacts">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="name">Name:</label>

                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none
                    focus:border-gray-400 focus:ring-0" id="name" name="name">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="contact">Contact:</label>

                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none
                    focus:border-gray-400 focus:ring-0" id="contact" name="contact">
                </div>

                <div class="mb-4">
                    <label class="font-bold text-gray-800" for="email">Email:</label>

                    <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none
                    focus:border-gray-400 focus:ring-0" id="email" name="email">
                </div>

                <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">Create</button>

            </form>
        </div>
    </body>
</html>
