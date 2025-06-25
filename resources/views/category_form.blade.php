<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
       
        form {
            max-width: 600px;
            
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input, textarea, button {
            width: 50%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Create Category</h1>
    <form action="{{ route('categories.submit') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>