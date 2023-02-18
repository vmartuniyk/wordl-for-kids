<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css'])
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <title>Try Cat</title>
</head>
<body>
    <div id="game" x-data="{guessesAllow: 3, wordLength: 3 }">
        <template x-for="row in Array.from({ length: guessesAllow })">
            <div class="row">
                <template x-for="tile in Array.from({length: wordLength})">
                    <div class="tile"></div>
                </template>
            </div>
        </template>
    </div>
</body>
</html>
