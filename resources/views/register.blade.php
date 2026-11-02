<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Furniture Production Tracker</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f1e8;
        }
        .container{
            width: 350px;
            margin: 60px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);

        }
        h1{
            text-align: center;
            color: #8b5e3c;

        }
        label{
            display: block;
            margin-top: 15px;
            color: #5b3824;
        }
         input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #c9b8a5;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: #5b3824;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #8b5e3c;
        }

        .login-link {
            margin-top: 20px;
            text-align: center;
        }

        a {
            color: #8b5e3c;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Furniture Tracker</h1>
        <p>Create your Account<p>
        <form>

            <label for="name">Full Name</label>
            <input type="text" id="name"
                   placeholder="Enter your full name">
            <label for="email">Email Address</label>
            <input type="email" id="email"
                   placeholder="Enter your email">
            <label for="password">Password</label>
            <input type="password" id="password"
                   placeholder="Create a password">
            <label for="confirm_password">
                Confirm Password
            </label>
            <input type="password"
                   id="confirm_password"
                   placeholder="Confirm your password">
            <button type="submit">
                Create Account
            </button>
        </form>

        <div class="login-link">
            Already have an account?
            <a href="/login">Login</a>
        </div>

    </div>

</body>
</html>
