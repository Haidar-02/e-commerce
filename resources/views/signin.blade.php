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
        <title>Sign in to your Account</title>
    </head>

    <body>
        <img src="{{ URL('assets/bg2.jpg') }}" alt="" class="back_img" />
        <div class="signin-container">
            <h1>Sign In</h1>
            <div class="form-content">
                <div class="error" id="signinEmailError"></div>
                <label for="SignInEmail" class="form-label">Email</label>
                <input
                    type="text"
                    id="SignInEmail"
                    class="form-element"
                    autocomplete="off"
                    spellcheck="false"
                />
                <div class="error" id="signinPasswordError"></div>
                <label for="SignInPassword" class="form-label">Password</label>
                <input
                    type="password"
                    id="SignInPassword"
                    class="form-element"
                />
                <button class="btn btn-signin" id="SubmitSignInBtn">
                    Sign In
                </button>
            </div>
            <p>
                Don't have an account?<a id="signupSectionButton"
                    > Register Now</a
                >
            </p>
        </div>

        <script src="{{ URL('js/Signin.js') }}"></script>
    </body>
</html>
