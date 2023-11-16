<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h2>Edit Product Info</h2>
    <form action="update/{{$product->id}}" method="post">
        @csrf
    <label for="name">Product Type</label>
    <input type="text" name="type" value={{$product->ProductType}}>
    <br>
    <label for="name">Product Code</label>
    <input type="text" name="code" value={{$product->ProductCode}}>
    <br>
    <label for="name">Product Name</label>
    <input type="text" name="name" value={{$product->ProductName}}>
    <br>
    <label for="detail">Quantity</label>
    <input type="text" name="quantity" value={{$product->Quantity}}>
    <br>
    <label for="text">Note</label>
    <input type="text" name="price" value={{$product->Note}}>
    <br><br>
    <input type="submit" text="Edit Product">
</form>
</body>
</html>