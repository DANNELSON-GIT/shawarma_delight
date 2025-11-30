<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Shawarma Delight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #fff7ef;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 40px;
            width: 420px;
            border-radius: 20px;
            box-shadow: 0px 8px 25px rgba(0,0,0,0.08);
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .title {
            text-align: center;
            margin-bottom: 15px;
        }

        .title h2 {
            color: #d35400;
            font-size: 28px;
        }

        .title p {
            color: #666;
            font-size: 14px;
        }

        .input-group {
            margin-top: 15px;
        }

        label {
            font-size: 14px;
            color: #444;
            margin-bottom: 5px;
            display: block;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1.5px solid #bbb;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            transition: 0.3s;
        }

        input:focus {
            border-color: #e67e22;
            box-shadow: 0 0 5px rgba(230,126,34,0.3);
        }

        .btn {
            margin-top: 25px;
            width: 100%;
            background: #e67e22;
            color: #fff;
            padding: 13px;
            border-radius: 12px;
            border: none;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #d35400;
        }

        .login-link {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
        }

        .login-link a {
            color: #d35400;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="title">
            <h2>Create an Account</h2>
            <p>Join Shawarma Delight and enjoy fast delivery</p>
        </div>

        <form>
            <div class="input-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" placeholder="Enter your full name">
            </div>

            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email">
            </div>

            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" placeholder="+234 800 000 0000">
            </div>

            <div class="input-group">
                <label for="password">Create Password</label>
                <input type="password" id="password" placeholder="Enter password">
            </div>

            <button class="btn">Register</button>

            <div class="login-link">
                Already have an account? <a href="login.php">Login</a>
            </div>
        </form>
    </div>

</body>
</html>
