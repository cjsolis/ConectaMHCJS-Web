<?php

use Illuminate\Database\Seeder;
use App\Documentos;

class DocumentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actas = [
            ['nombre' => 'ACTA 761-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20761-15.pdf?alt=media&token=57096ec7-1920-40ea-9a10-94331f32e431', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 762-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20762-15.pdf?alt=media&token=28a277b8-1890-4c5e-8205-2d7388d3ca5f', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 763-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20763-15.pdf?alt=media&token=420d05b6-3434-4415-8a41-87655497822b', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 764-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20764-15.pdf?alt=media&token=eb6a925d-cd63-449d-a17c-34369bead9c8', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 765-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20765-15.pdf?alt=media&token=8f72c545-e229-441b-944b-aa5331f31af0', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 766-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20766-15.pdf?alt=media&token=c4cb37e5-7e71-42a5-8b06-2ec49fbfb7c9', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 767-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20767-15.pdf?alt=media&token=2fd183ac-1c55-44b2-af73-b2f17b4ecbdc', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 768-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20768-15.pdf?alt=media&token=a8b9db49-38ca-464f-9f88-6599fa5c1568', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 769-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20769-15.pdf?alt=media&token=caa48d20-bf53-40bd-bf6f-ac89f6451cf1', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 770-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20770-15.pdf?alt=media&token=469d9955-5848-4081-83ac-0157ffd27539', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 771-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20771-15.pdf?alt=media&token=0e519594-319b-494a-807f-63f0a2e41b48', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 772-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20772-15.pdf?alt=media&token=b50ca98f-ac09-4845-906c-d861db24d324', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 773-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20773-15.pdf?alt=media&token=5b2dd121-2c5e-42f5-88a4-7f5c75007590', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 774-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20774-15.pdf?alt=media&token=5864c79a-b2ad-4161-a433-dd457df0ff54', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 775-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20775-15.pdf?alt=media&token=93498091-bd2c-41ae-a1e2-184b0337cabe', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 776-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20776-15.pdf?alt=media&token=5c934f15-0bb6-4620-8714-6c2a249b94a8', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 777-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20777-15.pdf?alt=media&token=2f919b57-28e4-4430-9d45-2b58a87e8ac0', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 778-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20778-15.pdf?alt=media&token=c22f325a-46da-49ae-8e7a-37afdddb3e89', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 779-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20779-15.pdf?alt=media&token=97e01dac-a087-4f43-bbe3-19a51f04104b', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 780-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20780-15.pdf?alt=media&token=25102e89-06d1-4f57-8c4f-f3274ededc26', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 781-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20781-15.pdf?alt=media&token=1e5b4906-c920-4313-96f3-20138fa8bad7', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 782-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20782-15.pdf?alt=media&token=7c2cfa57-9fe2-45d7-9ed0-b5765566bae4', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 783-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20783-15.pdf?alt=media&token=9ab6d832-98bc-47e6-be41-5d620d224090', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 784-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20784-15.pdf?alt=media&token=5d83dd2f-3048-48cf-96cf-089f714962e0', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 785-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20785-15.pdf?alt=media&token=1f35329a-c258-41ad-9ca0-da1409398389', 'tipo' => 'AC'],
            ['nombre' => 'ACTA 786-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20786-15.pdf?alt=media&token=5dd4e121-1334-4bc3-b69d-224cba0dd225', 'tipo' => 'AC']
        ];

        $uso_espacios = [
            [ 'nombre' => 'Cuenta bancaria Banco Nacional colones MHCJS', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FCuenta-bancaria-Banco-Nacio.jpg?alt=media&token=92f04ac6-7fd5-49aa-a4c4-09a678e47ccf', 'tipo' => 'UE'],
            [ 'nombre' => 'Reglamento de préstamo y uso de espacios MHCJS', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FReglamento%20para%20pr%C3%A9stamo%20y%20uso%20de%20espacios%20MHCJS.pdf?alt=media&token=84c86950-f429-49d6-ab12-dd13fa8dfcee', 'tipo' => 'UE'],
            [ 'nombre' => 'Requisito de uso de Espacios', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FRequisitos%20de%20uso%20de%20espacios.pdf?alt=media&token=b954d0f2-b9fc-4a2e-b0e8-8aaaec232444', 'tipo' => 'UE'],
            [ 'nombre' => 'Canon de mantenimiento MHCJS 2015', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FCanon%20de%20mantenimiento%20MHCJS%202015.pdf?alt=media&token=ff554927-987c-46c1-bc90-acf63a64a2e7', 'tipo' => 'UE'],
            [ 'nombre' => 'Ficha técnica del Auditorio Juan Rafael Mora Porras MHCJS', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FFicha%20Tecnicas%20Auditorio%20JRMP-2015.doc?alt=media&token=6f30970d-29ca-4c5a-829e-aeeaad5a6739', 'tipo' => 'UE'],
            [ 'nombre' => 'Ficha técnica Salas Educativas', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FFicha%20Tecnica%20Salas%20Educativas-2015.doc?alt=media&token=61890b1b-0095-468f-9ca3-c8248d93ed91', 'tipo' => 'UE'],
            [ 'nombre' => 'Equipo y mobiliario del Auditorio Juan Rafael Mora Porras', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FEquipo%20y%20mobiliario%20del%20Auditorio%20Juan%20Rafael%20Mora%20Porras.pdf?alt=media&token=968e6d28-56c0-4179-ad8e-ac947d4fe11d', 'tipo' => 'UE'],
            [ 'nombre' => 'Mobiliario de Salas educativas', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FMobiliario%20de%20salas%20educativas.pdf?alt=media&token=152f4336-c12b-471b-83ae-a304b4be9db8', 'tipo' => 'UE'],
            [ 'nombre' => 'Carta de Compromiso', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FCarta%20de%20Compromiso.doc?alt=media&token=6bbbd38f-a0ee-479b-8559-875aba86853e', 'tipo' => 'UE'],
            [ 'nombre' => 'Lista de ingreso de materiales', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FLista%20de%20ingreso%20de%20materiales.doc?alt=media&token=95bb4496-6e08-428e-aea9-a0ff1e1720d6', 'tipo' => 'UE'],
            [ 'nombre' => 'Lista de ingreso de personas', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tr%C3%A1mites-usoespacios%2FLista%20de%20ingreso%20de%20personas.doc?alt=media&token=22c8fd2f-573f-421d-8217-e3f4db79c804', 'tipo' => 'UE']
        ];

        $tramites_administrativos = [
            ['nombre' => 'Informe de Ejecución del Presupuesto - Evaluación del Plan Operativo Institucional 2015', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FModificacion-01-2016.xlsx?alt=media&token=70cef8c1-5d9a-4bd6-8d98-3974678f7508', 'fecha' => '2015-01-01', 'tipo' => 'TA'],
            ['nombre' => 'Plan Estratégico 2016-2020', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FPLAN-ESTRATEGICO-2016-2020.pdf?alt=media&token=99e0ce3a-2360-40e6-8be9-69bfe660b8a4', 'fecha' => '2016-01-01', 'tipo' => 'TA'],
            ['nombre' => 'Plan de compras 2016', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FPlan-de-compras-2016.xlsx?alt=media&token=7616f3d4-406a-4225-80cb-e6443c3535b7', 'fecha' => '2016-01-01', 'tipo' => 'TA'],
            ['nombre' => 'Modificación al plan de compras 01-2016', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FModificacion-01-2016.xlsx?alt=media&token=70cef8c1-5d9a-4bd6-8d98-3974678f7508', 'fecha' => '2016-01-01', 'tipo' => 'TA'],
            ['nombre' => 'Modificación al plan de compras 02-2016', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FModificacion-02-2016.xlsx?alt=media&token=b712911e-a065-4ae6-8529-2087cde650c1', 'fecha' => '2016-01-01', 'tipo' => 'TA'],
            ['nombre' => 'Presupuesto Ordinario - Plan Operativo Institucional 2017', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/tramites-administrativos%2FPresupuesto-POI-2017.pdf?alt=media&token=3b1856b7-56e9-4645-b73c-b4149062a287', 'fecha' => '2017-01-01', 'tipo' => 'TA']
        ];

        $materiales_educativos = [
            ['nombre' => 'Consejos prácticos para la preparación y montaje de exhibiciones didácticas', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/servicios%2FConsejos%20pr%C3%A1cticos%20para%20la%20preparaci%C3%B3n%20y%20montaje%20de%20exhibiciones%20did%C3%A1cticas.pdf?alt=media&token=f7d1452e-0b16-4191-9efa-362f8cb64059', 'tipo' => 'ME'],
            ['nombre' => 'Un camino a la aproximación de las Ciencias Sociales', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/servicios%2FUn%20camino%20a%20la%20aproximaci%C3%B3n%20de%20las%20Ciencias%20Sociales.pdf?alt=media&token=d0eaed58-3bba-4739-bad5-768eb034b84e', 'tipo' => 'ME'],
            ['nombre' => 'Unidad Didáctica Juan Santamaría Heroe de mi Patria', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/servicios%2FUnidad%20Did%C3%A1ctica%20Juan%20Santamar%C3%ADa%20Heroe%20de%20mi%20Patria.pdf?alt=media&token=a11a0267-1eca-4d3b-833e-ad54a0fee36d', 'tipo' => 'ME'],
            ['nombre' => 'Desplegable Batalla de Santa Rosa', 'url' => 'http://www.museojuansantamaria.go.cr/materiales-de-educacion/64-desplegable-batalla-de-santa-rosa.html', 'tipo' => 'ME'],
            ['nombre' => 'Desplegable Las tres Batallas de Rivas', 'url' => 'http://www.museojuansantamaria.go.cr/materiales-de-educacion/66-desplegable-las-tres-batallas-de-rivas.html', 'tipo' => 'ME'],
            ['nombre' => 'Desplegable Juan Rafael Mora Porras', 'url' => 'http://www.museojuansantamaria.go.cr/materiales-de-educacion/65-desplegable-juan-rafael-mora-porras.html', 'tipo' => 'ME'],
            ['nombre' => 'Desplegable Francisca Carrasco Jiménez', 'url' => 'http://www.museojuansantamaria.go.cr/materiales-de-educacion/60-desplegable-francisca-carrasco-jimenez.html', 'tipo' => 'ME']
        ];

        foreach($actas as $elemento){
            Documentos::create([
                'nombre_documento' => $elemento['nombre'],
                'url_documento' => $elemento['url'],
                'fecha_documento' => now(),
                'tipo_documento' => $elemento['tipo'],
            ]);
        }

        foreach($uso_espacios as $elemento){
            Documentos::create([
                'nombre_documento' => $elemento['nombre'],
                'url_documento' => $elemento['url'],
                'tipo_documento' => $elemento['tipo'],
            ]);
        }

        foreach($tramites_administrativos as $elemento){
            Documentos::create([
                'nombre_documento' => $elemento['nombre'],
                'url_documento' => $elemento['url'],
                'fecha_documento' => date_create($elemento['fecha']),
                'tipo_documento' => $elemento['tipo'],
            ]);
        }

        foreach($materiales_educativos as $elemento){
            Documentos::create([
                'nombre_documento' => $elemento['nombre'],
                'url_documento' => $elemento['url'],
                'tipo_documento' => $elemento['tipo'],
            ]);
        }
    }
}
