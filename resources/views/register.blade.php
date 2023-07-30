<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ URL('css/register.css') }}" rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css?family=Ubuntu"
            rel="stylesheet"
        />
        <title>Register A New Account</title>
    </head>

    <body>
        <img src="{{ URL('assets/bg2.jpg') }}" alt="" class="back_img" />
        <div class="register-container">
            <h1>Register New Account</h1>
            <div class="form-content">
                <div class="error" id="nameError"></div>
                <label for="Name" class="form-label">Name</label>
                <input
                    type="text"
                    id="Name"
                    class="form-element"
                    autocomplete="off"
                    spellcheck="false"
                    placeholder="Your name here.."
                />                
                <div class="error" id="emailError"></div>
                <label for="Email" class="form-label">Email</label>
                <input
                    type="text"
                    id="Email"
                    class="form-element"
                    autocomplete="off"
                    spellcheck="false"
                    placeholder="Email here.."
                />
                <div class="error" id="passwordError"></div>
                <label for="Password" class="form-label">Password</label>
                <input type="password" id="Password" class="form-element" />
                
                <div>
                    <input
                        type="checkbox"
                        class="form-element"
                        id="ShowPassword"
                        onchange="togglePasswordVisibility()"
                    />
                    <label for="ShowPassword" class="form-label"
                        >Show Password</label>
                </div>
                <button class="btn btn-register" id="SubmitRegisterBtn">
                    Create Account
                </button>
            </div>
            <p>
                Already have an account?<a id="signinSectionButton"> Sign in</a>
            </p>
        </div>
        <script src="{{ URL('js/Register.js') }}"></script>
    </body>
</html>
