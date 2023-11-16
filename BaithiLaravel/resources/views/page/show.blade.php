<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Danh sach san pham</h1>
    <table>
        <thead>
            <th>ProductType</th>
            <th>Productcode</th>
            <th>ProductName</th>
            <th>Quantity</th>
            <th>Note</th>
            <th>Update</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->producttype}}</td>
                    <td>{{$product->productcode}}</td>
                    <td>{{$product->productname}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->note}}</td>
                    <td><button><a href="/update/{{$product->id}}">Update</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>