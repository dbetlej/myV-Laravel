<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Make Your Valentine</title>
    </head>
    <body>
        <form action="/valentine" method="POST">
            @csrf
            <input placeholder="your valentine e-mail" name="email" type="email" class="v-input">
            <input required placeholder="your name" name="cupid_name" type="text" class="v-input">
            <input type="submit" value="make valentine" class="v-input">
        </form>
    </body>
</html>
