@props([
    'title' => 'Home' 
])

<!doctype html> 
    <html lang="en" data-theme="caramellatte">
 
    <x-nav />


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

@vite(['resources/css/app.css', 'resources/js/app.js'])

<!--
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
-->
<body>

    
</body>

<main class="max-w-5xl mx-auto p-6 data-theme caramellatte">

{{ $slot }} 

</main>

</html>