<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>
    <style>
        .w-5 {
            width: 12px;
        }
    </style>
    @livewireStyles
</head>
<body>
    <div class="container">
        @livewire('opportunities')
    </div>

    @livewireScripts
</body>
</html>
