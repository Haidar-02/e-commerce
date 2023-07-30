<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ URL('css/board.css') }}" rel="stylesheet" />

        <link
            href="https://fonts.googleapis.com/css?family=Ubuntu"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <title>Board</title>
    </head>
    <body>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Menu</div>
        <ul class="list-items">
          <li class="active"><a href="#" ><i class="fas fa-home"></i>Board</a></li>
          <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>Cart</a></li>
          <li><a href="#"><i class="fa-solid fa-heart"></i>Favorites</a></li>
          <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
          <li><a href="#"><i class="fas fa-envelope"></i>Contact us</a></li>
          <div class="icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </ul>
      </nav>
    </div>
    <div class="content">
      <div class="header">Animated Side Navigation Menu</div>
    </div>
    </body>
</html>
