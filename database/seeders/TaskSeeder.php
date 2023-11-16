<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Task::create([
            'title' => 'Limpar a casa',
            'description' => 'limpar a casa até terça',
            'due_date' => '2022-12-12',
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
