<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Production</title>
    </head>
    <body>
        <form action="create" method="post">
            @csrf
            <label for="ProductType">Product Type</label>
            <input type="text" name="ProductType">
            <br>
            <label for="ProductCode">Product Code</label>
            <input type="text" name="ProductCode"></input>
            <br>
            <label for="ProductName">Product Name</label>
            <input type="text" for="ProductName"></input>
            <br>
            <label for="Quantity">Quantity</label>
            <input type="number" for="Quantity"></input>
            <br>
            <label for="Note">Note</label>
            <input type="text" for="Note"></input>
            <br>
            <button type="submit" value="Submit">Submit</button>
        </form>
    </body>
</html>