<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policies and Data Protection - The Shopper's Directory</title>
    <meta name="keywords" content="privacy policy, data protection, directory policies, personal information, user rights, data collection, cookies">
    <meta name="description" content="Learn how we protect your privacy and personal data on our business directory. Review our policies on data collection, cookies, and user rights for a safe browsing experience.">
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
            <h1>Privacy Policies and Data Protection - MobiZmark</h1>
            <p>Your privacy is important to us. This policy outlines how we collect, use, and protect your information.</p>

            <h2>Data Collection</h2>
            <p>We collect personal data such as email addresses and search queries to improve user experience. This data is not shared with third parties without your consent.</p>

            <h2>Cookies</h2>
            <p>We use cookies to enhance website functionality and provide personalized content.</p>

            <h2>User Rights</h2>
            <p>You have the right to access, modify, or delete any personal information collected on this site.</p>

            <h2>Return and Refund Policy (if applicable)</h2>
            <p>Since we are a directory, no purchases are made through the site. However, businesses listed are responsible for their own refund and return policies.</p>

            <h2>Do Not Sell My Personal Information (CCPA Compliance)</h2>
            <p>We do not sell your personal information. California residents can request further information regarding their data.</p>
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
