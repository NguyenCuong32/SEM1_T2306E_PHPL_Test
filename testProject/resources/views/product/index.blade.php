<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.create') }}" method="get">
        <button>Add new product</button>
    </form>
    <table border="collapse">
        <thead>
            <tr>
                <th>Product Type</th>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->ProductType }}</td>
                    <td>{{ $product->ProductCode }}</td>
                    <td>{{ $product->ProductName }}</td>
                    <td>{{ $product->Quantity }}</td>
                    <td>{{ $product->Note }}</td>
                    <td>
                        <form action="{{ route('product.edit', $product->id) }}" method="get">
                            <button>Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>