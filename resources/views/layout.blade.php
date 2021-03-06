<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TodoMVC</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <h1><a href="{{ url('/') }}">TodoMVC</a></h1>                                    
            <div>
                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a> - 
                <a href="{{ LaravelLocalization::getLocalizedURL('fr', null, [], true) }}">Français</a>
            </div>
            @if(Session::has('status'))
            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span>
                <em>{{ Session::get('status') }}</em>
            </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>
