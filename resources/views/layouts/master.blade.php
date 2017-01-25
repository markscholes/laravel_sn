<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>@yield('title')</title>
        <!-- This is master.blade templete placeholder, which always start with a @
        then the name of the function, in this case yield
        then the placeholder name which can be access by the other views-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    @include('includes/header')
    <!-- Blade has a different way of accessing files.
    It appears as, as the blade is situated in the views folder, when accesing files that is where we start from,
     we then do it as normal except we do not include the .blade.php end of the filename-->
    <body>
      <div class="container">
        @yield('content')
      </div>
    </body>
</html>
