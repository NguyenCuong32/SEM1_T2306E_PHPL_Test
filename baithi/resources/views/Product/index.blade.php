<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/product">create new student</a>
    <table class="table">
        <thead>
            <th>ProductType</th>
            <th>Quantity</th>
            <th>Note</th>            
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->producttype}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->note}}</td>               
                <td><a href="/product/update/{{$product->id}}">update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>