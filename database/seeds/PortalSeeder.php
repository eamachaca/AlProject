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
        $portal->mission = "La Facultad de Ingeniería en Ciencias de la Computación y Telecomunicaciones es una unidad de gestión, organización y desarrollo de actividades académicas, investigación y extensión para la formación integral de profesionales en ciencias de la computación y telecomunicación para la creación, difusión y cultivo de las tecnologías de la información y comunicación en pre y postgrado para contribuir al logro del desarrollo humano sostenible.";
        $portal->vision = "Para el año 2018, la Facultad de Ingeniería en Ciencias de la Computación, Redes y Telecomunicaciones, es reconocida por la calidad de gestión académica - administrativa, de sus programas formativos de pre y postgrado, por la generación de conocimiento científico y tecnológico pertinente y adecuado a los requerimientos del desarrollo científico y tecnológico a nivel nacional e internacional.";
        $portal->title="este es el titulo";
        $portal->welcome="Bienvenidos a la Página de la Facultad de Ingeniería de Ciencias de la Comunicación y Telecomunicaciones (F.I.C.C.T.) de la Universidad Autónoma Gabriel René Moreno (U.A.G.R.M.).

        Esperamos que puedas encontrar toda la información y documentos de tu interés. Por este medio te estaremos haciendo conocer sobre las novedades y eventos académicos de la Facultad, así que ¡no dejes de visitarnos!.";
        $portal->save();

        
            
       
    }
}

