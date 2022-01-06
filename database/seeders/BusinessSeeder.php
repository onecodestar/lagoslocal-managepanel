<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('businesses')->insert([
            'name' => 'Roberto Restaurant',
            'description' => 'The best Italian restaurant in Lagos',
            'business_type_id' => 1,
            'picture' => '/businesses/1.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.restaurant',
            'owner_id' => 2,
            'address' => 'Qatar',
            'lat' => 48.865633,
            'lng' => 2.321236,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('businesses')->insert([
            'name' => 'Plumber Home service',
            'description' => 'Best plumber service',
            'business_type_id' => 4,
            'picture' => '/businesses/2.jpg',
            'call' => '+1 234 567 890',
            'website' => 'https://best.plumber',
            'owner_id' => 2,
            'address' => '1 Adenubi Cl, Allen 101233, Ikeja, Nigeria',
            'lat' => 48.860819,
            'lng' => 2.354507,
            'open_time' => '9:00 am',
            'close_time' => '11:00 pm',
            'sunday_status' => 1,
            'services' => '["Buffet Catering","Vegan Options","Gluten Free Meals","Bear & Wine Only"]',
            'amenities' => '["Accepts Credit Cards","Staff wears masks"]',
            'feature_ids' => '[1,2]',
            'country_ids' => '[1,2]',
            'cuisine_ids' => '[1,2]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
