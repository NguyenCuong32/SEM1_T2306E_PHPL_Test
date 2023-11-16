<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <div>
        <h2>Create Product</h2>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div>
                <label for="product_code">Product Code</label>
                <input type="text"  id="product_code" name="product_code" required>
            </div>
            <div>
                <label for="product_name">Product Name</label>
                <input type="text" id="product_name" name="product_name" required>
            </div>
            <div>
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" required>
            </div>
            <div>
                <label for="productType">ProductType</label>
                <input type="text" id="productType" name="productType" required>
            </div>
            <div>
                <label for="note">Note</label>
                <input type="text" id="note" name="note" required>
            </div>
            <button type="submit" >Add Product</button>
        </form>
    </div>
</body>
</html>