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
        $achievement->image ="Images/python.png";
        $achievement->content="este logro es el numero #1";
        $achievement->date=Carbon::now()->toDateString();
        $achievement->portal_id=1;
        $achievement->save();

        $achievement = new Achievement();
        $achievement->title = "logro numero #2";
        $achievement->area ="administrativa";
        $achievement->content="este logro es el numero #2";
        $achievement->image ="Images/python.png";
        $achievement->date=Carbon::now()->toDateString();
        $achievement->portal_id=1;
        $achievement->save();

        $achievement = new Achievement();
        $achievement->title = "logro numero #3";
        $achievement->area ="deportiva";
        $achievement->content="este logro es el numero #3";
        $achievement->image ="Images/python.png";
        $achievement->date=Carbon::now()->toDateString();
        $achievement->portal_id=1;
        $achievement->save();

        $achievement = new Achievement();
        $achievement->title = "logro numero #4";
        $achievement->area ="deportiva";
        $achievement->content="este logro es el numero #4";
        $achievement->date=Carbon::now()->toDateString();
        $achievement->image ="Images/python.png";
        $achievement->portal_id=1;
        $achievement->save();

        $achievement = new Achievement();
        $achievement->title = "logro numero #5";
        $achievement->area ="deportiva";
        $achievement->content="este logro es el numero #5";
        $achievement->image ="Images/python.png";
        $achievement->date=Carbon::now()->toDateString();
        $achievement->portal_id=1;
        $achievement->save();
    }
}
