<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        .border{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <a href="/product/create/">Add New Product</a><br><br>
    <table class="border" border="1" width="100%" id="productTable">
    <thead>
        <th>Product Type</th>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Note</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->productType}}</td>
            <td>{{$product->productCode}}</td>
            <td>{{$product->productName}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->note}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td>
                <a href="/product/edit/{{$product->id}}">Edit</a><br>
                <a class="btn btn-danger" href="/product/delete/{{$product->id}}" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        @endforeach
    <tbody>
    </table>
</body>
</html>