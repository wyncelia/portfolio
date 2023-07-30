// script.js

function toggleContent() {
    var content = document.getElementById("hiddenContent");
    var toggleButton = document.getElementById("toggleButton");

    if (content.style.display === "none") {
        content.style.display = "block";
        toggleButton.textContent = "hide"; // Change button text to "Hide" when content is visible
    } else {
        content.style.display = "none";
        toggleButton.textContent = "show"; // Change button text to "Show" when content is hidden
    }
}
