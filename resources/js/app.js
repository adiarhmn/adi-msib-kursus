import "./bootstrap";

// Close BUtton alert
document.addEventListener("DOMContentLoaded", function () {
    var close = document.getElementById("close-button");
    if (close) {
        close.addEventListener("click", function () {
            close.parentElement.style.display = "none";
        });
    }
});
