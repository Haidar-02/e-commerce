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
                        <a href="/items/index"
                            ><i class="fas fa-home"></i>Board</a
                        >
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
                    <li>
                        <a href="#"
                            ><i class="fa-solid fa-right-from-bracket"></i>Log
                            Out</a
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
                <a href="/items/index">Dashboard</a>
            </div>
            <div>
                <a href="/items/create" class="btn add-new-item"
                    >Add New Item</a
                >
            </div>
            <div class="container">
                @foreach($items as $item)
                <div class="card">
                    <div class="imgBx">
                        <img src="items/{{ $item->image }}" />
                    </div>
                    <div class="contentBx">
                        <h2 id="itemTitle">{{$item->title}}</h2>
                        <div class="price">
                            <h3>Price :</h3>
                            <span id="itemPrice"> {{$item->price}}$</span>
                        </div>
                        <div class="description">
                            <p id="itemCategory">{{$item->category}}</p>
                            <p id="itemDescription">{{$item->description}}</p>
                        </div>
                        <a href="#" class="cart-btn"
                            >Add to <i class="fa-solid fa-cart-shopping"></i
                        ></a>
                        <a href="#" class="favorite-btn"
                            ><i class="fa-solid fa-heart"></i
                        ></a>
                    </div>
                    <div class="menu-options">
                        <form
                            action="{{ route('items.edit', ['id' => $item->id]) }}"
                            method="GET"
                        >
                            @csrf
                            <button type="submit" class="btn edit-item-btn">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </form>
                        <form
                            action="{{ route('items.destroy', ['id' => $item->id]) }}"
                            method="POST"
                        >
                            @csrf
                            <button type="submit" class="btn delete-item-btn">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <script src="{{ URL('js/board.js') }}"></script>
    </body>
</html>
