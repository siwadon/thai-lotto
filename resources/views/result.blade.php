@extends('layouts.master')

@section('content')
    <h1>RESULT</h1>
    {{ $prizes->count() }}
    @foreach ($prizes as $record)
        {{ $record->prize }}
    @endforeach
