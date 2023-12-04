<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Seeder;
use database\factories\CategoryFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //UserSeeder::class
        ]);
        Category::factory(4)->create();
        Task::factory(30)->create();
<<<<<<< HEAD
        User::factory(10)->create();
=======
        User::factory(100)->create();
>>>>>>> d6b97405e0ee79454731648a044c00e1996d366b

    }
}
