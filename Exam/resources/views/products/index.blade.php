<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        .border{
            border:1px solid black;
            border-collapse:collapse;
        }
        .btn{
            background-color: rgb(0, 255, 213);
        }
        .btn:active{

            background-color: rgb(123, 180, 17);

        }
    </style>
</head>
<body>
    <h3>Product List</h3>
    <a href="create">Create new Product</a><br>
    <table class="border" border="1" with="100%" id="productTable">
    <thead>
    <th>Product Type</th>
    <th>Product Code</th>    
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Note</th>
    <th>Create At</th>
    <th>Update At</th>
    <th>Action</th>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->ProductType}}</td>
            <td>{{$product->ProductCode}}</td>
            <td>{{$product->ProductName}}</td>
            <td>{{$product->Quantity}}</td>
            <td>{{$product->Note}}</td>
            <td><a href="/update/{{$product->id}}">Update</a><br></td>
        </tr>
        @endforeach
        <tbody>
        </table>
</body>
</html>