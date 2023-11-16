<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
<form action="/product/create" method = "post">
    @csrf
    <label for="type">Product Type</lable>
    <input type="text" name="producttype">
    <br>
    <label for="code">Product Code</lable>
    <input type="text" name="productcode">
    <br>
    <label for="name">Product Name</label>
    <input type="text" name="productname">
    <br>
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity">
    <br>
    <label for="note">Note</label>
    <input type="text" name="note">
    <br>
    <input type="submit" value="Submit">
</form>

</html>