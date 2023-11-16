<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eric</title>
</head>
<body>
       <table border="1">
        <thead> 
        <tr>
        <th colspan="7">Product INFORMATION</th>
    </tr>
            <th>ID</th>
            <th>Product Type</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Create At</th>
            <th>Update At</th>
            <th>Note</th>
            <th>Update</th>
</thead>
<tbody>
@foreach($students as $student)
    <tr>    
        <td>{{$student-> id}}</td>
        <td>{{$student-> ProductType}}</td>
        <td>{{$student-> ProductCode}}</td>
        <td>{{$student-> ProductName}}</td>
        <td>{{$student-> Quantity}}</td>
        <td>{{$student->created_at}}</td>
        <td>{{$student->updated_at}}</td>
        <td>{{$student-> Node}}</td>

        <td><a href ="/student/update/{{$student-> id}}">Update </a></td>
    </tr>     
    @endforeach
</tbody>
</table>
<br>
<b>Register Click Here: </b>
<a href = "/student/create"><b>Create New Student</b></a>
</html>