<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #6f7272;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Left Section */
        .form-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            background: #fff;
        }

        .form-box {
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .form-box img {
            height: 100px;
            display: block;
            margin: 0 auto;
        }

        .form-box h2 {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .form-box p {
            font-size: 14px;
            margin-top: 5px;
            color: #666;
        }

        .form-box a {
            color: #4f46e5;
            text-decoration: none;
        }

        .form-box a:hover {
            text-decoration: underline;
        }

        form {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            text-align: left;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        input:focus, select:focus {
            border-color: #4f46e5;
            outline: none;
        }

        .checkbox-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
        }

        .checkbox-left {
            display: flex;
            align-items: center;
        }

        .checkbox-left input {
            margin-right: 8px;
        }

        button {
            background: #4f46e5;
            color: white;
            padding: 10px;
            font-size: 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #4338ca;
        }

        /* Right Image Section */
        .image-section {
            flex: 2;
            position: relative;
            overflow: hidden;
        }

        .image-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Glass overlay */
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* semi-dark overlay */
            backdrop-filter: blur(6px); /* glass blur */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Foreground text */
        .overlay-text {
            color: white;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.8); /* glow */
        }

        /* Mobile */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .image-section {
                height: 200px;
                flex: none;
            }
            .overlay-text {
                font-size: 22px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Form -->
    <div class="form-section">
        <div class="form-box">
            <img src="logo.png" alt="Logo">
            <h2>Sign Up</h2>
            <p>Already have an account? <a href="#">Sign In</a></p>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div>
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter your Name">
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email">
                </div>
                <div>
                    <label>Phone Number</label>
                    <input type="tel" name="phone" placeholder="Enter your phone number">
                </div>
                <div>
                    <label>Account Type</label>
                    <select name="account_type">
                        <option value="">Select account type</option>
                        <option value="patient">Patient</option>
                        <option value="doctor">Doctor</option>
                        <option value="hospital">Hospital</option>
                    </select>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="checkbox-group">
                    <div class="checkbox-left">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <!-- Image Section -->
    <div class="image-section">
        <img src="https://b4191176.smushcdn.com/4191176/wp-content/uploads/2024/12/telemedicine-patient-care-delivery-scaled.jpg?lossy=2&strip=1&webp=1" alt="Background Image">
        <div class="image-overlay">
            <div class="overlay-text">Your Inspiring Text Here</div>
        </div>
    </div>
</div>
</body>
</html>
