<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <thead> 
        <tr>
        <th colspan="6">PRODUCTS INFORMATION</th>
    </tr>
            <th>ID</th>
            <th>ProductType</th>
            <th>ProductCode</th>
            <th>ProductName</th>
            <th>Quantity</th>
            <th>Note</th>
            
</thead>
<tbody>
@foreach($products as $product)
    <tr>    
        <td>{{$product-> id}}</td>
        <td>{{$product-> ProductType}}</td>
        <td>{{$product-> ProductCode}}</td>
        <td>{{$product-> ProductName}}</td>
        <td>{{$product->Quantity}}</td>
        <td>{{$product->Note}}</td>
        <td><a href ="/product/update/{{$product-> id}}">Update </a></td>
        </tr>     
    @endforeach
</tbody>
</table>
<br>
<b>Register Click Here: </b>
<a href = "/product/create"><b>Add new</b></a>
</body>
</html>