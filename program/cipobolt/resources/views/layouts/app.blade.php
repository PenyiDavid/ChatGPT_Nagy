<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div
        class="text-center hover:bg-gray-600 hover:cursor-pointer hover:text-gray-300 bg-gray-500 bg-opacity-75 shadow-2xl p-4 rounded-lg m-auto lg:w-10/12 md:w-10/12 w-full my-5">
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
        <span class="italic">
            Ez a app.blade.php-ból származik
        </span>
    </div>

    @yield('content')
</body>

</html>