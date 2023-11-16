<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Production</title>
</head>
<body>
    <h2>EDITOR</h2>
    <form action="/product/update/" method = "post">
       @csrf
        <label for="ProductType">Product Type</label>
        <input type="text" name="name" value = {{$user -> name}} id="">
        <br><br>
        <label for="ProductCode">Product Code</label>
        <input type="text" value = {{$user -> email}} id="">
        <br><br>
        <button type="submit" value="Submit">Submit</button>
    </form>
</body>
</html>
</body>
</html>