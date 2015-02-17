@extends('layouts.master')

@section('content')
    <script>
        window.initialData = {!! json_encode($prizes) !!}
    </script>
    <md-toolbar layout="row" layout-align="space-between center" ng-init="selected_date = prizes.date">
        <div class="md-toolbar-tools" flex>
            <h1 ng-bind="'ตรวจหวย วันที่ ' + (selected_date | date)"></h1>
        </div>
        <md-input-container>
            <select ng-model="selected_date" ng-options="date | date for date in dates.slice(0,24)" ng-change="get_result()"></select>
        </md-input-container>
    </md-toolbar>
    <md-content>
        @include('partials.prize_list', ['name' => 'รางวัลที่หนึ่ง',   'type' => 'first'])
        @include('partials.prize_list', ['name' => 'รางวัลเลขท้ายสองตัว', 'type' => 'last_two_digits'])
        @include('partials.prize_list', ['name' => 'รางวัลเลขท้ายสามตัว', 'type' => 'last_three_digits'])
        @include('partials.prize_list', ['name' => 'รางวัลที่สอง', 'type' => 'second'])
        @include('partials.prize_list', ['name' => 'รางวัลที่สาม',  'type' => 'third'])
        @include('partials.prize_list', ['name' => 'รางวัลที่สี่', 'type' => 'fourth'])
        @include('partials.prize_list', ['name' => 'รางวัลที่ห้า',  'type' => 'fifth'])
    </md-content>
@stop
