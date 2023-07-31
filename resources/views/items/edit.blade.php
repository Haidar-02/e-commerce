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
            <p id="success">Item Updated</p>
            @endif
        <div class="formBox">
            <div class="left-section">
                <h2>Edit Item</h2>
                <form method="POST" action="/items/{{$item->id}}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="itemTitle">Item Title</label>
                        <input type="text" id="itemTitle" required class="form-element" name="title" value='{{$item->title}}'/>
                    </div>
                    <div class="form-group">
                        <label for="itemDescription">Item Description</label>
                        <input
                            type="text"
                            id="itemDescription"
                            class="form-element"
                            name="description"
                            required
                            value='{{$item->description}}'
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
                            value='{{$item->price}}'
                        />
                    </div>
                    <div class="form-group">
                        <label for="itemCategoryInput">Item Category</label>
                        <Select id="itemCategoryInput" class="form-element" required name="category">
                        <option value="">Select a Category</option>
                        <option value="Home & Kitchen" {{ $item->category === 'Home & Kitchen' ? 'selected' : '' }}>Home & Kitchen</option>
                        <option value="Books" {{ $item->category === 'Books' ? 'selected' : '' }}>Books</option>
                        <option value="Toys & Games" {{ $item->category === 'Toys & Games' ? 'selected' : '' }}>Toys & Games</option>
                        <option value="Sports & Outdoors" {{ $item->category === 'Sports & Outdoors' ? 'selected' : '' }}>Sports & Outdoors</option>
                        <option value="Beauty & Personal Care" {{ $item->category === 'Beauty & Personal Care' ? 'selected' : '' }}>Beauty & Personal Care</option>
                        <option value="Health & Fitness" {{ $item->category === 'Health & Fitness' ? 'selected' : '' }}>Health & Fitness</option>
                        <option value="Food & Beverages" {{ $item->category === 'Food & Beverages' ? 'selected' : '' }}>Food & Beverages</option>
                        <option value="Office & Stationery" {{ $item->category === 'Office & Stationery' ? 'selected' : '' }}>Office & Stationery</option>
                        <option value="Art & Crafts" {{ $item->category === 'Art & Crafts' ? 'selected' : '' }}>Art & Crafts</option>
                        <option value="Pet Supplies" {{ $item->category === 'Pet Supplies' ? 'selected' : '' }}>Pet Supplies</option>
                        <option value="Automotive" {{ $item->category === 'Automotive' ? 'selected' : '' }}>Automotive</option>
                        <option value="Travel & Luggage" {{ $item->category === 'Travel & Luggage' ? 'selected' : '' }}>Travel & Luggage</option>
                        <option value="Music & Instruments" {{ $item->category === 'Music & Instruments' ? 'selected' : '' }}>Music & Instruments</option>
                        <option value="Movies & Entertainment" {{ $item->category === 'Movies & Entertainment' ? 'selected' : '' }}>Movies & Entertainment</option>
                        <option value="Clothing" {{ $item->category === 'Clothing' ? 'selected' : '' }}>Clothing</option>
                        <option value="Electronics" {{ $item->category === 'Electronics' ? 'selected' : '' }}>Electronics</option>
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
                    />
                </div>
                    <a href="/items/index" class="btn cancelBtn" id="cancelBtn">Discard</a>
                    <button type="submit" class="submit-btn" id="SubmitButton">Update Item</button>
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
