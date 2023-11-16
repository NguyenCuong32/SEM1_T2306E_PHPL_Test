<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/add">Creat Product</a>
     <table>
        <thead>
            <th>ProductType</th>
            <th>ProductCode</th>
            <th>ProductName</th>
            <th>Quantity</th>
            <th>Note</th>
         </thead>
         <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->ProductType}}</td>
                <td>{{$product->ProductCode}}</td>
                <td>{{$product->ProductName}}</td>
                <td>{{$product->Quantity}}</td>
                <td>{{$product->Note}}</td>
               <td><<a href="/edit/"{{$product->id}}"Edit</a>
               @endforeach
            </tr>
     </table>
   
</body>
</html>