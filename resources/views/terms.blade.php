<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Use - Business Directory Terms & Conditions</title>
    <meta name="keywords" content="terms of use, website terms, user responsibilities, directory rules, business listings, legal terms, service agreement">
    <meta name="description" content="Read our Terms of Use to understand the guidelines and conditions for using our business directory. Review user responsibilities, business listing rules, and legal terms.">
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
        h2 {
            margin-top: 20px;
            color: #333;
        }
        p, li {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
            color: #555;
        }
        ul {
            margin-left: 20px;
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
            <h1>Terms of Service for Using the mobiZmark Directory</h1>
            <p>By using our directory, you agree to the following terms and conditions. These terms ensure a safe and reliable experience for all users.</p>

            <h2>User Responsibilities</h2>
            <p>Users are responsible for using the directory for lawful purposes only. Misuse of the platform, such as spamming or uploading harmful content, will lead to account termination.</p>

            <h2>Business Listings</h2>
            <p>All businesses listed must comply with our quality standards. Businesses are required to keep their information up to date.</p>

            <h2>Third-Party Content</h2>
            <p>The website may link to external sites, which we do not control. We are not responsible for the content of these sites.</p>

            <h2>Liability</h2>
            <p>We are not liable for any direct or indirect damages resulting from the use of this directory or the services provided by businesses listed here.</p>

            <h2>Changes to Terms</h2>
            <p>We reserve the right to modify these terms at any time. Continued use of the website following changes indicates your acceptance of the new terms.</p>

            <p>If you have any questions regarding these terms, please <a href="{{ url('/contact') }}">contact us</a>.</p>
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

</body>
</html>
