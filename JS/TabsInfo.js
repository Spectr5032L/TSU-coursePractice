document.addEventListener("DOMContentLoaded", function () {
    var tabs = document.querySelectorAll(".tabs-nav li");
    var tabContents = document.querySelectorAll(".tabs-content div");

    tabs.forEach(function (tab, index) {
        tab.addEventListener("click", function (event) {
            event.preventDefault();

            tabs.forEach(function (tab) {
                tab.classList.remove("active");
            });
            tabContents.forEach(function (content) {
                content.style.display = "none";
            });

            this.classList.add("active");
            tabContents[index].style.display = "block";
        });
    });
});