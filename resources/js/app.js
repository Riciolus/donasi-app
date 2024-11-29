function showCategory(category) {
    // Hide all category content divs
    document.querySelectorAll(".category-content").forEach(function (div) {
        div.style.display = "none";
    });

    document
        .querySelectorAll(".category-btn")
        .forEach((btn) => btn.classList.remove("border-blue-500"));
    button.classList.add("border-blue-500");
    // Show the selected category content div
    document.getElementById(category).style.display = "block";
}

// Show the first category by default
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".category-btn").click();
});
