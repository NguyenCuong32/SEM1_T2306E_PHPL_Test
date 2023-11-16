<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .border{
            border:solid 2px #000FFF;
            border-collapse:collapse;
        }
        tbody,tr,th,td{
            border: 2px solid #000FFF;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <a href="/product/create">Create New Product</a>
    <br><br>
    <table class="border" id="productTable">
    <thead>
        <th>ID</th>
        <th>Product Type</th>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Note</th>
        <th>Action</th>
    </thead>
    <tbody >
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->producttype}}</td>
            <td>{{$product->productcode}}</td>
            <td>{{$product->productname}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->note}}</td>
            <td><a href="/product/update/{{$product->id}}">Edit</a><br>
        </tr>
        @endforeach
        <tbody>
        </table>
</body>
</html>