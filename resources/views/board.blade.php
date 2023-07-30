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
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        />

        <title>Board</title>
    </head>
    <body>
        <div class="wrapper">
            <input type="checkbox" id="btn" hidden />
            <label for="btn" class="menu-btn">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </label>
            <nav id="sidebar">
                <div class="title">Ecommerce</div>
                <ul class="list-items">
                    <li class="active">
                        <a href="#"><i class="fas fa-home"></i>Board</a>
                    </li>
                    <li>
                        <a href="#"
                            ><i class="fa-solid fa-cart-shopping"></i>Cart</a
                        >
                    </li>
                    <li>
                        <a href="#"
                            ><i class="fa-solid fa-heart"></i>Favorites</a
                        >
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-user"></i>Profile</a>
                    </li>
                    <li>
                        <a href="#"
                            ><i class="fas fa-envelope"></i>Contact us</a
                        >
                    </li>
                    <div class="icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </ul>
            </nav>
        </div>
        <div class="content">
            <div class="header">
                Dashboard
                <button class="LogOut">Log Out</button>
            </div>
            <div class="container">
                <div class="card">
                    <div class="imgBx">
                        <img
                            src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5782.png"
                            alt="nike-air-shoe"
                        />
                    </div>
                    <div class="contentBx">
                        <h2 id="itemTitle">Title</h2>
                        <div class="price">
                            <h3>Price :</h3>
                            <span id="itemPrice">$7</span>
                        </div>
                        <div class="description">
                            <p id="itemCategory">Category Here</p>
                            <p id="itemDescription">Description here</p>
                        </div>
                        <a href="#" class="cart-btn"
                            >Add to <i class="fa-solid fa-cart-shopping"></i
                        ></a>
                        <a href="#" class="favorite-btn"
                            ><i class="fa-solid fa-heart"></i
                        ></a>
                    </div>
                        <input type="checkbox" id="cardMenuBtn" hidden>
                        <label for="cardMenuBtn">                    
                            <div class="card-menu">
                                <i class="fa-solid fa-ellipsis"></i>                    
                            </div> 
                        </label>
                    <div class="menu-options">
                        <button class="btn edit-item-btn" id="EditItem">Edit</button>
                        <button class="btn delete-item-btn" id="deleteItem">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
