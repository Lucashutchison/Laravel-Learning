@props([
    'title' => 'Unspecified' 
])

<!doctype html> 
<html lang="en" class="bg-gray-700 p-6 max-w-4xl mx-auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        nav > a {
            color: blueviolet; 
            text-decoration: none;
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
<body>
    <nav> 
    <a href="/ideas">All Ideas</a>
    </nav>
</body>

<main>

{{ $slot }} 

</main>

</html>