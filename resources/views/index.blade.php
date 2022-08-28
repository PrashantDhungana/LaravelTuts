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
    <h1 style="text-align:center;">Table to show student data </h1>
    <h2>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <a class="btn btn-success btn-sm" href="/student/create" style="align-items: center; ">Create New Student</a>

    </h2>
    <!-- <form>
        <input type="text" pattern="[a-zA-Z]+">
        <input type="submit" value="Submit">
    
    </form> -->

    <table class="table table-striped table-dark">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Actions</th>
        </thead>
        <tbody>
           @foreach ($students as $student)    
            <tr>
                <td>{{ $student->id  }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->address  }}</td>
                <td>{{ $student->phone_no  }}</td>
                <td>
                    <a href="/student/{{ $student->id }}" class="btn btn-primary">Show</a>
                    <a href="/student/{{ $student->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="/student/{{ $student->id }}" method="POST"> <!-- For POST, PUT, DELETE method we must use form and-->
                    <button class="btn btn-danger" type="submit">Delete</button>
                    @csrf
                    @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>