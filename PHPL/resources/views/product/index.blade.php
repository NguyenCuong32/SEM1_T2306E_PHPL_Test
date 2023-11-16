<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
<body>
    
    <table >
    <thead>
        <th>ProductType</th>
        <th>ProductCode</th>
        <th>ProductName</th>
        <th>Quantity</th>
        <th>Note</th>
        <th>Create At</th>
        <th>Update At</th>
        <th>Update</th>
    </thead>
    <tbody class="border">
        @foreach($products as $product)
        <tr>
            <td>{{$product->ProductType}}</td>
            <td>{{$product->ProductCode}}</td>
            <td>{{$product->ProductName}}</td>
            <td>{{$product->Quantity}}</td>
            <td>{{$product->Note}}</td>
            <td>{{date('d-m-Y H:i:s', ($product->create_at))}}</td>
            <td>{{date('d-m-Y H:i:s', ($product->update_at))}}</td>
            <td>
            <a href="/product/update/{{$product -> id}}">Update</a>
            <td><a href = '/product/delete/{{ $product->id }}'>Delete</a></td>
           </td>
        </tr>
      
        @endforeach
        <a href = '/product/create/'>Create new product</a>
        <tbody>
        </table>
</body>
</html>