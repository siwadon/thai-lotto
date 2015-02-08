<section>
    <md-subheader class="md-primary">{{ $name }}</md-subheader>
    <md-card class="md-whiteframe-z1">
        <md-card-content layout="row" layout-align="space-around center" layout-wrap>
            <div layout="row" layout-sm="column" layout-align="space-around" ng-show="loading">
                <md-progress-circular md-mode="indeterminate"></md-progress-circular>
            </div>
            <div flex="20" class="md-padding md-margin" ng-repeat=" prize in prizes.prizes.{{ $type }}" ng-hide="loading">[[ prize ]]</div>
        </md-card-content>
    </md-card>
</section>