
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<!-- <body>
<form action="product/create" method="post">
    @csrf
        <label>Name</label> <br>
        <input type="text" name="name"><br>
        <label>Email</label><br>
        <input type="text" name="email"><br>
        <label >Password</label><br>
        <input type="password" name="password">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
    <form action="/product/create" method = "post">
        @csrf
        <label for="ProductType">ProductType</lable>
        <input type="text" name="ProductType">
        <br>
        <label for="ProductCode" >ProductCode</lable>
        <input type="text" name="ProductCode">
        <br>
        <label for="ProductName" >ProductName</lable>
        <input type="text" name="ProductName">
        <br>
        <label for="Quantity" >Quantity</lable>
        <input type="text" name="Quantity">
        <br>
        <label for="Note" >Note</lable>
        <input type="text" name="Note">
        <br>
        <!-- <label for="text" >Password</label>
        <input type="password" name="password">
        <br> -->
        <input type="submit" value="submit">
    </form>

</body>