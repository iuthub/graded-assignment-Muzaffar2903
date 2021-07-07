<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'task' => 'Random Task',
        ]);
    }
}
