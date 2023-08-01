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
        <title>Cart</title>
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
                    <li >
                        <a href="/items/index"
                            ><i class="fas fa-home"></i>Board</a
                        >
                    </li>
                    <li class="active">
                        <a href="{{ route('items.cart') }}"
                            ><i class="fa-solid fa-cart-shopping"></i>Cart</a
                        >
                    </li>
                    <li>
                        <a href="{{ route('items.favorites') }}"
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
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                            @csrf
                            @method('DELETE')
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <button type="submit" class="logoutBtn">Log Out</button>      
                        </form>
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
                <a href="/items/index">Dashboard</a>
            </div>
            <div>
                <h2><i class="fa-solid fa-cart-shopping"></i> Cart</h2>
            </div>
            <div class="container">
                @foreach($cartItems as $cartItem)
                <div class="card">
                    <div class="imgBx">
                        <img src="{{ asset('items/' . $cartItem->image) }}" />
                    </div>
                    <div class="contentBx">
                        <h2 id="itemTitle">{{$cartItem->title}}</h2>
                        <div class="price">
                            <h3>Price :</h3>
                            <span id="itemPrice"> {{$cartItem->price}}$</span>
                        </div>
                        <div class="description">
                            <p id="itemCategory">{{$cartItem->category}}</p>
                            <p id="itemDescription">{{$cartItem->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <script src="{{ URL('js/board.js') }}"></script>
    </body>
</html>
