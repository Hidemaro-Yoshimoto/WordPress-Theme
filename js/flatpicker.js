// console.log(flatpickr('#js-datepicker'));

let minDate = new Date();
minDate = minDate.setDate(minDate.getDate());
let maxDate = new Date();
maxDate = maxDate.setMonth(maxDate.getMonth() + 1);

flatpickr("#js-datepicker", {
  locale: "ja",
  defaultDate: new Date(),
  enableTime: true,
  dateFormat: "Y-m-d-D-H:i",
  altFormat: "Y年m月d日（D） H:i",
  minTime: "12:00",
  maxTime: "17:30",
  // min maxで選べる範囲を指定するかfrom to で指定するか
  // minDate,
  // maxDate,
  // enable: [{
  //   from: 'today',
  //   to: new Date().fp_incr(31)
  // }]
  // 週末を選択不可に
  disable: [(date) => date.getDay() === 0 || date.getDay() === 6],
});

const fetchHolidays = () => {
  const today = new Date();
  const year = today.getFullYear();
  // console.log(year);
  const results = fetch(
    `https://holidays-jp.github.io/api/v1/${year}/date.json`
  );
  return results
    .then((res) => {
      return res.json();
    })
    .then((res) => {
      console.log(res);
    })
    .catch((err) => {
      console.log(err);
    });
};
