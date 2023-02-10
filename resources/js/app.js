// header filters showing

const filtersButton = document.querySelector("#filters-button");
const filters = document.querySelector("#filters");

if (filtersButton){
    filtersButton.addEventListener("click", () => {
        if (filters.classList.contains("-translate-y-full")) {
            filters.classList.replace("-translate-y-full","animate-filter-slide-down");
        } else {
            filters.classList.toggle("animate-filter-slide-down");
            filters.classList.toggle("animate-filter-slide-up");
        }
    });
}



// hide filters when click outside
document.addEventListener("click", (e) => {
    if (
        !e.target != filters && filters.classList.contains("animate-filter-slide-down") && e.target != filtersButton && !isDescendant(filters, e.target)
    ) {
        filters.classList.replace("animate-filter-slide-down", "animate-filter-slide-up");
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



// update profile picture preview on register page

const uploadProfilePicture = document.querySelector("#upload-profile-picture");
const uploadedProfilePicture = document.querySelector("#uploaded-profile-picture");

uploadedProfilePicture.addEventListener('click', ()=>{
    uploadProfilePicture.click();
});

uploadProfilePicture.addEventListener('change', ()=>{
    if (uploadProfilePicture.files && uploadProfilePicture.files[0]) {
        const reader = new FileReader();
        reader.onload = (e) => {
            uploadedProfilePicture.src = e.target.result;
        }
    reader.readAsDataURL(uploadProfilePicture.files[0]);
    }
});
