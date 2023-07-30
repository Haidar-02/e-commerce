function previewImage(event) {
    const previewContainer = document.getElementById("imagePreview");
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
