document.addEventListener('DOMContentLoaded', function () {
    var datePickers = bulmaCalendar.attach('[type="date"]', {
      overlay: true,
      minDate: '2018-01-01',
      maxDate: '2018-12-31'
    });
    // datePickers now contains an Array of all datePicker instances
    // To use Events API jus add a listener like below:
    // datepickerInstance.on(event, function(datepicker) {});
  });