<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="/add">Creat Product</a>
    <table>
        <thead>
            <th>ProductType</th>
            <th>ProductCode</th>
            <th>ProductName</th>
            <th>Quantity</th>
            <th>Note</th>
        </thead>
        <tbody>
            @foreach ($Product as $user)
            <tr>
                <td>{{$user->ProductType}}</td>
                <td>{{$user->ProductCode}}</td>
                <td>{{$user->ProductName}}</td>
                <td>{{$user->Quantity}}</td>
                <td>{{$user->Note}}</td>
                <td><a href="/edit/{{$user->id}}">Edit</a></td>
                <td>
                    <form action="{{route('delete',$user)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>