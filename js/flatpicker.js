// console.log(flatpickr('#js-datepicker'));

let minDate = new Date();
minDate = minDate.setDate(minDate.getDate());
let maxDate = new Date();
maxDate = maxDate.setMonth(maxDate.getMonth() + 1);

const config = flatpickr("#js-datepicker", {
  locale: "ja",
  defaultDate: new Date(),
  enableTime: true,
  altFormat: "Y-m-d-D-H:i",
  dateFormat: "Y年m月d日（D） H:i",
  minTime: "12:00",
  maxTime: "17:30",

  // 常に表示
  // inline: 'true',

  // min maxで選べる範囲を指定するかfrom to で指定するか
  minDate,
  maxDate,
  // enable: [{
  //   from: 'today',
  //   to: new Date().fp_incr(31)
  // }]

  // 週末を選択不可に
  // disable: [(date) => date.getDay() === 0 || date.getDay() === 6],

  plugins: [new confirmDatePlugin({})],

  // 参考：https://tr.you84815.space/flatpickr/theFlatpickrInstance.html
  onChange: function () {
    document.getElementById("selectedDatesDisp").innerHTML = this.selectedDates;
    document.getElementById("dispCurrentYear").innerHTML = this.currentYear + '年が選択されました';
    document.getElementById("dispCurrentMonth").innerHTML =
      this.currentMonth + 1 + '月が選択されました';
  },
});

const fp = flatpickr("#js-flatpicker", config);

// const fetchHolidays = () => {
//   const today = new Date();
//   const year = today.getFullYear();
//   // console.log(year);
//   const results = fetch(
//     `https://holidays-jp.github.io/api/v1/${year}/date.json`
//   );
//   return results
//     .then((res) => {
//       return res.json();
//     })
//     .then((res) => {
//       console.log(res);
//     })
//     .catch((err) => {
//       console.log(err);
//     });
// };
