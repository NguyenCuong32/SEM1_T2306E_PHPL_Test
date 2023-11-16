<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Product</title>
</head>
<body>
    <h2>Create New Product</h2>
    <form action="/product/create" method="post">
        @csrf
        <label for="productType">Product Type:</label><br>
        <input type="text" id="productType" name="ProductType"><br>
        
        <label for="productCode">Product Code:</label><br>
        <input type="text" id="productCode" name="ProductCode"><br>
        
        <label for="productName">Product Name:</label><br>
        <input type="text" id="productName" name="ProductName"><br>
        
        <label for="quantity">Quantity:</label><br>
        <input type="text" id="quantity" name="Quantity"><br>

        <label for="note">Note:</label><br>
        <input type="text" id="note" name="Note"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>