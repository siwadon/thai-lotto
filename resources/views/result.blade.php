@extends('layouts.master')

@section('content')
    <h1>RESULT</h1>
    {{ $prize->count() }}
    @foreach ($prize as $p)
        {{ $p->prize }}
    @endforeach
