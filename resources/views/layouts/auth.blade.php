<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Quirk Responsive Admin Templates</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/quirk.css') }}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/fontasw/font-awesome.min.css') }}">
    </head>

    <body class="signwrapper">

        <div class="sign-overlay"></div>
        <div class="signpanel"></div>
        @yield('content');
    </body>
</html>
