document.addEventListener("DOMContentLoaded", function () {
  var checkboxes = document.querySelectorAll(".expand-checkbox");

  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener("change", function () {
      checkboxes.forEach(function (otherCheckbox) {
        if (otherCheckbox !== checkbox) {
          otherCheckbox.checked = false;
        }
      });
    });
  });
});
