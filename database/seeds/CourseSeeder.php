<?php
use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        Course::truncate();

        $course= new Course();
        $course->name="FISICA 1";
        $course->acronym="FIS 100 ";
        $course->credit="5";
        $course->semester_id="1";
        $course->save();

        
        $course= new Course();
        $course->name="INTRODUCCION A LA INFORMATICA";
        $course->acronym="INF 110";
        $course->credit="5";
        $course->semester_id="1";
        $course->save();
        
        $course= new Course();
        $course->name="ESTRUCTURAS DISCRETAS";
        $course->acronym="INF 119";
        $course->credit="5";
        $course->semester_id="1";
        $course->save();

        
        $course= new Course();
        $course->name="INGLES TECNICO I";
        $course->acronym="LIN 100";
        $course->credit="5";
        $course->semester_id="1";
        $course->save();

        
        $course= new Course();
        $course->name="CALCULO I";
        $course->acronym="MAT 101";
        $course->credit="5";
        $course->semester_id="1";
        $course->save();


//SEMESTRE 2


        $course= new Course();
        $course->name="FISICA II";
        $course->acronym="FIS 102 ";
        $course->credit="5";
        $course->semester_id="2";
        $course->save();

        
        $course= new Course();
        $course->name="PROGRAMACION I";
        $course->acronym="INF 120";
        $course->credit="5";
        $course->semester_id="2";
        $course->save();
        
        $course= new Course();
        $course->name="INGLES TECNICO II";
        $course->acronym="MAT 101";
        $course->credit="5";
        $course->semester_id="2";
        $course->save();

        
        $course= new Course();
        $course->name="CALCULO II";
        $course->acronym="MAT 102";
        $course->credit="5";
        $course->semester_id="2";
        $course->save();

        
        $course= new Course();
        $course->name="ALGEBRA LINEAL";
        $course->acronym="MAT 103";
        $course->credit="5";
        $course->semester_id="2";
        $course->save();

        //3ER SEMESTRE

        $course= new Course();
        $course->name="PROGRAMACION II";
        $course->acronym="MAT 103";
        $course->credit="5";
        $course->semester_id="3";
        $course->save();

        $course= new Course();
        $course->name="ARQUITECTURA DE COMPUTADORAS";
        $course->acronym="MAT 103";
        $course->credit="5";
        $course->semester_id="3";
        $course->save();

        $course= new Course();
        $course->name="ECUACIONES DIFERENCIALES";
        $course->acronym="MAT 103";
        $course->credit="5";
        $course->semester_id="3";
        $course->save();

        $course= new Course();
        $course->name="ANALISIS DE CIRCUITOS";
        $course->acronym="MAT 103";
        $course->credit="5";
        $course->semester_id="3";
        $course->save();

        // 4to semestre 

        

        $course= new Course();
        $course->name="ESTRUCTURAS DE DATOS I";
        $course->acronym="INF220 ";
        $course->credit="5";
        $course->semester_id="4";
        $course->save();

        
        $course= new Course();
        $course->name="PROGRAMACION ENSAMBLADOR";
        $course->acronym="INF221";
        $course->credit="5";
        $course->semester_id="4";
        $course->save();

       

        $course= new Course();
        $course->name="PROBABILIDADES Y ESTADIST.I";
        $course->acronym="MAT202 ";
        $course->credit="5";
        $course->semester_id="4";
        $course->save();

        
        $course= new Course();
        $course->name="ANALISIS DE CIRCUITOS ELECTRON.";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="4";
        $course->save();


        //5to semestre 

        $course= new Course();
        $course->name="SISTEMAS LOGICOS Y DIGITALES I.";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="5";
        $course->save();

        $course= new Course();
        $course->name="SENALES Y SISTEMAS";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="5";
        $course->save();

        $course= new Course();
        $course->name="BASES DE DATOS I";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="5";
        $course->save();

        $course= new Course();
        $course->name="PROBABILIDADES Y ESTADIST.II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="5";
        $course->save();

        $course= new Course();
        $course->name="ELECTRONICA APLICADA A REDES";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="5";
        $course->save();

        //6to semestre 

        $course= new Course();
        $course->name="SISTEMAS LOGICOS Y DIGITALES II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        $course= new Course();
        $course->name="BASES DE DATOS II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        $course= new Course();
        $course->name="SISTEMAS OPERATIVOS I";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        $course= new Course();
        $course->name="INVESTIGACION OPERATIVA I";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        $course= new Course();
        $course->name="INTERPRETRACION DE SISTEMAS Y SENALES";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        //7mo semestre

        $course= new Course();
        $course->name="SISTEMAS DE COMUNICACION I";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="7";
        $course->save();

        $course= new Course();
        $course->name="SISTEMAS OPERATIVOS II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="7";
        $course->save();

        $course= new Course();
        $course->name="INVESTIGACION OPERATIVA II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="7";
        $course->save();

        $course= new Course();
        $course->name="APLICACIONES CON MICROPROCESAD.";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="7";
        $course->save();

        //8vo semestre 
        
        $course= new Course();
        $course->name="PREPARACION Y EVALUAC.DE PROYECTOS.";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="8";
        $course->save();

        $course= new Course();
        $course->name="SISTEMAS DE COMUNICACION II.";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="8";
        $course->save();

        $course= new Course();
        $course->name="LEGISLAC.EN REDES Y COMUNICACIONES";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="8";
        $course->save();

        //9 no semestre

        $course= new Course();
        $course->name="TALLER DE GRADO I";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="9";
        $course->save();
        $course= new Course();
        $course->name="TECNOLOGIA WEB";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="9";
        $course->save();
        $course= new Course();
        $course->name="GESTION Y ADMINISTRACION DE REDES";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="9";
        $course->save();
        $course= new Course();
        $course->name="REDES INALAMBRIC.Y COMUNIC.MOVILES";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="9";
        $course->save();
        $course= new Course();
        $course->name="SEGURIDAD EN REDES Y TRANSMIS.DE DATOS";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="9";
        $course->save();
     

        //materias de ingenieria en sistemas 

        $course= new Course();
        $course->name="CONTABILIDAD";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="4";
        $course->save();
        
        $course= new Course();
        $course->name="PROGRAMACION ENSABMBLADOR";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="4 ";
        $course->save();

        $course= new Course();
        $course->name="PROBABILIDADES Y ESTADISTICAS";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="4";
        $course->save();

        //////////////////////////
        $course= new Course();
        $course->name="ORGANIZACION Y METODOS";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="5";
        $course->save();

        $course= new Course();
        $course->name="ECONOMIA PARA LA GESTION";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="5";
        $course->save();

        $course= new Course();
        $course->name="ESTRUCTURAS DE DATOS II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="5";
        $course->save();


        $course= new Course();
        $course->name="PROBABILIDADES Y ESTADIST.II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="5";
        $course->save();


        //////////////////////////////////

        $course= new Course();
        $course->name="FINANZAS PARA LA EMPRESA";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        $course= new Course();
        $course->name="BASES DE DATOS II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        $course= new Course();
        $course->name="SISTEMAS OPERATIVOS I";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        $course= new Course();
        $course->name="SISTEMAS DE INFORMACION I";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        $course= new Course();
        $course->name="INVESTIGACION OPERATIVA I";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="6";
        $course->save();

        ////////////////////7MO SEMESTRE

        $course= new Course();
        $course->name="SISTEMAS OPERATIVOS II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="7";
        $course->save();

        $course= new Course();
        $course->name="SISTEMAS PARA EL SOPORTE A LA TOMA DE DECISIONES";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="7";
        $course->save();

        $course= new Course();
        $course->name="INVESTIGACION OPERATIVA II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="7";
        $course->save();

        $course= new Course();
        $course->name="PREPARACION Y EVALUACION DE PROYECTOS";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="8";
        $course->save();

        $course= new Course();
        $course->name="INGENIERIA DE SOFTWARE I";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="8";
        $course->save();

        $course= new Course();
        $course->name="REDES II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="8";
        $course->save();

        $course= new Course();
        $course->name="SISTEMAS DE INFORMACION GEOGRAFICA";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="8";
        $course->save();

        $course= new Course();
        $course->name="AUDITORIA INFORMATICA";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="8";
        $course->save();

        //9VENO 

        $course= new Course();
        $course->name="INGENIERIA DE SOFTWARE II";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="9";
        $course->save();

        $course= new Course();
        $course->name="TECNOLOGIA WEB";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="9";
        $course->save();

        $course= new Course();
        $course->name="ARQUITECTURA DE SOFTWARE ";
        $course->acronym="RDS220";
        $course->credit="5";
        $course->semester_id="9";
        $course->save();

        
    }
}
