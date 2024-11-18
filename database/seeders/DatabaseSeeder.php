<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Profile;
Use App\Models\Course;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        Profile::factory(10)->create();
        Course::factory(10)->create();

        foreach (User::all() as $User) {
            $courses = Course::inRandomOrder()->limit(rand(2, 7))->pluck('id');
            $User->courses()->attach($courses);
        }
    }
}
