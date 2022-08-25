<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Students</title>
</head>
<body>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <a class="btn btn-success btn-sm" href="/student/create">Create New Student</a>
    <form>
        <input type="text" pattern="[a-zA-Z]+">
        <input type="submit" value="Submit">
    
    </form>

    <table border="2px solid black">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>Actions</th>
        </thead>
        <tbody>
           @foreach ($students as $student)    
            <tr>
                <td>{{ $student->id  }}</td>
                <td>{{ $student->name }}</td>
                <td>
                    <!-- GET -->
                    <a href="/student/{{ $student->id }}" class="btn btn-primary">Show</a>
                    <a href="/student/{{ $student->id }}/edit" class="btn btn-success">Edit</a>
                    
                    <!-- POST, PUT, DELETE -->
                    <form action="/student/{{ $student->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</body>
</html>