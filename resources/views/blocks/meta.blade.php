<meta charset="UTF-8">
<meta property="og:title" content="ตรวจหวย วันที่ {{ $prizes['date']['human'] }} | ปังเย็น" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:image" content="{{ asset('image/pungyen-facebook_post.jpg') }}" />
<meta property="og:description" content="#ตรวจหวย เลขที่ออก {{ $prizes['prizes']['first']['data'][0] }} - {{ implode(', ', $prizes['prizes']['last_three_digits']['data']) }} - {{ $prizes['prizes']['last_two_digits']['data'][0] }}" />
<meta name="description" content="ตรวจหวย ตรวจสลากกินแบ่งรัฐบาล งวดวันที่ {{ $prizes['date']['human'] }} เลขที่ออก รางวัลที่หนึ่ง {{ $prizes['prizes']['first']['data'][0] }} - เลขท้ายสามตัว {{ implode(', ', $prizes['prizes']['last_three_digits']['data']) }} - เลขท้ายสองตัว {{ $prizes['prizes']['last_two_digits']['data'][0] }}" />
