<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = factory(App\Project::class,20)->create();
    }
}
