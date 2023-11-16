

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Product Details</h2>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">Back</a>

        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $product->id }}</td>
            </tr>
            <tr>
                <th>Product Code</th>
                <td>{{ $product->product_code }}</td>
            </tr>
            <tr>
                <th>Product Name</th>
                <td>{{ $product->product_name }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ $product->quantity }}</td>
            </tr>
            <tr>
                <th>ProductType</th>
                <td>{{ $product->productType }}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ $product->note }}</td>
            </tr>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
