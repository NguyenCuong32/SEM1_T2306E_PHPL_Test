<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Products</title>
</head>
<body>
    <form action="/product/create" method= "post">
    @csrf
        <label for="ProductType">Product Type</label>
        <input type="text" name="ProductType">
        <br><br>
        <label for="ProductCode">Product Code</label>
        <input type="text" name="ProductCode">
        <br><br>
        <label for="ProductName ">Product Name</label>
        <input type="text" name="ProductName">
        <br><br>
        <label for="Quantity ">Quantity</label>
        <input type="text" name="Quantity">
        <br><br>
        <label for="Note ">Note</label>
        <input type="text" name="Note">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>