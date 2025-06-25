<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Categories</h1>
    <table border="1" cellpadding="10" cellspacing="0" style="width: 50%; text-align: left;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                    |
                    <a href="{{ route('categories.delete', $category->id) }}">Delete</a> |

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>