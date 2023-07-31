<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL('css/landing.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <title>Welcome To Our Ecommerce site</title>
</head>
<body>
    <nav class="navbar">
        <h1>Welcome to Our Website</h1>
        <form
            action="{{ route('auth.login')}}"
            method="get"
        >
            @csrf
            <button class="btn btn-signin">sign in</button>
        </form>
    </nav>
    <div class="container">
        <div class="section-top">
            <img src="{{ URL('assets/landing1.svg') }}" alt="" class="landing-img">
            <div class="sec-desc"> 
                <h2>Discover a world of endless shopping possibilities at your fingertips.</h2>
                <p>Our eCommerce platform offers a diverse selection of high-quality products 
                    from leading brands, all conveniently available online. </p>
            </div>
        </div>
        <div class="section-bottom">
           
            <div class="sec-desc"> 
                <h2>Shop with confidence</h2>
                <p>Enjoy a seamless browsing experience on our user-friendly interface. Our intuitive 
                    design makes it effortless to find what you need. </p>
            </div> 
            <img src="{{ URL('assets/landing2.svg') }}" alt="" class="landing-img">
        </div>   
        <div class="register-container">
            <p class="register-desc">Create a new account and discover our ecommerce platform</p>
            <a href="auth/register" class="btn register-btn">Join Now</a>
        </div>     
    </div>
</body>
</html>