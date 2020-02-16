<?php

use Illuminate\Database\Seeder;
use App\Models\Achievement;
use Carbon\Carbon;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Achievement::truncate();

        $achievement = new Achievement();
        $achievement->title = "logro numero #1";
        $achievement->area ="academica";
        $achievement->content="este logro es el numero #1";
        $achievement->image="imagen_link";
        $achievement->date=Carbon::now()->toDateString();
        $achievement->portal_id=1;
        $achievement->save();

        $achievement = new Achievement();
        $achievement->title = "logro numero #2";
        $achievement->area ="administrativa";
        $achievement->content="este logro es el numero #2";
        $achievement->image="imagen_link";
        $achievement->date=Carbon::now()->toDateString();
        $achievement->portal_id=1;
        $achievement->save();

        $achievement = new Achievement();
        $achievement->title = "logro numero #3";
        $achievement->area ="deportiva";
        $achievement->content="este logro es el numero #3";
        $achievement->image="imagen_link";
        $achievement->date=Carbon::now()->toDateString();
        $achievement->portal_id=1;
        $achievement->save();
    }
}
