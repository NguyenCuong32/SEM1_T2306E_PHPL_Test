<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eric</title>
</head> 
<h2>Edit Product</h2>
    <form action="/product/update/{{$products->id}}" method = "post">
        @csrf
        <label for="ProductType"><b>ProductType</b></lable>
        <br>
        <input type="text" name="ProductType" value="{{$products->ProductType}}">
        <br>
        <label for="ProductCode"><b>ProductCode</b></lable>
        <br>
        <input type="text" name="ProductCode" value="{{$products->ProductCode}}">
        <br>
        <label for="ProductName"><b>ProductName</b></label>
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
        <input type="submit" value="Edit Product">
    </form>
</body>
</html>