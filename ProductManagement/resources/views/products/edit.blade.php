<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Edit Product Information</h2>

    <form action="/product/update/{{$product->id}}" method="post">
        @csrf 
        <label for="type">Product Type</lable>
        <input type="text" name="producttype" value={{$product->producttype}} >
        <br>
        <label for="code">Product Code</lable>
        <input type="text" name="productcode" value={{$product->productcode}} >
        <br>
        <label for="name">Product Name</label>
        <input type="text" name="productname" value={{$product->productname}} >
        <br>
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" value={{$product->quantity}} >
        <br>
        <label for="note">Note</label>
        <input type="text" name="note" value={{$product->note}}>
        <br>
        <input type="submit" text="Edit Product Info">       
    </form>
</body>
</html>