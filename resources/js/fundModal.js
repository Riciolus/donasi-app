document.addEventListener("DOMContentLoaded", function () {
    const openModalBtn = document.getElementById("openFormModal");
    const closeModalBtn = document.getElementById("closeFormModal");
    const modal = document.getElementById("donate-form");
    const modalContent = document.getElementById("modal-content");

    const openWithdrawalBtn = document.getElementById("openWithdrawalModal");
    const closeWithdrawalBtn = document.getElementById("closeWithdrawalModal");
    const withdrawalModal = document.getElementById("withdrawal-form");
    const withdrawalContent = document.getElementById("withdrawal-content");

    modal.classList.add("hidden");
    withdrawalModal.classList.add("hidden");

    openWithdrawalBtn &&
        openWithdrawalBtn.addEventListener("click", () => {
            withdrawalModal.classList.remove("hidden"); // Show modal container
            setTimeout(() => {
                withdrawalContent.classList.remove("translate-y-full"); // Animate content into view
            }, 10); // Delay to allow DOM changes
        });

    closeWithdrawalBtn.addEventListener("click", () => {
        withdrawalContent.classList.add("translate-y-full"); // Animate content out of view
        withdrawalContent.addEventListener(
            "transitionend",
            () => {
                withdrawalModal.classList.add("hidden"); // Hide the modal after transition ends
            },
            { once: true } // Ensure this event only triggers once
        );
    });

    // Open Modal
    openModalBtn &&
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

document
    .getElementById("numberInputWithdrawal")
    .addEventListener("input", function (e) {
        let value = e.target.value.replace(/\./g, ""); // Remove existing dots
        value = Number(value).toLocaleString("id-ID"); // Format using Indonesian locale
        e.target.value = value;
    });

document.querySelectorAll(".shortcutButton").forEach(function (button) {
    button.addEventListener("click", function () {
        let amount = this.getAttribute("data-amount");

        // Create a hidden input to hold the amount value
        const hiddenInput = document.createElement("input");
        hiddenInput.type = "hidden";
        hiddenInput.name = "amount";
        hiddenInput.value = amount;

        // Append the hidden input to the form
        document.querySelector("form").appendChild(hiddenInput);

        // Submit the form automatically
        document.querySelector("form").submit();
    });
});
