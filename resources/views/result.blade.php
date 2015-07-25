<!DOCTYPE html>
<html lang="th">
<head>
    <title>ตรวจสลากกินแบ่งรัฐบาล ตรวจหวย วันที่ {{ $prizes['date']['human'] }} | ปังเย็น</title>
    <base href="/">
    @include('blocks/meta', ['prizes' => $prizes])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('blocks/google_analytics')

    <script>
        window.initialData = {!! json_encode($prizes) !!}
    </script>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .mdl-card {
            min-height: 1em;
        }
        .mdl-layout__content section:not(last-of-type) {
            width: 99%;
            margin-top: 0.2em;
            margin-bottom: 0.5em;
        }
    </style>
</head>
<body>

<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">ตรวจหวย</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="https://www.facebook.com/pages/ปังเย็น/106598272788838">Facebook</a>
      </nav>
    </div>
  </header>

  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">เลือกวันที่</span>
    <nav class="mdl-navigation">
      @foreach ($dates as $date)
        <a class="mdl-navigation__link" href="/result/{{ $date['numeric'] }}">{{ $date['human'] }}</a>
      @endforeach
    </nav>
  </div>

  <main class="mdl-layout__content">
    @foreach ($prizes['prizes'] as $prize)
    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
      <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card__supporting-text">
          <h4>{{ $prize['label'] }}</h4>
          @foreach ($prize['data'] as $number)
            {{ $number }}
          @endforeach
        </div>
      </div>
    </section>
    @endforeach
  </main>
</div>

    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
    <script src="{{ asset('js/newrelic.js') }}"></script>
</body>
</html>
<html>
