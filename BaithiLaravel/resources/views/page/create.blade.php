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
        <input type="text" name="producttype"><br>
            @error('producttype')
               <span style="color: red">{{$messages}}</span> 
            @enderror
        <label >ProductCode</label><br>
        <input type="text" name="productcode" ><br>
            @error('productcode')
            <span style="color: red">{{$messages}}</span> 
            @enderror
        <label >ProductName</label><br>
        <input type="text" name="productname" ><br>
            @error('productname')
            <span style="color: red">{{$messages}}</span> 
            @enderror
        <label >Quantity</label><br>
        <input type="number" name="quantity" ><br>
            @error('quantity')
            <span style="color: red">{{$messages}}</span> 
            @enderror
        <label >Note</label><br>
        <input type="text" name="note"><br>
        <input type="submit" value="Addnew" ><br>
    </form>
    <a href="/show">Show productList</a>
</body>
</html>