<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="collapse">
    <thead>
        <tr>
            <th>Product Type</th>
            <th>Quantity</th>
            <th>Note</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->ProductType }}</td>
                <td>{{ $product->Quantity }}</td>
                <td>{{ $product->Note }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>