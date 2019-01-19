<?php

use Illuminate\Database\Seeder;
use App\ContenidoPagina;

class ContenidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Visita Guiada
        ContenidoPagina::create([
            'texto_contenido' => '<p><ol><li >La visita guiada es el recorrido guiado por las salas de exhibición del Museo.</li><li>A petición del organizador de la visita, se puede incluir: El organizador de la gira elegirá el tema de la Campaña Nacional que más le interese profundizar: personajes, aspecto económico, aspecto militar, aspecto social o bien alguna fase de la gesta heroica en particular.</li><ul style="margin-left:70px;"><li>Recorrido por salas de historia de la Campaña Nacional.</li><li>Una charla sobre un tema de historia de la Campaña Nacional.</li><li>Proyección de video infantil “Juan el Héroe” (especialmente recomendado para niños desde prekinder hasta tercer grado).</li><li>Un recorrido por las instalaciones del Museo (Antiguo Cuartel de Armas y Antigua Cárcel).</li><li>Un recorrido por las exhibiciones temporales que se encuentren en ese momento. </li></ul><li>El tiempo del recorrido dependerá del interés en la profundización del tema así como de la edad de los visitantes.</li><li>El cupo máximo para la charla y proyección es de 181 personas.</li><li>El cupo máximo para el recorrido por las salas y edificio es de 30 personas. Si el grupo es más grande se subdividirá en  más subgrupos y el tiempo total de la visita se extenderá.</li><li>Se recomienda que los grupos no traigan bolsos o salveques grandes para realizar el recorrido por las salas. </li></ol></p>',
            'tipo_contenido' => 'VG',
        ]);

        // Ruta Heroes
        ContenidoPagina::create([
            'texto_contenido' => '<p>El proyecto Ruta de los Héroes es impulsado por el Museo Histórico Cultural Juan Santamaría, con la finalidad de despertar la conciencia histórica de las comunidades existentes en el espacio geográfico transitado por el ejército expedicionario costarricense durante la guerra contra los filibusteros en los años 1856-1857. Las actividades son organizadas e impulsadas por el Museo según sea el grado de interés de las distintas comunidades. La iniciativa fue aprobada por el Consejo Superior de Educación, en la sesión ordinaria N° 2-05 del 18 de enero del 2005. Ver acuerdo.<br /><b>Hitos Históricos: una responsabilidad compartida</b><br /><br />La construcción de Hitos Históricos en comunidades que forman parte de la Ruta de los Héroes se realiza con apoyo del Museo.<br />Aporte del Museo:<ul><li>Planos para la construcción.</li><li>  Placa de referencia histórica.</li><li>Placa de crédito del Museo.</li><li>Publicaciones alusivas.</li><li>Invitaciones y material divulgativo.</li></ul>Comunidad:<ul><li>Asignación de espacio.</li><li>Construcción del hito.</li><li>Placas de crédito.</li><li>Organización del acto cívico.</li><li>Mantenimiento del espacio.</li></ul>Comunidades que cuentan con Hitos Históricos:<ul><li>Muelle, Sarapiquí.</li><li>Sardinal, Sarapiquí.</li><li>La Trinidad, Sarapiquí.</li><li>Muelle, San Carlos.</li><li>Boca San Carlos, desembocadura en el río San Juan.</li><li>MPuntarenas, Parque Victoria.</li><li>Bebedero, Cañas-Guanacaste.</li><li>Ciruelas, Alajuela .</li></ul><ul><li>Planos para la construcción.</li><li>  Placa de referencia histórica.</li><li>Placa de crédito del Museo.</li><li>Publicaciones alusivas.</li><li>Invitaciones y material divulgativo.</li></ul><ul><li>Planos para la construcción.</li><li>  Placa de referencia histórica.</li><li>Placa de crédito del Museo.</li><li>Publicaciones alusivas.</li><li>Invitaciones y material divulgativo.</li></ul></p>',
            'tipo_contenido' => 'RE',
        ]);

        // Actas Educativas
        ContenidoPagina::create([
            'texto_contenido' => '<p>Los Servicios Educativos facilitan, promueven y organizan de manera efectiva el acercamiento de distintos públicos al Museo, según sus intereses en el ámbito educativo y de investigación, impulsando una función vital del Museo en su vocación educativa. En este sentido, impulsan una comprensión y comunicación eficiente y efectiva entre el visitante y el Museo por medio de visitas guiadas, actividades lúdicas, talleres, charlas, materiales educativos, etc. Por medio de este programa se brinda atención a los visitantes (docentes, estudiantes y público en general) procedentes de distintas partes del país.</p><br><p>Los servicios educativos incluyen visitas guiadas, justificación Ruta de los Héroes, talleres y charlas y materiales educativos.</p>',
            'tipo_contenido' => 'AE',
        ]);

        // Uso de Espacio
        ContenidoPagina::create([
            'texto_contenido' => '<p>El Museo cuenta con espacios educativos y culturales para el desarrollo de actividades académicas y artísticas, tanto por parte de la comunidad de Alajuela, como por todos los costarricenses. Estos espacios tienen un costo de canon de mantenimiento que debe consultarse en la documentación adjunta. Los usuarios de estos espacios deben tener en cuenta que los edificios sede del Museo: Antiguo Cuartel de Armas y Antigua Cárcel de Alajuela,  son patrimonio arquitectónico nacional, por lo cual, cualquier actividad educativa y cultural debe estar supeditada al cuido del espacio. Para realizar una solicitud de uso de espacios llene el formulario.</p>',
            'tipo_contenido' => 'UE',
        ]);

        // Voluntariado
        ContenidoPagina::create([
            'texto_contenido' => '<p>El Museo Histórico Cultural Juan Santamaría le invita a formar parte de su Programa de Voluntariado. Este programa admite voluntarios de todas las especialidades, incluyendo estudiantes con Trabajo Comunal Universitario, Práctica Profesional, Horas Beca, Extranjeros y Voluntariado Independiente.<br><br>Cuando vengan de una institución educativa oficial los estudiantes deberán presentar una carta de solicitud de aceptación de Trabajo Comunal, Práctica Profesional u Horas Beca con todos los datos del estudiante y una persona de contacto en la institución (nombre y teléfono) en caso de que se presentara algún inconveniente. Además deberá presentarse la hoja de control de horas para completar las horas laboradas cuando corresponda.<br><br>El tipo de trabajo a realizar dependerá de la especialización del estudiante (universitario), así como de la unidad donde labore dentro del Museo. En todo caso, se promoverá la afinidad con los conocimientos con los que cuenta el voluntario así como lo que se considere conveniente para la institución.<br />Realice su solicitud de voluntariado:</p>',
            'tipo_contenido' => 'Vol',
        ]);

        // Publicaciones
        ContenidoPagina::create([
            'texto_contenido' => '<p>El Museo Histórico Cultural Juan Santamaría ha realizado una amplia labor editorial, con la publicación de gran cantidad de obras relativas a temas como la Campaña Nacional, historia de Costa Rica, historia de Alajuela, entre otras. Con esta labor, el Museo impulsa la difusión de nuevas investigaciones de gran calidad para ampliar el conocimiento sobre los temas mencionados. Autores de investigaciones tiene la posibilidad de proponer a la Comisión Editorial del Museo sus obras, para ser evaluadas y editadas por esta institución.</p>',
            'tipo_contenido' => 'Pub',
        ]);

    }
}
