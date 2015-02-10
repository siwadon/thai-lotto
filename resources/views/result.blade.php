@extends('layouts.master')

@section('content')
    <script>
        window.initialData = {!! json_encode($prizes) !!}
    </script>
    <md-toolbar layout="row" layout-align="space-between center" ng-init="selected_date = prizes.date">
        <div class="md-toolbar-tools" flex>
            <h1 ng-bind="'Lottery result on ' + (selected_date | date)"></h1>
        </div>
        <md-input-container>
            <select ng-model="selected_date" ng-options="date | date for date in dates" ng-change="get_result()"></select>
        </md-input-container>
    </md-toolbar>
    <md-content>
        @include('partials.prize_list', ['name' => 'First prize',   'type' => 'first'])
        @include('partials.prize_list', ['name' => 'Last 2 Digits', 'type' => 'last_two_digits'])
        @include('partials.prize_list', ['name' => 'Last 3 Digits', 'type' => 'last_three_digits'])
        @include('partials.prize_list', ['name' => 'Second prizes', 'type' => 'second'])
        @include('partials.prize_list', ['name' => 'Third prizes',  'type' => 'third'])
        @include('partials.prize_list', ['name' => 'Fourth prizes', 'type' => 'fourth'])
        @include('partials.prize_list', ['name' => 'Fifth prizes',  'type' => 'fifth'])
    </md-content>
@stop
