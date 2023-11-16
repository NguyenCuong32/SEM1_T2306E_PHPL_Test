<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
       <table class="table">
        <thead> 
        <tr>
        <th colspan="7">Product Information</th>
    </tr>
            <th>ID</th>
            <th>Product Type</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Note</th>
            <th>Create At</th>
            <th>Update At</th>
            <th>Update</th>
</thead>
<tbody>
@foreach($products as $product)
    <tr>    
        <td>{{$product-> id}}</td>
        <td>{{$product-> ProductType}}</td>
        <td>{{$product-> ProductCode}}</td>
        <td>{{$product-> ProductName}}</td>
        <td>{{$product-> Quantity}}</td>
        <td>{{$product-> Note}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->updated_at}}</td>
        <td><a href ="/products/update/{{$product-> id}}">Update </a></td>
    </tr>     
    @endforeach
</tbody>
</table>
</html>
