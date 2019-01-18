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
    }
}
