@extends('layouts.master')

@section('content')
    <md-toolbar ng-controller="DateController" layout="row" layout-align="space-between center">
        <div class="md-toolbar-tools" flex>
            <h1>Lottery Result from [[ selected_date | date ]]</h1>
        </div>
        <md-input-container ng-init="selected_date = '{{ $prizes['date'] }}'">
            <select ng-model="selected_date" ng-options="date | date for date in dates"></select>
        </md-input-container>
    </md-toolbar>
    <md-content>
        @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'First prize',   'type' => 'first'])
        @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Last 3 Digits', 'type' => 'last_three_digits'])
        @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Last 2 Digits', 'type' => 'last_two_digits'])
        @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Second prizes', 'type' => 'second'])
        @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Third prizes',  'type' => 'third'])
        @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Fourth prizes', 'type' => 'fourth'])
        @include('partials.prize_list', ['prizes' => $prizes, 'name' => 'Fifth prizes',  'type' => 'fifth'])
    </md-content>
@stop
