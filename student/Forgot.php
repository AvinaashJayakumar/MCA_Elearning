<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(35, 34, 34);
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgb(35, 34, 34);
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.5s ease-out;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #4CAF50;
        }
        label {
            display: block;
            margin-bottom: 6px;
            color: #4CAF50;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            transition: border-color 0.3s ease-in-out;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #5c9add;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        input[type="submit"]:hover {
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form action="update_password.php" method="post">
            <label for="username">Student ID:</label>
            <input type="text" name="username" required>
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" required>
            <input type="submit" value="Change Password" style="margin-left:10px;">
        </form>
    </div>
</body>
</html>
