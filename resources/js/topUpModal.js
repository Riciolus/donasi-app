document.addEventListener("DOMContentLoaded", function () {
    const openModalBtn = document.getElementById("openTopupModal");
    const closeModalBtn = document.getElementById("closeTopupModal");
    const modal = document.getElementById("topup-form");
    const modalContent = document.getElementById("topup-content");

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
