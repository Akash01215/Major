<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="{{ route('users.signup') }}" method="POST">
        @csrf
        <h1 class="mb-4">User Registration Form</h1>
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" name="name" required>
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>      
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    <!-- Show validation error messages -->
@if($errors->any())
    @foreach($errors->all() as $error)
        <p style="color:red">{{ $error }}</p>
    @endforeach
@endif

    <!-- Show success message -->
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <!-- Show error message -->
    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif
</body>
</html>