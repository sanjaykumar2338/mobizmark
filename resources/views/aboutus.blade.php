<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Supporting Local Businesses & Communities</title>
    <meta name="keywords" content="about us, local businesses, business directory, community support, mission, business visibility, local services">
    <meta name="description" content="Learn more about our mission to connect local businesses with consumers. We help communities thrive by promoting local services through a trusted directory.">
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
            <h1>Connecting Shoppers with the Best Local Services</h1>
            <p>Our directory brings together a diverse range of local businesses, making it easier for you to find exactly what you need in your community. Whether you're searching for an auto mechanic, beauty salon, or a great restaurant, our curated listings ensure quality and convenience.</p>
            
            <h2>Search, Explore, and Navigate through Business Offerings</h2>
            <ul>
                <li><strong>Local Search:</strong> Find businesses and services in your neighborhood quickly and efficiently with our advanced search tools, tailored to your location.</li>
                <li><strong>Categories and Listings:</strong> Explore an extensive range of categories, from auto services to real estate, and find reliable businesses that fit your needs.</li>
                <li><strong>Business Benefits:</strong> As a local business, being listed here increases your visibility, bringing more traffic and customers to your door.</li>
                <li><strong>Advanced Filters:</strong> Our directory offers a range of filters, allowing users to search by service type, price range, location, and customer reviews.</li>
            </ul>
            
            <p>Our mission is to make local businesses more accessible to consumers while supporting community growth. As a trusted directory, we help residents discover top-rated services, hidden gems, and everything in between.</p>

            <h2>Our Vision</h2>
            <p>We aim to become the go-to resource for finding local businesses and services, empowering local communities through greater visibility.</p>

            <h2>Our Team</h2>
            <p>We are a group of local business enthusiasts who understand the importance of shopping and supporting local.</p>

            <h2>Why Choose Us</h2>
            <p>Unlike national directories, we focus exclusively on your local area, ensuring businesses here get the attention they deserve, and consumers can rely on finding trusted services nearby.</p>

            <h2>Community Involvement</h2>
            <p>We collaborate with local organizations and host community events to foster local engagement.</p>

            <p>Join us in supporting your community—whether you're a business owner or a local shopper, our directory is designed for you.</p>
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
