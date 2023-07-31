<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="{{ URL('css/addNewItem.css') }}" rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css?family=Ubuntu"
            rel="stylesheet"
        />
        <link href="{{ URL('css/board.css') }}" rel="stylesheet" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        />
        <title>Add Item Page</title>
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
                    <li>
                        <a href="#"
                            ><i class="fa-solid fa-right-from-bracket"></i>Log Out</a
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
        <div class="content" >
            <div class="header">
            <a href="/items/index">Dashboard</a>
            </div>
            @if($message = Session::get("success"))
            <p id="success">Item Added</p>
            @endif
        <div class="formBox">
            <div class="left-section">
                <h2>Add Item</h2>
                <form method="POST" action="/items/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="itemTitle">Item Title</label>
                        <input type="text" id="itemTitle" required class="form-element" name="title"/>
                    </div>
                    <div class="form-group">
                        <label for="itemDescription">Item Description</label>
                        <input
                            type="text"
                            id="itemDescription"
                            class="form-element"
                            name="description"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="itemPrice">Item Price (USD)</label>
                        <input
                            type="number"
                            id="itemPrice"
                            name="price"
                            step="0.01"
                            required
                            class="form-element"
                        />
                    </div>
                    <div class="form-group">
                        <label for="itemCategoryInput">Item Category</label>
                        <Select id="itemCategoryInput" class="form-element" required name="category">
                            <option value="" selected disabled>Select a Category</option>
                            <option value="Home & Kitchen">Home & Kitchen</option>
                            <option value="Books">Books</option>
                            <option value="Toys & Games">Toys & Games</option>
                            <option value="Sports & Outdoors">Sports & Outdoors</option>
                            <option value="Beauty & Personal Care">Beauty & Personal Care</option>
                            <option value="Health & Fitness">Health & Fitness</option>
                            <option value="Food & Beverages">Food & Beverages</option>
                            <option value="Office & Stationery">Office & Stationery</option>
                            <option value="Art & Crafts">Art & Crafts</option>
                            <option value="Pet Supplies">Pet Supplies</option>
                            <option value="Automotive">Automotive</option>
                            <option value="Travel & Luggage">Travel & Luggage</option>
                            <option value="Music & Instruments">Music & Instruments</option>
                            <option value="Movies & Entertainment">Movies & Entertainment</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Electronics">Electronics</option>
                        </Select>
                    </div>
                    <div class="form-group">
                        <label for="itemImage">Item Image</label>
                        <input
                        type="file"
                        name="image"
                        id="itemImage"
                        accept="image/*"
                        class="form-element"
                        onchange="previewImage(event)"
                        required
                    />
                </div>
                    <a href="/items/index" class="btn cancelBtn" id="cancelBtn">Discard</a>
                    <button type="submit" class="submit-btn" id="SubmitButton">Add Item</button>
                </form>
            </div>
            <div class="right-section">
                <div class="preview-container" id="imagePreview">
                    <img id="previewImg" src=""/>
                </div>    
            </div>
        </div>
        </div>
        <script src="{{ URL('js/addNewItem.js') }}"></script>
    </body>
</html>
