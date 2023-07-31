const signinEmailError = document.getElementById("signinEmailError");
const signinPasswordError = document.getElementById("signinPasswordError");
const SubmitSignInBtn = document.getElementById("SubmitSignInBtn");
const SignInEmail = document.getElementById("SignInEmail");
const SignInPassword = document.getElementById("SignInPassword");
SubmitSignInBtn.addEventListener("click", function () {
    signinEmailError.textContent = "";
    signinPasswordError.textContent = "";
    if (SignInEmail.value.trim() === "" || SignInPassword.value.trim() === "") {
        if (SignInEmail.value.trim() === "") {
            signinEmailError.textContent = "Email required";
        }
        if (SignInPassword.value.trim() === "") {
            signinPasswordError.textContent = "Password Required";
        }
        return;
    }
});
