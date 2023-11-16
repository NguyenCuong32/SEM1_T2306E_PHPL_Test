<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<body>
    <h2>Add New Product</h2>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <input type="text" name="productType" placeholder="Product Type" required>
        <input type="text" name="productCode" placeholder="Product Code" required>
        <input type="text" name="productName" placeholder="Product Name" required>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <input type="text" name="note" placeholder="Note">
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
