document.addEventListener("DOMContentLoaded", function() {
    var languageBtn = document.getElementById("language-btn");
    var dropdownContent = document.getElementById("dropdown-content");

    languageBtn.addEventListener("click", function() {
        dropdownContent.classList.toggle("show");
    });
});