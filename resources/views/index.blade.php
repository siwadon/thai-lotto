@extends('layouts.master')

@section('content')
    <h1>INDEX</h1>
    {{ $prize->count() }}
    @foreach ($prize as $p)
        {{ $p->prize }}
    @endforeach
