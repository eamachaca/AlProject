<?php

use Carbon\Carbon;
use App\Models\News;
use Illuminate\Database\Seeder;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        news::truncate(); 
   
        $new = new News();
        $new->title="Excel Intermedio-Avanzado";
        $new->area="academica";
        $new->content="HOY INICIAMOS - CURSO: Excel Intermedio-Avanzado - fecha: 14-Enero-2020 - UAGRM(Ing. Comercial)";
        $new->image='Images/img_excel.jpg';
        $new->date=Carbon::now()->toDateString();
        $new->portal_id=1;
        $new->save();

        $new = new News();
        $new->title="bienvenido a la comunidad de python santa cruz";
        $new->area="academica";
        $new->content="ayudanos a definir nuestro calendario de actividades para  este año , esperamos tus comentarios y esperemos poder conocernos y realizar varias actividades como comunidad";
        $new->image='Images/python.jpg';
        $new->date=Carbon::now()->toDateString();
        $new->portal_id=1;
        $new->save();

        $new = new News();
        $new->title="Convocatoria para auxiliares de docencia";
        $new->area="academica";
        $new->content="se le invita para auxiliares de docencia en salas de computo";
        $new->image='Images/convocatoria.jpg';
        $new->date=Carbon::now()->toDateString();
        $new->portal_id=1;
        $new->save();

        $new = new News();
        $new->title="CURSO DE ENSAMBLADO Y MANTENIMIENTO DE COMPUTADORAS";
        $new->area="academica";
        $new->content="Prepárate para Reparar y configurar un Computador en la Facultad de Ciencias de la Computación de la Universidad Autónoma Gabriel René Moreno.
        Ven y prepárate con nosotros!
        Curso de Capacitación en Mantenimiento y Ensamblado de computadoras Portátil y Desktop.";
        $new->image='Images/computadoras.jpg';
        $new->date=Carbon::now()->toDateString();
        $new->portal_id=1;
        $new->save();

        
        
    }
}
