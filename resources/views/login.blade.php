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
            <form class="form-content" method="POST" enctype="multipart/form-data" action="{{ route('loginPost') }}">
                @csrf
                <div class="error" id="signinEmailError"></div>
                <label for="SignInEmail" class="form-label">Email</label>
                <input
                    type="text"
                    id="SignInEmail"
                    class="form-element"
                    name="email"
                    autocomplete="off"
                    spellcheck="false"
                />
                <div class="error" id="signinPasswordError"></div>
                <label for="SignInPassword" class="form-label">Password</label>
                <input
                    type="password"
                    id="SignInPassword"
                    name="password"
                    class="form-element"
                />
                <button class="btn btn-signin" id="SubmitSignInBtn" type="submit">
                    Sign In
                </button>
            </form>
        </div>

        <script src="{{ URL('js/Signin.js') }}"></script>
    </body>
</html>
