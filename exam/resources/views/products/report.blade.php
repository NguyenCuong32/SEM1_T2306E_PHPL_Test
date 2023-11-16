<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eric</title>
</head>
<body>
       <table border="1">
        <thead> 
        <tr>
        <th colspan="3">PRODUCT REPORT</th>
    </tr>
            <th>ProductType</th>
            <th>Quantity</th>
            <th>Note</th>
 
</thead>
<tbody>
@foreach($products as $product)
    <tr>    
        <td>{{$product-> ProductType}}</td>
        <td>{{$product-> Quantity}}</td>
        <td>{{$product-> Note}}</td>
    </tr>     
    @endforeach
</tbody>
</table>

</html>