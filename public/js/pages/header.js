document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelector(".toggle-icon")
        .addEventListener("click", function () {
            document.querySelector(".header").classList.toggle("active-header");
        });

    document.querySelectorAll(".dropable").forEach((drop) => {
        drop.addEventListener("click", function (e) {
            drop.querySelector(".dropdown").classList.toggle("active-dropdown");
            document
                .querySelector(".header.active-header")
                .classList.toggle("increase");
        });
    });
});
