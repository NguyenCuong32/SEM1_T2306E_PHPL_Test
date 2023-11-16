<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <label for="ProductType">Product Type:</label>
        <input type="text" name="ProductType" required>
        <br>

        <label for="ProductCode">Product Code:</label>
        <input type="text" name="ProductCode" required>
        <br>

        <label for="ProductName">Product Name:</label>
        <input type="text" name="ProductName" required>
        <br>

        <label for="Quantity">Quantity:</label>
        <input type="number" name="Quantity" required>
        <br>

        <label for="Note">Note:</label>
        <input type="text" name="Note">
        <br>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>
