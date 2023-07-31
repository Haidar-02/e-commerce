function previewImage(event) {
    rightSection = document.querySelector(".right-section");
    const previewImage = document.getElementById("previewImg");

    if (event.target.files && event.target.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            previewImage.src = e.target.result;
            rightSection.style.display = "flex";
        };

        reader.readAsDataURL(event.target.files[0]);
    } else {
        previewImage.src = "";
    }
}
const submitItem = document.getElementById("SubmitButton");
const itemTitle = document.getElementById("itemTitle");
const itemDescription = document.getElementById("itemDescription");
const itemPrice = document.getElementById("itemPrice");
const itemCategory = document.getElementById("itemCategory");
const itemImage = document.getElementById("itemImage");

document.onload = function () {
    rightSection = document.querySelector(".right-section");
    const previewImage = document.getElementById("previewImg");
    const itemImage = document.getElementById("itemImage");

    if (itemImage.files && itemImage.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            previewImage.src = e.itemImage.result;
            rightSection.style.display = "flex";
        };

        reader.readAsDataURL(itemImage.files[0]);
    } else {
        previewImage.src = "";
        rightSection.style.display = "none";
    }
};
