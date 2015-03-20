<!DOCTYPE html>
<html lang="en">
<head>
    <title>ตรวจหวย วันที่ {{ $prizes['date']['human'] }} , ตรวจลอตเตอรี่ เลขเด็ด | ปังเย็น</title>
    <base href="/">
    @include('blocks/meta', ['prizes' => $prizes])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('blocks/google_analytics')
    <script src="bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <script>
        window.initialData = {!! json_encode($prizes) !!}
    </script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="import" href="app-vulcanized.html">
</head>
<body>
    <app-element></app-element>
    <script src="{{ asset('js/newrelic.js') }}"></script>
</body>
</html>
<html>
