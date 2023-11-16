<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet">
</head>
<body>
    <div>
        <h2>Edit Product</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="product_code">Product Code</label>
                <input type="text" class="form-control" id="product_code" name="product_code" value="{{ $product->product_code }}" required>
            </div>
            <div >
                <label for="product_name">Product Name</label>
                <input type="text"  id="product_name" name="product_name" value="{{ $product->product_name }}" required>
            </div>
            <div >
                <label for="quantity">Quantity</label>
                <input type="number"  id="quantity" name="quantity" value="{{ $product->quantity }}" required>
            </div>
            <div >
                <label for="productType">ProductType</label>
                <input type="text"  id="productType" name="productType" value="{{ $product->productType }}" required>
            </div>
            <div >
                <label for="note">Note</label>
                <input type="text" id="note" name="note" value="{{ $product->note }}" required>
            </div>
            <button type="submit" >Update Product</button>
        </form>
    </div>
</body>
</html>