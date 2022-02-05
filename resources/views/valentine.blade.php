<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Make Your Valentine</title>
    </head>
    <body>
        Dostałeś walentynkę od {{$valentine->cupid_name}}
    </body>
</html>
