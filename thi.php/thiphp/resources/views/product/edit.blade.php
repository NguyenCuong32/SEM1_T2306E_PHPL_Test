<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <label>ProductType</label> <br>
        <input type="text" name="ProductType" value="{{$product->ProductType}}">"<br>"
        <label>ProductCode</label><br>
        <input type="text" name="ProductCode" value="{{$product->ProductCode}}">"<br>"
        <label >ProductName</label><br>
        <input type="password" name="ProductName" value="{{$product->ProductName}}">"<br>">
        <label >Quantity</label><br>
        <input type="number" name="Quantity" value="{{$product->Quantity}}">"<br>">
        <label >Note</label><br>
        <input type="text" name="Note" value="{{$product->Note}}">"<br>">
        <input type="submit"name="submit" value="submit">
    </form>
</body>
</html>