Polymer('app-element', {
    ready: function() {
        this.result_date = window.initialData.date;
        this.prizes = [
        { label: 'รางวัลที่หนึ่ง', data: window.initialData.prizes.first },
        { label: 'เลขท้ายสองตัว', data: window.initialData.prizes.last_two_digits },
        { label: 'เลขท้ายสามตัว', data: window.initialData.prizes.last_three_digits },
        { label: 'รางวัลที่สอง',  data: window.initialData.prizes.second },
        { label: 'รางวัลที่สาม',  data: window.initialData.prizes.third },
        { label: 'รางวัลที่สี่',   data: window.initialData.prizes.fourth },
        { label: 'รางวัลที่ห้า',   data: window.initialData.prizes.fifth },
        ];
    }
});