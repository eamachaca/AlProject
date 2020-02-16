<?php
use App\Models\Career;
use Illuminate\Database\Seeder;

class CarreerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::truncate();

        $career=new Career(); 
        $career->name="Ingeniería Informática"   ;
        $career->acronym="187-3";
        $career->mission="En concordancia con la Misión de la universidad, la carrera de Ingeniería Informática ha formulado su misión equilibrando cuatro polos: los logros del pasado, los desafíos del futuro, el medio externo y el medio interno.
        La carrera de Ingeniería Informática tiene por misión la formación integral y permanente de profesionales en ciencias de la computación para la creación, difusión y cultivo de las tecnologías de la información y de la comunicación, siendo líderes y agentes de cambio para promover la equidad y la justicia social.";
        $career->vision="La carrera de Ingeniería Informática está acreditada a nivel nacional e internacional y es reconocida y valorada por su calidad y pertinencia social.";
        $career->welcome="Es un honor para mí darte la bienvenida a la Carrera de Ingeniería Informática de la Facultad de Ingeniería en Ciencias de la Computación y Telecomunicaciones.
        Nuestra carrera pretende forjar a los líderes del futuro en materia de las Tecnologías de la información. Por ello, trabajamos por consolidar el desarrollo de los docentes y estudiantes, preocupándonos por la formación integral que responda a las necesidades regionales y nacionales.";
        $career->director="Evan balcazar veizaga 2014";
        $career->portal_id="1";
        $career->save();

        $career=new Career(); 
        $career->name="Ingeniería en Redes y Telecomunicaciones"   ;
        $career->acronym="187-5";
        $career->mission="La formación integral y permanente de profesionales en Redes y Telecomunicaciones para la creación, difusión y cultivo de las tecnologías de la Información y de la comunicación, siendo líderes y agentes de cambio para promover la equidad y justicia social.";
        $career->vision="La carrera de Ingeniería de Redes y Telecomunicaciones es reconocida y valorada por su calidad y pertinencia social.
        Docentes y estudiantes están involucrados en procesos de investigación y acreditación";
        $career->welcome="Para mi es de mucho agrado poder dirigirme a ustedes estimados Docentes  y estudiantes de la carrera de Ing. en Redes  y Telecomunicaciones. Quiero aprovechar esta oportunidad para darle la más cordial bienvenida a la  Carrera Ingeniería en Redes  y Telecomunicaciones, donde consideramos que el trabajo en equipo tanto de directores como Docentes y del personal administrativo es de vital importancia para el desempeño de nuestras tareas.
        La ingeniería en Redes  y Telecomunicaciones  es una carrera que combina dos campos, el de los sistemas informáticos y el de las telecomunicaciones para dar respuesta a la integración de las tecnologías en diversos medios, conocidas en la actualidad como las Tecnologías de la Información y las Comunicaciones (TIC), las cuáles están acortando cada vez más las distancias para hacer del nuestro, un planeta globalizado, lo que ha incrementado notablemente la demanda de profesionales en este campo." ;
        $career->director="ing. leonardo peña";
        $career->portal_id="1";
        $career->save();

        $career=new Career(); 
        $career->name="Ingeniería en Sistemas"   ;
        $career->acronym="187-4";
        $career->mission="Formar profesionales capaces de crear, innovar y aplicar las tecnologías de la información para mejorar la gestión industrial y empresarial impulsando así el desarrollo regional y nacional.";
        $career->vision=" La carrera de Ingeniería de Sistemas es reconocida y valorada por su calidad y pertinencia social.;
     
        - Docentes y estudiantes están involucrados en procesos de investigación y acreditación";
        $career->welcome="La Carrera de ingeniería en Sistemas es una carrera plenamente acreditada ante la agencia de acreditación del CEUB; como consecuencia de la calidad y transparencia de sus actividades académicas al interior y exterior de la Carrera; el contar con un staff de docentes y administrativos altamente motivado y capacitado en pedagogía universitaria; enfocados en la misión de:
     
        “Formar profesionales capaces de crear, innovar y aplicar las tecnologías de la información para mejorar la gestión industrial y empresarial impulsando así el desarrollo regional y nacional”, sin dejar de lado la formación en valores ética y responsabilidad, nos permite ofrecerles un programa de formación que se encuentra en los primeros lugares del país.
        ";
        $career->director="directora Katime";
        $career->portal_id="1";
        
        $career->save();
     
    }
}
