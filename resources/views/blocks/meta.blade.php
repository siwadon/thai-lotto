<meta charset="UTF-8">
<meta property="og:title" content="ตรวจหวย วันที่ {{ $prizes['date']['human'] }} | ปังเย็น" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:image" content="{{ asset('image/pungyen-facebook_post.jpg') }}" />
<meta property="og:description" content="#ตรวจหวย เลขที่ออก {{ $prizes['prizes']['first'][0] }} - {{ implode(', ', $prizes['prizes']['last_three_digits']) }} - {{ $prizes['prizes']['last_two_digits'][0] }}" />
<meta name="description" content="#ตรวจหวย เลขที่ออก รางวัลที่หนึ่ง {{ $prizes['prizes']['first'][0] }} - เลขท้ายสามตัว {{ implode(', ', $prizes['prizes']['last_three_digits']) }} - เลขท้ายสองตัว {{ $prizes['prizes']['last_two_digits'][0] }}" />
