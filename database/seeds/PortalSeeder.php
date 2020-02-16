<?php
use Carbon\Carbon;
use App\Models\Portal;
use App\Models\Achievement;
use Illuminate\Database\Seeder;

class PortalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        portal::truncate(); // para evitar duplicados 

        $portal = new Portal();
        $portal->mission = "esta es la mision";
        $portal->vision = "esta es la vision";
        $portal->title="este es el titulo";
        $portal->welcome="esta es la bienvenida";

        $portal->save();

        $portal = new Portal();
        $portal->mission = "esta es la mision 2";
        $portal->vision = "esta es la vision 2" ;
        $portal->title="este es el titulo 2";
        $portal->welcome="esta es la bienvenida 2";

        $portal->save();

            
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

