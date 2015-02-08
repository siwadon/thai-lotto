<section>
    <md-subheader class="md-primary">{{ $name }}</md-subheader>
    <md-card class="md-whiteframe-z1">
        <md-card-content layout="row" layout-align="space-around center" layout-wrap>
            <div flex="20" class="md-padding md-margin" ng-repeat=" prize in prizes.prizes.{{ $type }}">[[ prize ]]</div>
        </md-card-content>
    </md-card>
</section>