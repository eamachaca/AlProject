<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PortalSeeder::class);
        $this->call(NewSeeder::class);
        $this->call(AchievementSeeder::class);
        $this->call(RuleSeeder::class);
        $this->call(RegulationSeeder::class);
        $this->call(CarreerSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(StudioPlanSeeder::class);
    }
}
