<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ["name" => "胸部"],
            ["name" => "背部"],
            ["name" => "肩膀"],
            ["name" => "腿部"],
            ["name" => "手臂"],
            ["name" => "核心"],
            ["name" => "其他"]
        ];

        foreach ($categories as $category) {
            Category::firstOrCraate($category);
        }
    }
}
