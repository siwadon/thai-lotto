<h2>{{ $name }}</h2>
@foreach ($prizes as $record)
    @if ($record->type == $type)
        {{ $record->prize }}
    @endif
@endforeach