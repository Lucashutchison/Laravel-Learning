@props([
    'title' => 'Unspecified' 
])

<!doctype html> 
<html lang="en">
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

<body>
    <nav> 
    <a href="/">Home</a>
    <a href="/about">About Us</a>
    <a href="/contact">Contact Us</a>
    </nav>
</body>

<main>

{{ $slot }} 

</main>

</html>