<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::Create([
        	'name'                            => 'Agriculture',
            'image'                            => 'assets-web/img/categories/agric.jpg',
        	'slug'                            => str_slug('Agriculture'),
        ]);

        Category::Create([
        	'name'                            => 'Food Nutrition',
            'image'                            => 'assets-web/img/categories/nutrition.jpg',
        	'slug'                            => str_slug('Food Nutrition'),
        ]);

        Category::Create([
        	'name'                            => 'Architecture',
            'image'                            => 'assets-web/img/categories/architecture.jpg',
        	'slug'                            => str_slug('Architecture'),
        ]);

        Category::Create([
        	'name'                            => 'Construction',
            'image'                            => 'assets-web/img/categories/construction.jpg',
        	'slug'                            => str_slug('Construction'),
        ]);

        Category::Create([
        	'name'                            => 'Arts',
            'image'                            => 'assets-web/img/categories/arts.jpg',
        	'slug'                            => str_slug('Arts'),
        ]);

        Category::Create([
        	'name'                            => 'Audio/Video Technology',
            'image'                            => 'assets-web/img/categories/audio.jpg',
        	'slug'                            => str_slug('Audio/Video Technology'),
        ]);

        Category::Create([
        	'name'                            => 'Telecommunications',
            'image'                            => 'assets-web/img/categories/telecoms.jpg',
        	'slug'                            => str_slug('Telecommunications'),
        ]);

        Category::Create([
        	'name'                            => 'Education & Training',
            'image'                            => 'assets-web/img/categories/education.jpg',
        	'slug'                            => str_slug('Education & Training'),
        ]);

        Category::Create([
        	'name'                            => 'Accounts & Finance Services',
            'image'                            => 'assets-web/img/categories/account.jpg',
        	'slug'                            => str_slug('Accounts & Finance Services'),
        ]);

        Category::Create([
            'name'                            => 'Health & Pharmaceuticals',
            'image'                            => 'assets-web/img/categories/health.jpg',
            'slug'                            => str_slug('Health & Pharmaceuticals'),
        ]);

        Category::Create([
            'name'                            => 'Science & Technology',
            'image'                            => 'assets-web/img/categories/science.jpg',
            'slug'                            => str_slug('Science & Technology'),
        ]);

        Category::Create([
            'name'                            => 'Hospitality, Tourism, Travels',
            'image'                            => 'assets-web/img/categories/hospitality.jpg',
            'slug'                            => str_slug('Hospitality, Tourism, Travels'),
        ]);

        Category::Create([
            'name'                            => 'Information Technology',
            'image'                            => 'assets-web/img/categories/infotech.jpg',
            'slug'                            => str_slug('Information Technology'),
        ]);


        Category::Create([
            'name'                            => 'Law, Public Safety, Corrections & Security',
            'image'                            => 'assets-web/img/categories/security.jpg',
            'slug'                            => str_slug('Law, Public Safety, Corrections & Security'),
        ]);


        Category::Create([
            'name'                            => 'Manufacturing',
            'image'                            => 'assets-web/img/categories/manufacturing.jpg',
            'slug'                            => str_slug('Manufacturing'),
        ]);
        
        Category::Create([
            'name'                            => 'Marketing & Sales',
            'image'                            => 'assets-web/img/categories/marketing.jpg',
            'slug'                            => str_slug('Marketing & Sales'),
        ]);

        Category::Create([
            'name'                            => 'Business Management & Administration',
            'image'                            => 'assets-web/img/categories/bizman.jpg',
            'slug'                            => str_slug('Business Management & Administration'),
        ]);

        Category::Create([
            'name'                            => 'Electrical/Electronic Engineering',
            'image'                            => 'assets-web/img/categories/electric.jpg',
            'slug'                            => str_slug('Electrical/Electronic Engineering'),
        ]);

        Category::Create([
            'name'                            => 'Transportation, Distribution & Logistics',
            'image'                            => 'assets-web/img/categories/transport.jpg',
            'slug'                            => str_slug('Transportation, Distribution & Logistics'),
        ]);

        Category::Create([
            'name'                            => 'General Business',
            'image'                            => 'assets-web/img/categories/biz.jpg',
            'slug'                            => str_slug('General Business'),
        ]);


        Category::Create([
            'name'                            => 'Admin & Clerical',
            'image'                            => 'assets-web/img/categories/admin.jpg',
            'slug'                            => str_slug('Admin & Clerical'),
        ]);

        Category::Create([
            'name'                            => 'Automobile Sales & Repairs',
            'image'                            => 'assets-web/img/categories/automobile.jpg',
            'slug'                            => str_slug('Automobile Sales & Repairs'),
        ]);


        Category::Create([
            'name'                            => 'Banking',
            'image'                            => 'assets-web/img/categories/banking.jpg',
            'slug'                            => str_slug('Banking'),
        ]);


        Category::Create([
            'name'                            => 'Purchasing & Procurement',
            'image'                            => 'assets-web/img/categories/procurement.jpg',
            'slug'                            => str_slug('Purchasing & Procurement'),
        ]);

        Category::Create([
            'name'                            => 'Quality Assurance/Quality Control',
            'image'                            => 'assets-web/img/categories/quality.jpg',
            'slug'                            => str_slug('Quality Assurance/Quality Control'),
        ]);

        Category::Create([
            'name'                            => 'Journalism',
            'image'                            => 'assets-web/img/categories/journalism.jpg',
            'slug'                            => str_slug('Journalism'),
        ]);

        Category::Create([
            'name'                            => 'Real Estate',
            'image'                            => 'assets-web/img/categories/real-estate.jpg',
            'slug'                            => str_slug('Real Estate'),
        ]);


        Category::Create([
            'name'                            => 'Business Development & Human Resources',
            'image'                            => 'assets-web/img/categories/bizdev.jpg',
            'slug'                            => str_slug('Business Development & Human Resources'),
        ]);

        Category::Create([
            'name'                            => 'Restaurant & Food Services',
            'image'                            => 'assets-web/img/categories/food.jpg',
            'slug'                            => str_slug('Restaurant & Food Services'),
        ]);


        Category::Create([
            'name'                            => 'Research & Inventions',
            'image'                            => 'assets-web/img/categories/research.jpg',
            'slug'                            => str_slug('Research & Inventions'),
        ]);

        Category::Create([
            'name'                            => 'Mechanical Engineering',
            'image'                            => 'assets-web/img/categories/mech.jpg',
            'slug'                            => str_slug('Mechanical Engineering'),
        ]);

        Category::Create([
            'name'                            => 'Plumbing & Home Maintenance',
            'image'                            => 'assets-web/img/categories/plumbing.jpg',
            'slug'                            => str_slug('Plumbing & Home Maintenance'),
        ]);


        Category::Create([
            'name'                            => 'Furniture & Carpentry',
            'image'                            => 'assets-web/img/categories/furniture.jpg',
            'slug'                            => str_slug('Furniture & Carpentry'),
        ]);

        Category::Create([
            'name'                            => 'Customer Service',
            'image'                            => 'assets-web/img/categories/customer.jpg',
            'slug'                            => str_slug('Customer Service'),
        ]);

        Category::Create([
        	'name'                            => 'Insurance',
            'image'                            => 'assets-web/img/categories/insurance.jpg',
        	'slug'                            => str_slug('Insurance'),
        ]);

        Category::Create([
            'name'                            => 'Fashion Design & Tailoring',
            'image'                            => 'assets-web/img/categories/fashion.jpg',
            'slug'                            => str_slug('Fashion Design & Tailoring'),
        ]);

        Category::Create([
            'name'                            => 'Shipping, Clearing & Forwarding',
            'image'                            => 'assets-web/img/categories/shipping.jpg',
            'slug'                            => str_slug('Shipping, Clearing & Forwarding'),
        ]);

        Category::Create([
            'name'                            => 'Law Enforcement',
            'image'                            => 'assets-web/img/categories/law.png',
            'slug'                            => str_slug('Law Enforcement'),
        ]);

    }
}
