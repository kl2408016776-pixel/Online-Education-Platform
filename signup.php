<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - Online Education Platform</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f5f0;
            margin: 0;
            padding: 0;
        }
        .signup-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 40px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(139, 125, 107, 0.15);
        }
        .form-group {
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #c8b8a5;
            border-radius: 8px;
            font-size: 1rem;
        }
        .submit-btn {
            background: #c8b8a5;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            width: 100%;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Create New Account</h2>
		<form action="process_signup.php" method="POST">
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="submit-btn">Sign Up</button>
        </form>
    </div>
</body>
</html>
