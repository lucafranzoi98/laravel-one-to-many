<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            $project = new Project();
            $project->title = $faker->realText(50);
            $project->slug = Str::slug($project->title, '-');
            $project->image = 'placholders/' . $faker->image('public/storage/placeholders', category:'Projects', fullPath:false);
            $project->description = $faker->realText(50);
            $project->save();
        }
    }
}
