<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Reach Out to mobiZmark</title>
    <meta name="keywords" content="contact us, business directory contact, support, inquiry, customer service">
    <meta name="description" content="Get in touch with the mobiZmark team for inquiries, support, or feedback. We are here to assist with your needs.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body, html {
            height: 100%;
            background-color: #f4f7fc; /* Light background */
            color: #333;
            font-family: 'Arial', sans-serif;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #4CAF93; /* Greenish Blue Header */
            padding: 20px;
            text-align: center;
            color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        header a {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }
        .main-content {
            display: flex;
            flex-grow: 1;
            padding: 20px;
            background-color: #ffffff;
            margin: 0;
        }
        .content-area {
            flex-grow: 1;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        h1 {
            margin-bottom: 20px;
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        textarea {
            height: 150px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF93;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #398a70;
        }
        .footer {
            background-color: #4CAF93;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: auto;
            width: 100%;
            border-top: 2px solid #f0f0f0;
            box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
        }
        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        /* Success Alert */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            position: relative;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba;
        }

        /* Close button */
        .alert .close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: inherit;
            font-size: 20px;
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .alert .close:hover {
            color: #000;
        }

    </style>
</head>
<body>

<div class="container">
    <header>
        <a href="{{ url('/') }}">Mobizmark - Your Local Business Directory</a>
    </header>

    <!-- Main Content Area -->
    <div class="main-content">
        <div class="content-area">
            <h1>Contact Us</h1>
            <p>If you have any questions, feedback, or inquiries, please fill out the form below, and we will get back to you as soon as possible.</p>
            
            @if (session('success'))
                <br><br>
                <div class="alert alert-success">
                    <button class="close" onclick="this.parentElement.style.display='none';">&times;</button>
                    {{ session('success') }}
                </div>
            @endif

            <form action="/submit-contact-form" method="POST">
                @csrf
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" required>

                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <a href="{{ url('/domains') }}">Domains</a> | 
        <a href="{{ url('/policies') }}">Policies</a> | 
        <a href="{{ url('/terms-of-use') }}">Terms of Use</a> | 
        <a href="{{ url('/about-us') }}">About Us</a> | 
        <a href="{{ url('/contact') }}">Contact Us</a>
    </div>
</div>

@include('adsense')

</body>
</html>
