<?php

use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $achievement = new Achievement();
        $achievement->title = "titulo1";
        $achievement->area ="academica";
        $achievement->content="contenido full";
        $achievement->image="imagen_link";
        $achievement->date=Carbon::now();
        $achievement->portal_id=1;
        $achievement->save();
    }
}
