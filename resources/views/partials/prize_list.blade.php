<section>
    <md-subheader class="md-primary">{{ $name }}</md-subheader>
    <md-card class="md-whiteframe-z1">
        <md-card-content layout="row" layout-align="space-around center" layout-wrap>
            @foreach ($prizes as $record)
                @if ($record->type == $type)
                    <div flex="20" class="md-padding md-margin">{{ $record->prize }}</div>
                @endif
            @endforeach
        </md-card-content>
    </md-card>
</section>