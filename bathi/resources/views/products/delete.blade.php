<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>
<body>
    <h2>Delete Product</h2>
    <form action="/product/delete/{{$product->id}}" method="post">
        @csrf
        @method('DELETE') <!-- Use the DELETE method for RESTful routing -->

        <label for="productType">Product Type</label>
        <input type="text" name="productType" value="{{$product->productType}}" disabled>
        <br>

        <label for="productCode">Product Code</label>
        <input type="text" name="productCode" value="{{$product->productCode}}" disabled>
        <br>

        <label for="productName">Product Name</label>
        <input type="text" name="productName" value="{{$product->productName}}" disabled>
        <br>

        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" value="{{$product->quantity}}" disabled>
        <br>

        <label for="note">Note</label>
        <input type="text" name="note" value="{{$product->note}}" disabled>
        <br>

        <p>Are you sure you want to delete this product?</p>
        <input type="submit" value="Delete Product">
    </form>
</body>
</html>