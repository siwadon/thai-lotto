@extends('layouts.sitemap')

@section('content')
  @foreach ($urls as $url)
    <?php
      $lang           = preg_match('/\/th\//', $url) ? 'th' : 'en';
      $alternate_lang = $lang == 'th' ? 'en' : 'th';
      $alternate_url  = str_replace("/$lang/", "/$alternate_lang/", $url);
    ?>
    <url>
      <loc>{{ $url }}</loc> 
      <xhtml:link
          rel="alternate"
          hreflang="{{ $alternate_lang }}"
          href="{{ $alternate_url }}"
      />
      <xhtml:link
          rel="alternate"
          hreflang="{{ $lang }}"
          href="{{ $url }}"
      />
    </url>
  @endforeach
@stop
