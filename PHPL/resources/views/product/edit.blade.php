<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
</head>
<body>
    <h2>Edit product</h2>
    <form action="/product/update/{{$products->id}}" method="post">
        @csrf
     <label for="ProductType">ProductType</label>
     <input type="text" name="ProductType" value="{{$products->ProductType}}">
     <br>
     <label for="ProductCode">ProductCode</label>
     <input type="text" name="ProductCode" value="{{$products->ProductCode}}">
     <br>
     <label for="ProductName">ProductName</label>
     <input type="text" name="ProductName" value="{{$products->ProductName}}">
     <br>
     <label for="Quantity">Quantity</label>
     <input type="text" name="Quantity" value="{{$products->Quantity}}">
     <br>
     <label for="Note">Note</label>
     <input type="text" name="Note" value="{{$products->Note}}">
     <br>
  
     <input type="submit" text = "Edit product">
     <br>
</body>
</html>
