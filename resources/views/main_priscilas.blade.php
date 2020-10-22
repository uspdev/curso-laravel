<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@section('title') Exemplo @show</title>
    </head>
    <body>
       @section('content') @show
    </body>
    
</html>