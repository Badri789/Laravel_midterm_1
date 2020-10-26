<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title')
        <title>Home</title>
    @show
    <style>
        table {width:100%; border: 1px solid black; border-collapse: collapse}
        th {border: 1px solid black; text-align: left}
        td {border: 1px solid black; text-align: left}
        h1 {text-align: center; color: darkred}
    </style>
</head>
<body>
    @section('header')
        <h1>Employee Management</h1>
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>


