<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$title ?? 'Workopia | Find and Create Jobs'}}</title>
</head>
<body class="bg-gray-100">
    <x-header />
    <h1>Welcome To Workopia</h1>
    <main class="container mx-auto p-4 mt-4">
        {{$slot}}
    </main>
</body>
</html>