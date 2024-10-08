<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobizmark - Local Shoppers</title>
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
        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background-color: #ffffff;
        }
        .search-bar input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 2px solid #ccc;
            margin-right: 10px;
            border-radius: 5px;
        }
        .search-bar button {
            padding: 10px 20px;
            background-color: #4CAF93;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .search-bar button:hover {
            background-color: #398a70;
        }
        .location-info {
            text-align: center;
            font-size: 16px;
            color: #555;
            padding: 10px 20px;
            background-color: #ffffff;
            border-radius: 5px;
            width: 100%;
        }
        .main-content {
            display: flex;
            flex-grow: 1;
            padding: 20px;
            background-color: #ffffff;
            margin: 0;
        }
        /* Left Sidebar */
        .category-sidebar {
            background-color: #ffffff;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
        }
        .category-sidebar h3 {
            text-transform: uppercase;
            color: #4CAF93;
            margin-bottom: 15px;
            font-size: 18px;
            font-weight: bold;
        }
        .category-sidebar select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 2px solid #ccc;
            background-color: #f9f9f9;
            font-size: 14px;
        }
        /* Content Area */
        .content-area {
            flex-grow: 1;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .adsense-placeholder {
            background-color: #f0f0f0;
            height: 200px;
            margin-top: 20px;
            text-align: center;
            padding-top: 60px;
            font-size: 18px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        /* Footer Fixed at Bottom */
        .footer {
            background-color: #4CAF93;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: auto; /* This ensures footer stays at the bottom */
            width: 100%;
            border-top: 2px solid #f0f0f0;
            box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.05);
        }
    </style>
    <script async src="https://cse.google.com/cse.js?cx={{\App\Models\Setting::where('user_id', auth()->id())->value('google_search_id') ?? ''}}:y-hpcl-fl3o"></script>
</head>
<body>

<div class="container">
    <header>
        <h1>Mobizmark</h1>
    </header>

    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search for Local Shoppers">
        <button id="searchButton">Search</button>
    </div>

    <div class="location-info">
        <p>Order Products and Services from Businesses located in <span id="location-status"></span></p>
        <a href="#">Change Location</a>
    </div>

    <div class="main-content">
        <!-- Left Sidebar with Dropdowns -->
        <div class="category-sidebar">
            <h3>Categories</h3>

            <!-- First Dropdown (Main Category) -->
            <select id="main-category">
                <option value="">Select Main Category</option>
            </select>

            <!-- Second Dropdown (Subcategory) -->
            <select id="subcategory" style="display: none;"></select>

            <!-- Third Dropdown (Third-level Category) -->
            <select id="third-level-category" style="display: none;"></select>
        </div>

        <!-- Content Area -->
        <div class="content-area" id="content-area">
            <p>Select a category to view subcategories and results.</p>
            <div class="gcse-search"></div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Domains | Policies | Terms | About us | Contact us</p>
    </div>
</div>

<!-- JavaScript for dynamic loading -->
<script>
    // Initialize variables
    let categories = '';

    // Fetch categories from Laravel route
    fetch('/generate-array')
        .then(response => response.json())
        .then(data => {
            categories = data; // Store fetched categories
            console.log(categories);
            populateMainCategories(); // Populate main categories after data is fetched
        })
        .catch(error => {
            console.error('Error fetching categories:', error);
        });

    // DOM Elements
    const mainCategoryDropdown = document.getElementById('main-category');
    const subcategoryDropdown = document.getElementById('subcategory');
    const thirdLevelDropdown = document.getElementById('third-level-category');

    // Populate main categories dropdown
    function populateMainCategories() {
        mainCategoryDropdown.innerHTML = '<option value="">Select Main Category</option>';
        categories.forEach((category, index) => {
            mainCategoryDropdown.innerHTML += `<option value="${index}">${category.title}</option>`;
        });
    }

    // Handle main category change
    mainCategoryDropdown.addEventListener('change', function () {
        const categoryKey = this.value;
        if (categoryKey) {
            showSubcategories(categoryKey);
        } else {
            subcategoryDropdown.style.display = 'none';
            thirdLevelDropdown.style.display = 'none';
        }
    });

    // Function to show subcategories in the second dropdown
    function showSubcategories(categoryKey) {
        subcategoryDropdown.innerHTML = ''; // Clear the dropdown
        subcategoryDropdown.style.display = 'none'; // Hide initially
        thirdLevelDropdown.style.display = 'none'; // Hide third level dropdown
        thirdLevelDropdown.innerHTML = ''; // Clear third level options

        const category = categories[categoryKey];
        if (category) {
            subcategoryDropdown.style.display = 'block'; // Show dropdown
            subcategoryDropdown.innerHTML = `<option value="">Select Subcategory</option>`;

            category.subcategories.forEach((subcategory, index) => {
                subcategoryDropdown.innerHTML += `<option value="${index}">${subcategory.title}</option>`;
            });

            // Handle subcategory change
            subcategoryDropdown.addEventListener('change', function () {
                const subcategoryKey = this.value;
                if (subcategoryKey) {
                    showThirdLevelCategories(categoryKey, subcategoryKey);
                } else {
                    thirdLevelDropdown.style.display = 'none';
                }
            });
        }
    }

    // Function to show third-level categories in the third dropdown
    function showThirdLevelCategories(categoryKey, subcategoryKey) {
        thirdLevelDropdown.innerHTML = ''; // Clear the dropdown
        thirdLevelDropdown.style.display = 'none'; // Hide initially

        const thirdLevel = categories[categoryKey].subcategories[subcategoryKey];
        if (thirdLevel && thirdLevel.subcategories && thirdLevel.subcategories.length > 0) {
            thirdLevelDropdown.style.display = 'block'; // Show dropdown
            thirdLevelDropdown.innerHTML = `<option value="">Select Item</option>`;

            thirdLevel.subcategories.forEach(item => {
                thirdLevelDropdown.innerHTML += `<option value="${item}">${item}</option>`;
            });
        }
    }

</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if Geolocation is supported
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(success, error);
        } else {
            document.getElementById('location-status').textContent = 'Geolocation is not supported by this browser.';
        }

        // Success callback
        function success(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            getLocationName(latitude, longitude);
        }

        // Error callback
        function error() {
            document.getElementById('location-status').textContent = 'Unable to retrieve your location.';
        }

        // Convert latitude and longitude to city/state/country using reverse geocoding
        async function getLocationName(lat, lon) {
            try {
                const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`);
                const data = await response.json();
                const locationName = data.address.city || data.address.state || data.address.country;
                document.getElementById('location-status').textContent = `Location detected: ${locationName}`;

                // Modify the search query to include location
                document.getElementById('searchButton').addEventListener('click', function(e) {
                    e.preventDefault();
                    const query = document.getElementById('searchInput').value;
                    const locationQuery = `${query} in ${locationName}`;
                    runGoogleSearch(locationQuery); // Run search with the location
                });
            } catch (error) {
                console.error('Error retrieving location name:', error);
            }
        }

        // Function to run Google Programmable Search with the query
        function runGoogleSearch(query) {
            // Clear the previous search
            document.querySelector('.gcse-search').innerHTML = '';
            
            // Dynamically load the search with the updated query
            var cx = "{{\App\Models\Setting::where('user_id', auth()->id())->value('google_search_id') ?? ''}}:y-hpcl-fl3o"; // Your search engine ID
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
            document.querySelector('.gcse-search').appendChild(gcse);

            // Append the search query to the form
            var searchQuery = document.querySelector('.gsc-input');
            searchQuery.value = query;

            // Simulate a search
            var searchButton = document.querySelector('.gsc-search-button');
            searchButton.click();
        }
    });
</script>

</body>
</html>