document.addEventListener("DOMContentLoaded", function() {
    var checkbox = document.getElementById("subscribe");
    var statusElement = document.getElementById("status");

    checkbox.addEventListener("change", function() {
      if (checkbox.checked) {
        statusElement.textContent = "Active";
      } else {
        statusElement.textContent = "Not Active";
      }
    });
  });