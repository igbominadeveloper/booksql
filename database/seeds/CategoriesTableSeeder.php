<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $categories = [
        'Business',
        'Politics',
        'Education',
        'Environment',
        'Health',
        'Finance',
        'Web Development'
    ];

    public function run()
    {
        foreach ($this->categories as $category)
        {
            Category::create(['name' => $category]);
        }
    }
}
