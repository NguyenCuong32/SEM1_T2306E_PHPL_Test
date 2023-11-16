<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
<form action="/create" method = "post">
        @csrf
        <label for="type">Product Type</lable>
        <input type="text" name="ProductType">
        <br>
        <label for="code">Product Code</lable>
        <input type="text" name="ProductCode">
        <br>
        <label for="name">Product Name</lable>
        <input type="text" name="ProductName">
        <br>
        <label for="quantity" >Quantity</lable>
        <input type="text" name="Quantity">
        <br>
        <label for="note" >Note</label>
        <input type="text" name="Note">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>