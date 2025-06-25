<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <style>
        body {
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea, button {
            width: 100%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Edit Customer</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $customer->name }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $customer->email }}" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $customer->phone }}">

        <label for="address">Address:</label>
        <textarea id="address" name="address">{{ $customer->address }}</textarea>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="{{ $customer->city }}">

        <button type="submit">Update Customer</button>
    </form>
</body>
</html>