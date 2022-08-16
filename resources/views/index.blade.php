<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <table border="2px solid black">
        <thead>
            <th>id</th>
            <th>name</th>
        </thead>
        <tbody>
           @foreach ($students as $student)    
            <tr>
                <td>{{ $student->id  }}</td>
                <td>{{ $student->name }}</td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</body>
</html>