<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Received Your Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h1 {
            color: #4CAF93;
            font-size: 24px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }
        .message {
            background-color: #f9f9f9;
            border-left: 4px solid #4CAF93;
            margin: 20px 0;
            padding: 15px;
            font-style: italic;
            color: #333;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #f0f0f0;
            font-size: 14px;
            text-align: center;
            color: #888;
        }
        .footer p {
            margin: 0;
        }
        a {
            color: #4CAF93;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, {{ $data['first-name'] }} {{ $data['last-name'] }}</h1>
        <p>Thank you for reaching out to us. We have received your message:</p>
        <div class="message">
            <blockquote>{{ $data['message'] }}</blockquote>
        </div>
        <p>Our team will get back to you as soon as possible. If you need immediate assistance, please reply to this email.</p>
        <p>Best regards, <br> <strong>The mobiZmark Team</strong></p>

        <div class="footer">
            <p>Follow us on <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">LinkedIn</a></p>
            <p>&copy; 2024 mobiZmark. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
