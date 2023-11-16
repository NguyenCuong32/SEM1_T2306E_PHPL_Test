<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eric</title>
</head> 
<h2>Information</h2>
    <form action="/product/create" method = "post">
        @csrf
        <label for="ProductType"><b>ProductType</b></label>
        <br>
        <input type="text" name="ProductType">
        <br>
        <label for="ProductCode"><b>Product Code</b></label>	
        <br>
        <input type="text" name="Product Code">
        <br>
        <label for="ProductName"><b>Product Name</b></label>
        <br>
        <input type="text" name="ProductName">
        <br>
        <label for="Quantity"><b>Quantity</b></label>
        <br>
        <input type="text" name="Quantity">
        <br>
        <label for="Note"><b>Note</b></label>
        <br>
        <input type="text" name="Note">
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>