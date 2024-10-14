<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>
    <p>You have received a new contact form submission:</p>
    <ul>
        <li><strong>First Name:</strong> {{ $data['first-name'] }}</li>
        <li><strong>Last Name:</strong> {{ $data['last-name'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Message:</strong> {{ $data['message'] }}</li>
    </ul>
</body>
</html>
