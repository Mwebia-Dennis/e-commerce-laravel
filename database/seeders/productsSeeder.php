<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Iphone 11 pro',
                'description' => 'Iphone 11 pro, 3 gb ram, 24mp camera',
                'price' => 200,
                'image_url' => 'https://images.unsplash.com/photo-1580910051074-3eb694886505?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80'
            ],
            [
                'name'=>'Italian dress',
                'description' => 'Made in italy with comfortable silk material',
                'price' => 45,
                'image_url' => 'https://images.unsplash.com/photo-1539008835657-9e8e9680c956?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80'
            ],
            [
                'name'=>'GreatWall Tv',
                'description' => 'Old school vintage black and white tv',
                'price' => 10,
                'image_url' => 'https://images.unsplash.com/photo-1593078165899-c7d2ac0d6aea?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'
            ],
            [
                'name'=>'Sketchers',
                'description' => 'Made in US, nike product',
                'price' => 30,
                'image_url' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'
            ],
            [
                'name'=>'Diamond watch',
                'description' => 'Made in French with great design to fit your dress style',
                'price' => 120,
                'image_url' => 'https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'
            ]   
        ]);
    }
}
