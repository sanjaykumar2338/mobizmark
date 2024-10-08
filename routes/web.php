<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\SettingMainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createpassword', function () {
    $pass = 'RM99k4MqZMpyl2k';
    return Hash::make($pass);
});

Route::get('/insertindb', function () {
    $categories = array('auto' => array('title' => 'Auto', 'subcategories' => array('auto-parts' => array('title' => 'Auto Parts', 'subcategories' => array('Batteries', 'Brakes', 'Tires', 'Windshield Wipers')), 'car-dealerships' => array('title' => 'Car Dealerships', 'subcategories' => array('New Cars', 'Pre-Owned Cars', 'SUVs', 'Trucks')), 'car-rentals' => array('title' => 'Car Rentals', 'subcategories' => array('Compact Cars', 'Luxury Cars', 'SUVs', 'Vans')), 'mechanics' => array('title' => 'Mechanics', 'subcategories' => array('Brake Repair', 'Engine Repair', 'Oil Changes', 'Transmission Repair')))), 'beauty-wellness' => array('title' => 'Beauty & Wellness', 'subcategories' => array('barbers' => array('title' => 'Barbers', 'subcategories' => array('Beard Trims', 'Haircuts', 'Hot Towel Shaves', 'Lineups')), 'hair-salons' => array('title' => 'Hair Salons', 'subcategories' => array('Blowouts', 'Coloring', 'Haircuts', 'Highlights')), 'massage-therapy' => array('title' => 'Massage Therapy', 'subcategories' => array('Deep Tissue Massage', 'Hot Stone Massage', 'Swedish Massage', 'Thai Massage')))), 'entertainment' => array('title' => 'Entertainment', 'subcategories' => array('comedy-clubs' => array('title' => 'Comedy Clubs', 'subcategories' => array('Stand-Up Shows', 'Improv Nights', 'Open Mic Nights', 'Comedy Festivals')), 'concert-venues' => array('title' => 'Concert Venues', 'subcategories' => array('Indoor Arenas', 'Music Festivals', 'Outdoor Amphitheaters', 'Stadiums')), 'events' => array('title' => 'Events', 'subcategories' => array('Weddings', 'Corporate Events', 'Performances', 'Private Parties')), 'nightlife' => array('title' => 'Nightlife', 'subcategories' => array('Dance Clubs', 'Cocktail Bars', 'Lounges', 'Sports Bars')))), 'fashion' => array('title' => 'Fashion', 'subcategories' => array('accessories' => array('title' => 'Accessories', 'subcategories' => array('Bags', 'Eyewear', 'Headwear', 'Watches')), 'clothing' => array('title' => 'Clothing', 'subcategories' => array('Activewear', 'Casual Wear', 'Formal Wear', 'Outerwear')), 'footwear' => array('title' => 'Footwear', 'subcategories' => array('Athletic Shoes', 'Boots', 'Comfort Shoes', 'Heels')), 'jewelry' => array('title' => 'Jewelry', 'subcategories' => array('Weddings & Engagements', 'Everyday Wear', 'Formal Events', 'Gifts')))), 'food-drink' => array('title' => 'Food & Drink', 'subcategories' => array('bakeries' => array('title' => 'Bakeries', 'subcategories' => array('Breads', 'Cakes', 'Cookies', 'Pastries')), 'cafes' => array('title' => 'Cafés', 'subcategories' => array('Coffee', 'Pastries', 'Sandwiches', 'Teas')), 'groceries' => array('title' => 'Groceries', 'subcategories' => array('Liquor Stores', 'Farmers Markets', 'Delis', 'Specialty Stores')), 'restaurants' => array('title' => 'Restaurants', 'subcategories' => array('Chinese Food', 'Indian Food', 'Italian Food', 'Mexican Food')))), 'home-garden' => array('title' => 'Home & Garden', 'subcategories' => array('furniture-stores' => array('title' => 'Furniture Stores', 'subcategories' => array('Beds', 'Coffee Tables', 'Couches', 'Dining Tables')), 'gardening-supplies' => array('title' => 'Gardening Supplies', 'subcategories' => array('Flower Seeds', 'Garden Tools', 'Planters', 'Vegetable Seeds')), 'home-decor' => array('title' => 'Home Décor', 'subcategories' => array('Lighting', 'Mirrors', 'Rugs', 'Wall Art')), 'landscaping' => array('title' => 'Landscaping', 'subcategories' => array('Lawn Mowing', 'Mulching', 'Planting', 'Tree Trimming')))), 'insurance' => array('title' => 'Insurance', 'subcategories' => array('auto-insurance' => array('title' => 'Auto Insurance', 'subcategories' => array('Collision Coverage', 'Comprehensive Coverage', 'Liability Coverage', 'Personal Injury Protection')), 'health-insurance' => array('title' => 'Health Insurance', 'subcategories' => array('Dental Plans', 'Health Maintenance Organizations (HMOs)', 'Preferred Provider Organizations (PPOs)', 'Vision Plans')), 'homeowners-insurance' => array('title' => 'Homeowners Insurance', 'subcategories' => array('Dwelling Coverage', 'Liability Coverage', 'Personal Property Coverage', 'Windstorm Insurance')), 'life-insurance' => array('title' => 'Life Insurance', 'subcategories' => array('Term Life', 'Universal Life', 'Whole Life', 'Accidental Death and Dismemberment (AD&D)')))), 'legal' => array('title' => 'Legal', 'subcategories' => array('bankruptcy-lawyers' => array('title' => 'Bankruptcy Lawyers', 'subcategories' => array('Chapter 7', 'Chapter 13', 'Debt Relief', 'Foreclosure Defense')), 'criminal-defense-lawyers' => array('title' => 'Criminal Defense Lawyers', 'subcategories' => array('DUI Defense', 'Drug Charges', 'Expungements', 'Felony Defense')), 'family-law-attorneys' => array('title' => 'Family Law Attorneys', 'subcategories' => array('Child Custody', 'Divorce', 'Prenuptial Agreements', 'Spousal Support')), 'personal-injury-lawyers' => array('title' => 'Personal Injury Lawyers', 'subcategories' => array('Car Accidents', 'Medical Malpractice', 'Slip and Fall', 'Wrongful Death')))), 'medical' => array('title' => 'Medical', 'subcategories' => array('dentists' => array('title' => 'Dentists', 'subcategories' => array('Cleanings', 'Fillings', 'Root Canals', 'Teeth Whitening')), 'hospitals' => array('title' => 'Hospitals', 'subcategories' => array('Emergency Room', 'Inpatient Surgery', 'Maternity Services', 'Outpatient Surgery')), 'pharmacies' => array('title' => 'Pharmacies', 'subcategories' => array('Flu Shots', 'Prescription Refills', 'Over-the-Counter Medications', 'Vaccinations')), 'physical-therapy' => array('title' => 'Physical Therapy', 'subcategories' => array('Pain Management', 'Post-Operative Care', 'Rehabilitation', 'Sports Therapy')))), 'real-estate' => array('title' => 'Real Estate', 'subcategories' => array('commercial-real-estate' => array('title' => 'Commercial Real Estate', 'subcategories' => array('Industrial Space', 'Office Space', 'Retail Space', 'Warehouses')), 'property-management' => array('title' => 'Property Management', 'subcategories' => array('Commercial Properties', 'Residential Properties', 'Tenant Screening', 'Vacation Rentals')), 'real-estate-agents' => array('title' => 'Real Estate Agents', 'subcategories' => array('Buyer’s Agents', 'Listing Agents', 'Property Investment Consultants', 'Rental Agents')), 'real-estate-appraisers' => array('title' => 'Real Estate Appraisers', 'subcategories' => array('Commercial Appraisals', 'Land Appraisals', 'Residential Appraisals', 'Tax Assessments')))));


    function createCategory($name, $slug, $category_type_id, $parent_id = null)
    {
        // Check if slug already exists for this category_type_id
        $original_slug = $slug;
        $count = 1;
        while (DB::table('categories')->where('category_type_id', $category_type_id)->where('slug', $slug)->exists()) {
            $slug = $original_slug . '-' . $count; // Append number to slug to make it unique
            $count++;
        }

        // Insert category
        return DB::table('categories')->insertGetId([
            'category_type_id' => $category_type_id,
            'name' => $name,
            'slug' => $slug,
            'parent_id' => $parent_id,
            'enabled' => 1, // Enable by default
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    function insertCategories($categories, $parent_id = null)
    {
        $category_type_id = 1; // Use category_type_id = 1 as requested

        foreach ($categories as $key => $category) {
            // Create main category
            $slug = Str::slug($category['title']);
            $category_id = createCategory($category['title'], $slug, $category_type_id, $parent_id);

            // If there are subcategories, recursively insert them
            if (isset($category['subcategories']) && is_array($category['subcategories'])) {
                foreach ($category['subcategories'] as $subKey => $subCategory) {
                    if (is_array($subCategory)) {
                        // This is a subcategory with nested subcategories
                        $subSlug = Str::slug($subCategory['title']);
                        $subCategoryId = createCategory($subCategory['title'], $subSlug, $category_type_id, $category_id);

                        // Check for 3rd-level categories
                        if (isset($subCategory['subcategories']) && is_array($subCategory['subcategories'])) {
                            foreach ($subCategory['subcategories'] as $thirdLevelCategory) {
                                $thirdSlug = Str::slug($thirdLevelCategory);
                                createCategory($thirdLevelCategory, $thirdSlug, $category_type_id, $subCategoryId);
                            }
                        }
                    } else {
                        // This is a simple subcategory
                        $subSlug = Str::slug($subCategory);
                        createCategory($subCategory, $subSlug, $category_type_id, $category_id);
                    }
                }
            }
        }
    }

    // Insert all categories
    insertCategories($categories);

    return "Categories inserted successfully!";


});

Route::get('/generate-array', function () {
    // Fetch categories and load their subcategories recursively
    $categories = Category::whereNull('parent_id') // Fetch parent categories
        ->where('category_type_id', 1) // Assuming 'category_type_id' 1 for filtering
        ->with('children.children.children') // Recursive loading for three levels
        ->get();

    // Transform categories into hierarchical array
    $categoryArray = $categories->map(function ($category) {
        return [
            'title' => $category->name,
            'subcategories' => $category->children->map(function ($subcategory) {
                return [
                    'title' => $subcategory->name,
                    'subcategories' => $subcategory->children->map(function ($thirdLevelCategory) {
                        return $thirdLevelCategory->name;
                    })->toArray()
                ];
            })->toArray()
        ];
    })->toArray();

    // Return the generated array
    return response()->json($categoryArray);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/settings', [SettingMainController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingMainController::class, 'store'])->name('settings.store');
});

require __DIR__.'/auth.php';
