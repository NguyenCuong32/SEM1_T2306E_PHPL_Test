<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <h2>Product List</h2>
    @if($products->count() > 0)
        @foreach($products as $product)
            <p>{{ $product->productType }} - {{ $product->productCode }} - {{ $product->productName }} - {{ $product->quantity }}</p>
        @endforeach
    @else
        <p>No products available</p>
    @endif
</body>
</html>
