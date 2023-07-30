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
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        />
        <title>Add Item Page</title>
    </head>
    <body>
        <div class="container">
            <div class="left-section">
                <h2>Add Item</h2>
                <form>
                    <div class="form-group">
                        <label for="itemTitle">Item Title</label>
                        <input type="text" id="itemTitle" required class="form-element"/>
                    </div>
                    <div class="form-group">
                        <label for="itemDescription">Item Description</label>
                        <input
                            type="text"
                            id="itemDescription"
                            class="form-element"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="itemPrice">Item Price (USD)</label>
                        <input
                            type="number"
                            id="itemPrice"
                            step="0.01"
                            required
                            class="form-element"
                        />
                    </div>
                    <div class="form-group">
                        <label for="itemCategory">Item Category</label>
                        <Select id="itemCategory" class="form-element" required>
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
                        id="itemImage"
                        accept="image/*"
                        class="form-element"
                        onchange="previewImage(event)"
                        required
                    />
                </div>
                    <button type="submit" class="submit-btn" id="SubmitButton">ADD ITEM</button>
                </form>
            </div>
            <div class="right-section">
                <div class="preview-container" id="imagePreview">
                    <img id="previewImg" src=""/>
                </div>    
            </div>
        </div>

        <script src="{{ URL('js/addNewItem.js') }}"></script>
    </body>
</html>
