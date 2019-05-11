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
        	'slug'                            => str_slug('Agriculture'),
        ]);

        Category::Create([
        	'name'                            => 'Food Nutrition',
        	'slug'                            => str_slug('Food Nutrition'),
        ]);

        Category::Create([
        	'name'                            => 'Architecture',
        	'slug'                            => str_slug('Architecture'),
        ]);

        Category::Create([
        	'name'                            => 'Construction',
        	'slug'                            => str_slug('Construction'),
        ]);

        Category::Create([
        	'name'                            => 'Arts',
        	'slug'                            => str_slug('Arts'),
        ]);

        Category::Create([
        	'name'                            => 'Audio/Video Technology',
        	'slug'                            => str_slug('Audio/Video Technology'),
        ]);

        Category::Create([
        	'name'                            => 'Telecommunications',
        	'slug'                            => str_slug('Telecommunications'),
        ]);

        Category::Create([
        	'name'                            => 'Business Management & Administration',
        	'slug'                            => str_slug('Business Management & Administration'),
        ]);

        Category::Create([
        	'name'                            => 'Education & Training',
        	'slug'                            => str_slug('Education & Training'),
        ]);

        Category::Create([
        	'name'                            => 'Accounts & Finance Services',
        	'slug'                            => str_slug('Accounts & Finance Services'),
        ]);

        Category::Create([
        	'name'                            => 'Government & Public Administration',
        	'slug'                            => str_slug('Government & Public Administration'),
        ]);

        Category::Create([
            'name'                            => 'Health & Pharmaceuticals',
            'slug'                            => str_slug('Health & Pharmaceuticals'),
        ]);

        Category::Create([
            'name'                            => 'Science & Technology',
            'slug'                            => str_slug('Science & Technology'),
        ]);

        Category::Create([
            'name'                            => 'Hospitality, Tourism, Travels',
            'slug'                            => str_slug('Hospitality, Tourism, Travels'),
        ]);

        Category::Create([
            'name'                            => 'Information Technology',
            'slug'                            => str_slug('Information Technology'),
        ]);


        Category::Create([
            'name'                            => 'Law, Public Safety, Corrections & Security',
            'slug'                            => str_slug('Law, Public Safety, Corrections & Security'),
        ]);


        Category::Create([
            'name'                            => 'Manufacturing',
            'slug'                            => str_slug('Manufacturing'),
        ]);



        Category::Create([
            'name'                            => 'Marketing & Sales',
            'slug'                            => str_slug('Marketing & Sales'),
        ]);

        Category::Create([
            'name'                            => 'Business Management & Administration',
            'slug'                            => str_slug('Business Management & Administration'),
        ]);

        Category::Create([
            'name'                            => 'Electrical/Electronic Engineering',
            'slug'                            => str_slug('Electrical/Electronic Engineering'),
        ]);

        Category::Create([
            'name'                            => 'Transportation, Distribution & Logistics',
            'slug'                            => str_slug('Transportation, Distribution & Logistics'),
        ]);

        Category::Create([
            'name'                            => 'General Business',
            'slug'                            => str_slug('General Business'),
        ]);


        Category::Create([
            'name'                            => 'Admin & Clerical',
            'slug'                            => str_slug('Admin & Clerical'),
        ]);

        Category::Create([
            'name'                            => 'Automobile Sales & Repairs',
            'slug'                            => str_slug('Automobile Sales & Repairs'),
        ]);


        Category::Create([
            'name'                            => 'Banking',
            'slug'                            => str_slug('Banking'),
        ]);


        Category::Create([
            'name'                            => 'Purchasing & Procurement',
            'slug'                            => str_slug('Purchasing & Procurement'),
        ]);

        Category::Create([
            'name'                            => 'Quality Assurance/Quality Control',
            'slug'                            => str_slug('Quality Assurance/Quality Control'),
        ]);

        Category::Create([
            'name'                            => 'Journalism',
            'slug'                            => str_slug('Journalism'),
        ]);

        Category::Create([
            'name'                            => 'Real Estate',
            'slug'                            => str_slug('Real Estate'),
        ]);


        Category::Create([
            'name'                            => 'Business Development & Human Resources',
            'slug'                            => str_slug('Business Development & Human Resources'),
        ]);

        Category::Create([
            'name'                            => 'Restaurant & Food Services',
            'slug'                            => str_slug('Restaurant & Food Services'),
        ]);


        Category::Create([
            'name'                            => 'Research & Inventions',
            'slug'                            => str_slug('Research & Inventions'),
        ]);

        Category::Create([
            'name'                            => 'Mechanical Engineering',
            'slug'                            => str_slug('Mechanical Engineering'),
        ]);

        Category::Create([
            'name'                            => 'Plumbing & Home Maintenance',
            'slug'                            => str_slug('Plumbing & Home Maintenance'),
        ]);


        Category::Create([
            'name'                            => 'Furniture & Carpentry',
            'slug'                            => str_slug('Furniture & Carpentry'),
        ]);

        Category::Create([
            'name'                            => 'Customer Service',
            'slug'                            => str_slug('Customer Service'),
        ]);

        Category::Create([
        	'name'                            => 'Insurance',
        	'slug'                            => str_slug('Insurance'),
        ]);

        Category::Create([
            'name'                            => 'Fashion Design & Tailoring',
            'slug'                            => str_slug('Fashion Design & Tailoring'),
        ]);

        Category::Create([
            'name'                            => 'Shipping, Clearing & Forwarding',
            'slug'                            => str_slug('Shipping, Clearing & Forwarding'),
        ]);

        Category::Create([
            'name'                            => 'Law Enforcement',
            'slug'                            => str_slug('Law Enforcement'),
        ]);

    }
}
