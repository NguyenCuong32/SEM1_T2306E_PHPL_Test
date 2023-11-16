<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>

<body>
    <form action="/add" method="POST">
        @csrf
        <label>ProductType</label><br>
        <input type="text" name="ProductType"><br>
        <label>ProductCode</label><br>
        <input type="text" name="ProductCode"><br>
        <label>ProductName</label><br>
        <input type="text" name="ProductName"><br>
        <label>Quantity</label><br>
        <input type="number" name="Quantity"></input><br>
        <label>Note<label><br>
                <input type="text" name="Note"><input><br>
                <input type="submit" name="submit" value="submit">
</body>

</html>