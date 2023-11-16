<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="" method="POST">
        @csrf
        <label>ProductType</label><br>
        <input type="text" name="ProductType" value="{{$product->ProductType}}"><br>
        <label>ProductCode</label><br>
        <input type="text" name="ProductCode" value="{{$product->ProductCode}} " ><br>
        <label>ProductName</label><br>
        <input type="text" name="ProductName" value="{{$product->ProductName}}" ><br>
        <label>Quantity</label><br>
        <input type="number" name="Quantity" value="{{$product->Quantity}}"><br>
        <label>Note</label><br>
        <input type="text" name="Note" value="{{$product->Note}}"><br>
        <input type="submit" name="submit" value="Add Product">
    </form>
</body>
</html>