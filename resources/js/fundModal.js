document.addEventListener("DOMContentLoaded", function () {
    const openModalBtn = document.getElementById("openFormModal");
    const closeModalBtn = document.getElementById("closeFormModal");
    const modal = document.getElementById("donate-form");
    const modalContent = document.getElementById("modal-content");

    modal.classList.add("hidden");

    // Open Modal
    openModalBtn.addEventListener("click", () => {
        modal.classList.remove("hidden");
        setTimeout(() => {
            modalContent.classList.remove("translate-y-full");
        }, 10); // Delay to allow DOM changes
    });

    // Close Modal
    closeModalBtn.addEventListener("click", () => {
        modalContent.classList.add("translate-y-full");
        modalContent.addEventListener(
            "transitionend",
            () => {
                modal.classList.add("hidden");
            },
            { once: true }
        );
    });
});

document
    .getElementById("donationForm")
    .addEventListener("submit", function (e) {
        let input = document.getElementById("numberInput");
        let cleanedValue = input.value.replace(/\./g, ""); // Remove dots
        input.value = cleanedValue; // Set clean value before submitting
    });

document.getElementById("numberInput").addEventListener("input", function (e) {
    let value = e.target.value.replace(/\./g, ""); // Remove existing dots
    value = Number(value).toLocaleString("id-ID"); // Format using Indonesian locale
    e.target.value = value;
});
