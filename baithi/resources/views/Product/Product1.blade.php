<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/product/create" method="post">
        @csrf
       <label for="producttype">ProductType</label>
        <input type="text" name="producttype">
        <br>
        <label for="productcode">ProductCode</label>
        <input type="text" name="productcode">
        <br>
        <label for="productname">ProductName</label>
        <input type="text" name="productname">
        <br>
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity">
        <br>
        <label for="note">Note</label>
        <input type="text" name="note">
        <br>
        <button type="submit">Submit</button> 
        </form>
</body>
</html>