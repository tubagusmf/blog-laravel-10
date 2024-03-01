<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Config::insert([
            [
                'name'  => 'logo',
                'value' => 'logo.png'
            ],
            [
                'name'  => 'blogname',
                'value' => 'Tebe Blog'
            ],
            [
                'name'  => 'title',
                'value' => 'Welcome To My Blog'
            ],
            [
                'name'  => 'caption',
                'value' => 'A Bootstrap 5 starter layout for your next blog homepage'
            ],
            [
                'name'  => 'ads_widget',
                'value' => 'adsense 1'
            ],
            [
                'name'  => 'ads_header',
                'value' => 'adsense 1'
            ],
            [
                'name'  => 'ads_footer',
                'value' => 'adsense 1'
            ],
            [
                'name'  => 'phone',
                'value' => '087884960137'
            ],
            [
                'name'  => 'email',
                'value' => 'tubagus@gmail.com'
            ],
            [
                'name'  => 'facebook',
                'value' => 'facebook.com'
            ],
            [
                'name'  => 'instagram',
                'value' => 'instagram.com'
            ],
            [
                'name'  => 'youtube',
                'value' => 'youtube.com'
            ],
            [
                'name'  => 'footer',
                'value' => 'Tebe Blog'
            ],
        ]);
    }
}
