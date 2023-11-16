<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('put')
        <label for="type">Product Type</label>
        @error('type')
            <div>{{ $message }}</div>
        @enderror
        <input type="text" name="type" id="type" value="{{ $product->ProductType }}">
        <br>
        <label for="code">Product Code</label>
        @error('code')
            <div>{{ $message }}</div>
        @enderror
        <input type="text" name="code" id="code" value="{{ $product->ProductCode }}">
        <br>
        <label for="name">Product Name</label>
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <input type="text" name="name" id="name" value="{{ $product->ProductName }}">
        <br>
        <label for="quantity">Quantity</label>
        @error('quantity')
            <div>{{ $message }}</div>
        @enderror
        <input type="text" name="quantity" id="quantity" value="{{ $product->Quantity }}">
        <br>
        <label for="note">Note</label>
        @error('note')
            <div>{{ $message }}</div>
        @enderror
        <input type="text" name="note" id="note" value="{{ $product->Note }}">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>