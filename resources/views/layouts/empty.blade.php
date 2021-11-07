
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @include('inc.css')
</head>
<body class="hold-transition login-page">

@yield('content')
@include('inc.script')
</body>
</html>
