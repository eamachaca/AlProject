<?php
use App\Models\Regulation;
use Illuminate\Database\Seeder;

class RegulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regulation::truncate();

        $regulation = new Regulation();
        $regulation->title="reglamento # 1";
        $regulation->description="esta es la descripcion del reglamento #1";
        $regulation->portal_id="1";
        $regulation->save();

        $regulation = new Regulation();
        $regulation->title="reglamento # 2";
        $regulation->description="esta es la descripcion del reglamento #2";
        $regulation->portal_id="1";
        $regulation->save();

        $regulation = new Regulation();
        $regulation->title="reglamento # 3";
        $regulation->description="esta es la descripcion del reglamento #3";
        $regulation->portal_id="1";
        $regulation->save();
    }
}
