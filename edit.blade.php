<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <input type="text" name="productType" value="{{ $product->productType }}" required>
        <input type="text" name="productCode" value="{{ $product->productCode }}" required>
        <input type="text" name="productName" value="{{ $product->productName }}" required>
        <input type="number" name="quantity" value="{{ $product->quantity }}" required>
        <input type="text" name="note" value="{{ $product->note }}">
        <button type="submit">Update Product</button>
    </form>
</body>

</html>
