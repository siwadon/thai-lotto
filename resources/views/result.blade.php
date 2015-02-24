<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lottery | Pungyen.com</title>
    <base href="/">
    <meta charset="UTF-8">
    @include('blocks/opengraph', ['prizes' => $prizes])
    @include('blocks/google_analytics')
    <script src="bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <script>
        window.initialData = {!! json_encode($prizes) !!}
    </script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="import" href="app-element.html">
</head>
<body>
    <app-element></app-element>
</body>
</html>
<html>
