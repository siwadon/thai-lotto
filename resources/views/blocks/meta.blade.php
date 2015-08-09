<meta charset="UTF-8">
<meta property="og:title" content="{{ trans('messages.check') }} {{ trans('messages.on') }} {{ $prizes['date']['human'] }} | {{ trans('messages.pungyen') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:image" content="{{ asset('image/pungyen-facebook_post.jpg') }}" />
<meta property="og:description" content="{{ trans('messages.meta.og.description') }} {{ $prizes['prizes']['first'][0] }} - {{ implode(', ', $prizes['prizes']['last_three_digits']) }} - {{ $prizes['prizes']['last_two_digits'][0] }}" />
<meta name="description" content="{{ trans('messages.meta.description') }} {{ trans('messages.on') }} {{ $prizes['date']['human'] }} {{ trans('messages.prizes.first') }} {{ $prizes['prizes']['first'][0] }} - {{ trans('messages.prizes.last_three_digits') }} {{ implode(', ', $prizes['prizes']['last_three_digits']) }} - {{ trans('messages.prizes.last_two_digits') }} {{ $prizes['prizes']['last_two_digits'][0] }}" />
