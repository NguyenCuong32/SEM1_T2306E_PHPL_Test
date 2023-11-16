<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eric</title>
</head> 
<h2>Edit student</h2>
    <form action="/student/update/{{$product->id}}" method = "post">
        @csrf
        <label for="studentname"><b>Student Name</b></label>
        <br>
        <input type="text" name="ProductType" value="{{$product->ProductType}}">
        <br>
        <label for="studentage"><b>Student Age</b></label>
        <br>
        <input type="text" name="ProductCode" value="{{$product->ProductCode}}">
        <br>
        <input type="text" name="ProductName" value="{{$product->ProductName}}">
        <br>
        <input type="text" name="Quantity" value="{{$product->Quantity}}">
        <br>
        <input type="text" name="Not" value="{{$product->Note}}">
        <br>
        <label for="address"><b>Node</b></label>
        <br>
        <input type="text" name="address"> 
        <br>
        <input type="submit" value="Edit Product">
    </form>
</body>
</html>
