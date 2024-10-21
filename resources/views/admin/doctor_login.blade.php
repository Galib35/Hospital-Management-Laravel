<!DOCTYPE html>
<html>
<head>
    <title>Doctor Login</title>
    <style>
        body {
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
            width: calc(100% - 40px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: blue;
        }

        /* extra */

        input[type="submit2"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit2"]:hover {
            background-color: blue;
        }


        .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
    }

    button[name="submit"] {
        padding: 10px 20px;
        background-color: blueviolet;
        color: white;
        border: none;
        cursor: pointer;
    }

    button[name="submit"]:hover {
    background-color: blue;
}


        /* extra */
    </style>
</head>
<body>
<div class="login-container">
        <h2>Doctor Login</h2>

        <form action="{{route('doctor.login.submit')}}" method="POST">

            @csrf
       

        

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


       

        


            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter Username" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <br><br>
            <input type="submit" value="Login">
            <!-- <input type="submit2" value="Create Account"> -->
        </form>

        <!-- <form method="post">
        <button type="submit" name="submit">Create Account</button>
    </form> -->

    <div class="center">
        <form action="{{ route('doctor.create_account.form') }}" method="GET">
            @csrf
            <button type="submit" name="submit"  value="create_account">Create Account</button>
        </form>
</div>
            
           
    </div>

 


</body>
</html>
