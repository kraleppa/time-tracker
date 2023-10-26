<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>


    <form action="/events" method="POST">
        @csrf
       <input type="text" name="name">
       <input type="text" name="description">
       <input type="date" name="start_date">
       <input type="date" name="end_date">
       <input type="text" name="image_url">

       <button type="submit">Add</button> 
    </form>
    <body>
        @foreach ($events as $event)

            <div>{{ $event->name }}</div>

        @endforeach
                
    </body>
</html>
