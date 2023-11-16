<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Info</title>
</head>
<body>
<h2>Edit Product Info</h2>
    <form action="/product/update/{{$product->id}}" method="post">
        @csrf
    <label for="productType">Product Type</label>
    <input type="text" name="ProductType" value={{$product->productType}}>
    <br>
    <label for="productCode">Product Code</label>
    <input type="text" name="ProductCode" value={{$product->productCode}}>
    <br>
    <label for="productName">Product Name</label>
    <input type="text" name="ProductName" value={{$product->productName}}>
    <br>
    <label for="quantity">Quantity</label>
    <input type="text" name="Quantity" value={{$product->quantity}}>
    <br>
    <label for="note">Note</label>
    <input type="text" name="Note" value={{$product->note}}>
    <br><br>
    <input type="submit" value="Edit Product">
</form>
</body>
</html>