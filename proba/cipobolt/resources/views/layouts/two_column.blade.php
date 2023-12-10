<!-- resources/views/layouts/two_column.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div style="display: flex;">
        <div style="width: 50%;">
            @section('left')
                {{-- Bal oldali tartalom --}}
            @show
        </div>
        <div style="width: 50%;">
            @section('right')
                {{-- Jobb oldali tartalom --}}
            @show
        </div>
    </div>
</body>
</html>
