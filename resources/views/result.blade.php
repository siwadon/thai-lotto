@extends('layouts.master')

@section('content')
    <h1>RESULT from {{ $prizes->first()->date }}</h1>

    @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'First prize',   'type' => 'first'])
    @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Last 3 Digits', 'type' => 'last_three_digits'])
    @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Last 2 Digits', 'type' => 'last_two_digits'])
    @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Second prizes', 'type' => 'second'])
    @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Third prizes',  'type' => 'third'])
    @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Fourth prizes', 'type' => 'fourth'])
    @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Fifth prizes',  'type' => 'fifth'])

