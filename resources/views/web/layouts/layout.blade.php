<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:700,900" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico" />
    @yield('style')
</head>
<body>
    <div id="loader-wrapper">

    </div>
    <div id="content-block">
        @include('web.layouts.header')
        <div class="header-empty-space"></div>
        @yield('content')
        @include('web.layouts.footer')
    </div>
    @include('web.layouts.modallogin')

    @yield('scripts')
    
</body>

</html>