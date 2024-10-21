<!DOCTYPE html>
<html>
<head>
    <title>Admin Create Account</title>
    <style>
        /* Add your CSS styles here */

        /* body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        .login-container {
            width: 300px;
            margin: 0 auto;
            margin-top: 150px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: blueviolet;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: blue;
        } */


        /* extra */

        body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
    }
    
    .login-container {
        width: 400px;
        height: 300px;
        margin: 0 auto;
        margin-top: 150px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
    }
    
    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    label {
        display: block;
        margin-bottom: 8px;
    }
    
    input[type="text"],
    input[type="password"] {
        width: calc(100% - 40px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: blueviolet;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: blue;
    }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Create Account</h2>
    @if ($errors->has('admin'))
    <div class="alert alert-danger">
        {{ $errors->first('admin') }}
    </div>
    @endif
    <form action="{{ route('admin.create_account.submit') }}" method="POST">
        @csrf

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="Enter Username"  required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter Password"  required>
        <br><br>
        <input type="submit" name="signup" value="Sign Up">
    </form>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</body>
</html>
