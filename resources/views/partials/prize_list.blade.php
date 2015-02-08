<section>
    <md-subheader class="md-primary">{{ $name }}</md-subheader>
    <md-card class="md-whiteframe-z1">
        <md-card-content layout="row" layout-align="space-around center" layout-wrap>
            @foreach ($prizes['prizes'][$type] as $prize)
                <div flex="20" class="md-padding md-margin">{{ $prize }}</div>
            @endforeach
        </md-card-content>
    </md-card>
</section>