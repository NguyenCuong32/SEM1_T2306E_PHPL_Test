<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Product Type</th>
            <th>Quantity</th>
            <th>Note</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product-> ProductType}}</td>
                    <td>{{$product-> Quantity}}</td>
                    <td>{{$product-> Note}}</td>   
                </tr>    
            @endforeach
        </tbody>
    </table>
</body>
</html>