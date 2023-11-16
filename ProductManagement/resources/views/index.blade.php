<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>

    <a href="{{ route('products.create') }}">Add New Product</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product Type</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->ProductType }}</td>
                <td>{{ $product->ProductCode }}</td>
                <td>{{ $product->ProductName }}</td>
                <td>{{ $product->Quantity }}</td>
                <td>{{ $product->Note }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <!-- Add delete functionality if needed -->
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
