<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Edit products</h2>
    <form action="/product/update/{{$products->id}}" method = "post">
        @csrf
        <label for="studentname"><b>Student Name</b></lable>
        <br>
        <input type="text" name="studentname" value="{{$students->studentname}}">
        <br>
        <label for="studentage"><b>Student Age</b></lable>
        <br>
        <input type="text" name="studentage" value="{{$students->studentage}}">
        <br>
        <label for="address"><b>Address</b></label>
        <br>
        <input type="text" name="address"> 
        <br>
        <input type="submit" value="Edit student">
    </form>
</body>
</html>