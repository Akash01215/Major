<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>
<body>
    <h1>Product Page</h1>
    <table border="1" style="width: 50%; border-collapse: collapse;" color="black">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>

        @foreach ($products as $product)
        <tr> 
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>          
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
               <a href="{{ route('products.edit', $product->id) }}">Edit</a>
|
                <a href="{{ route('products.delete', $product->id) }}">Delete</a> |

            </td>
            

            
        </tr>
        @endforeach
    </table>
</body>
</html>