<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <nav>
        <x-nav-link>
            Home
        </x-nav-link>
        <x-nav-link>
            About
        </x-nav-link>
        <x-nav-link>
            Contact
        </x-nav-link>
    </nav>


    {{ $slot }}
</body>

</html>
