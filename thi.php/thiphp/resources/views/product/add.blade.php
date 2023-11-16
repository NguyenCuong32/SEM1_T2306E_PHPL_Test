<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Add product</h1>
    <form action="" method="post">
        @csrf
        <label>ProductType</label> <br>
        <input type="text" name="ProductType"><br>
        <label>ProductCode</label><br>
        <input type="text" name="ProductCode"><br>
        <label >ProductName</label><br>
        <input type="password" name="ProductName"><br>
        <label >Quantity</label><br>
        <input type="number" name="Quantity"><br>
        <label >Note</label><br>
        <input type="text" name="Note"><br>
        <input type="submit"name="submit" value>
    </form>
</body>
</html>