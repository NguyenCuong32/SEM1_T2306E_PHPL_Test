<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="post" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('put')

        <label for="ProductType">Product Type:</label>
        <input type="text" name="ProductType" value="{{ $product->ProductType }}" required>
        <br>

        <label for="ProductCode">Product Code:</label>
        <input type="text" name="ProductCode" value="{{ $product->ProductCode }}" required>
        <br>

        <label for="ProductName">Product Name:</label>
        <input type="text" name="ProductName" value="{{ $product->ProductName }}" required>
        <br>

        <label for="Quantity">Quantity:</label>
        <input type="number" name="Quantity" value="{{ $product->Quantity }}" required>
        <br>

        <label for="Note">Note:</label>
        <input type="text" name="Note" value="{{ $product->Note }}">
        <br>

        <input type="submit" value="Update Product">
    </form>
</body>
</html>
