const filtersButton = document.querySelector("#filters-button");
const filters = document.querySelector("#filters");

filtersButton.addEventListener("click", () => {
    if (filters.classList.contains("-translate-y-full")) {
        filters.classList.replace(
            "-translate-y-full",
            "animate-filter-slide-down"
        );
    } else {
        filters.classList.toggle("animate-filter-slide-down");
        filters.classList.toggle("animate-filter-slide-up");
    }
});

document.addEventListener("click", (e) => {
    if (
        !e.target != filters &&
        filters.classList.contains("animate-filter-slide-down") &&
        e.target != filtersButton &&
        !isDescendant(filters, e.target)
    ) {
        filters.classList.replace(
            "animate-filter-slide-down",
            "animate-filter-slide-up"
        );
        console.log("test");
    }
});

const isDescendant = function (parent, child) {
    let node = child.parentNode;
    while (node) {
        if (node === parent) {
            return true;
        }
        node = node.parentNode;
    }
    return false;
};
