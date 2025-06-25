<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <style>
        form {
            max-width: 500px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input, textarea, button {
            width: 100%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
      
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $category->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
    
</body>
</html>