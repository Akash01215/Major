<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
        {{ auth()->check() ? 'Logged in as ' . strtoupper( auth()->user()->name ): 'Not logged in' }}
    <h1>Users List</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        @foreach ($users as $user)
        <tr> 
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('user.edit', $user->id) }}">Edit</a> |
                <a href="{{ route('user.delete', $user->id) }}">Delete</a> |
              
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html>
