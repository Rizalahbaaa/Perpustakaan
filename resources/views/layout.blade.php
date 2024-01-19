<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="font-sans bg-gray-100">

    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <a href="/" class="text-2xl font-bold ">Penerimaan Anggota Puskesmas</a>
        </div>
    </nav>

    <div class="container mx-auto my-8">
        @yield('content')
    </div>

</body>
</html>
