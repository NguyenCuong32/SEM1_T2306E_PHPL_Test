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
        @if ($errors->any())
        <h3 style="color: red">vui lòng kiểm tra lại</h3><br>
    @endif
        @csrf
        <label>ProductType</label><br>
        <input type="text" name="ProductType"><br>
        @error('ProductType')
        <span style="color: red">{{$message}}</span><br>
        @enderror
        <label>ProductCode</label><br>
        <input type="text" name="ProductCode"><br>
        @error('ProductCode')
        <span style="color: red">{{$message}}</span><br>
        @enderror
        <label>ProductName</label><br>
        <input type="text" name="ProductName"><br>
        @error('ProductName')
        <span style="color: red">{{$message}}</span><br>
        @enderror
        <label>Quantity</label><br>
        <input type="number" name="Quantity"><br>
        @error('Quantity')
        <span style="color: red">{{$message}}</span><br>
        @enderror
        <label>Note</label><br>
        <input type="text" name="Note"><br>
        <input type="submit" name="submit" value="Add Product">
    </form>
</body>
</html>