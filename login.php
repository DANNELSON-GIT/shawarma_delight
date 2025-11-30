<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Shawarma Delight</title>
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
            width: 400px;
            padding: 40px;
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
            margin-bottom: 20px;
        }

        .title h2 {
            font-size: 28px;
            color: #d35400;
        }

        .title p {
            font-size: 14px;
            color: #666;
        }

        .input-group {
            margin-top: 18px;
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
            transition: 0.3s;
            font-size: 15px;
        }

        input:focus {
            border-color: #e67e22;
            box-shadow: 0 0 5px rgba(230,126,34,0.3);
        }

        .btn {
            width: 100%;
            padding: 13px;
            margin-top: 28px;
            background: #e67e22;
            color: #fff;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-size: 17px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn:hover {
            background: #d35400;
        }

        .extra-links {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
        }

        .extra-links a {
            color: #d35400;
            font-weight: 600;
            text-decoration: none;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="title">
            <h2>Login</h2>
            <p>Login to continue ordering your favorite shawarma</p>
        </div>

        <form>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter password">
            </div>

            <button class="btn">Login</button>

            <div class="extra-links">
                <p>Don't have an account? <a href="register.php">Register</a></p>
                <p><a href="#">Forgot Password?</a></p>
            </div>
        </form>
    </div>

</body>
</html>
