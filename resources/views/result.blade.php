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
    <style>
        @media (max-width: 479px) {
            .prize {
                font-size: 2.25em;
                margin: 0.5em 0;
            }
        }
        @media (max-width: 839px) and (min-width: 480px) {
            .prize {
                font-size: 2.25em;
                margin: 0.5em 0;
            }
        }
        @media (min-width: 840px) {
            .prize {
                font-size: 3em;
                margin: 0.4em 0;
            }
            h4 {
                margin: 0;
            }
        }
        .mdl-card {
            min-height: 1em;
        }
        .mdl-layout__content section:not(last-of-type) {
            width: 99%;
            padding: 0;
            margin: 0.2em auto 0.5em auto;
        }
        .mdl-card__supporting-text {
            padding: 0;
        }
        .mdl-navigation__link {
            font-size: 1.25em;
        }
    </style>
</head>
<body>

<div class="mdl-layout mdl-js-layout mdl-layout--overlay-drawer-button mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">ตรวจหวย {{ $prizes['date']['human']}}</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="https://www.facebook.com/pungyendotcom">Facebook</a>
      </nav>
    </div>
  </header>

  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">ตรวจหวยย้อนหลัง</span>
    <nav class="mdl-navigation">
      @foreach ($dates as $date)
        <a class="mdl-navigation__link" href="/result/{{ $date['numeric'] }}">{{ $date['human'] }}</a>
      @endforeach
    </nav>
  </div>

  <main class="mdl-layout__content">
    @foreach ($prizes['prizes'] as $prize)
    <section class="section--center mdl-grid mdl-shadow--2dp">
      <div class="mdl-card mdl-grid mdl-cell mdl-cell--12-col">
        <div class="mdl-card__supporting-text mdl-cell--12-col">
          <h4>{{ $prize['label'] }}</h4>
        </div>
        @foreach ($prize['data'] as $number)
        <div class="prize mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--2-col-phone">{{ $number }}</div>
        @endforeach
      </div>
    </section>
    @endforeach
  </main>
  <footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=120268998061814";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/pungyendotcom" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pungyendotcom"><a href="https://www.facebook.com/pungyendotcom">ปังเย็น</a></blockquote></div></div>
  </footer>
</div>

    <script>
      var cb = function() {
        var f = document.createElement('link'); f.rel = 'stylesheet';
        f.href = 'https://fonts.googleapis.com/icon?family=Material+Icons';
        var h = document.getElementsByTagName('head')[0];
        h.parentNode.insertBefore(f, h);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(cb);
      else window.addEventListener('load', cb);
    </script>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
    <script src="{{ asset('js/newrelic.js') }}"></script>
</body>
</html>
<html>
