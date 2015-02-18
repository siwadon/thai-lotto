@extends('layouts.sitemap')

@section('content')
  @foreach ($urls as $url)
    <url>
      <loc>{{ $url }}</loc> 
    </url>
  @endforeach
@stop