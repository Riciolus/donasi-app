document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("donate");
    const openModalButton = document.getElementById("openModal");
    const closeModalButton = document.getElementById("closeModal");

    // Open modal
    openModalButton.addEventListener("click", () => {
        modal.classList.remove("hidden"); // Show the modal
    });

    // Close modal
    closeModalButton.addEventListener("click", () => {
        modal.classList.add("hidden"); // Hide the modal
    });
});
