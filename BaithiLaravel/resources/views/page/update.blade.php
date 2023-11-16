<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/create" method="POST" >
        @csrf
        <label >ProductType</label><br>
        <input type="text" name="producttype" value="{{}}"><br>
            @error('producttype')
                {{$messages}}
            @enderror
        <label >ProductCode</label><br>
        <input type="text" name="productcode" ><br>
            @error('productcode')
                {{$messages}}
            @enderror
        <label >ProductName</label><br>
        <input type="text" name="productname" ><br>
            @error('productname')
                {{$messages}}
            @enderror
        <label >Quantity</label><br>
        <input type="number" name="quantity" ><br>
            @error('quantity')
                {{$messages}}
            @enderror
        <label >Note</label><br>
        <input type="text" name="note"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>