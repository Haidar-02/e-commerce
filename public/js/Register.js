const submitRegisterBtn = document.getElementById("SubmitRegisterBtn");
const nameInput = document.getElementById("Name");
const emailInput = document.getElementById("Email");
const passwordInput = document.getElementById("Password");
const nameError = document.getElementById("nameError");
const emailError = document.getElementById("emailError");
const passwordError = document.getElementById("passwordError");

const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
submitRegisterBtn.addEventListener("click", function (event) {
    event.preventDefault();

    nameError.textContent = "";
    if (emailError.textContent !== "Invalid email format") {
        emailError.textContent = "";
    }
    passwordError.textContent = "";
    if (
        !emailRegex.test(emailInput.value.trim()) ||
        nameInput.value.trim() === "" ||
        emailInput.value.trim() === "" ||
        passwordInput.value.length < 8
    ) {
        if (nameInput.value.trim() === "") {
            nameError.textContent = "Name is required";
        }

        if (emailInput.value.trim() === "") {
            emailError.textContent = "Email is required";
        }

        if (passwordInput.value.trim() === "") {
            passwordError.textContent = "Password is required";
        }
        if (
            passwordInput.value.length < 8 &&
            passwordInput.value.trim() !== ""
        ) {
            passwordError.textContent =
                "Password must be at least 8 characters";
            return;
        }

        return;
    } else {
        //register
    }
});
emailInput.addEventListener("input", function () {
    if (!emailRegex.test(emailInput.value.trim())) {
        emailError.textContent = "Invalid email format";
    } else {
        emailError.textContent = "";
    }
});

function togglePasswordVisibility() {
    const passwordInput = document.getElementById("Password");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
