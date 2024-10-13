<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Received Your Message</title>
</head>
<body>
    <h1>Hello, {{ $data['first-name'] }} {{ $data['last-name'] }}</h1>
    <p>Thank you for reaching out to us. We have received your message:</p>
    <blockquote>{{ $data['message'] }}</blockquote>
    <p>Our team will get back to you as soon as possible. If you need immediate assistance, please reply to this email.</p>
    <p>Best regards, <br> The mobiZmark Team</p>
</body>
</html>
