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
            ['nombre' => 'ACTA 761-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20761-15.pdf?alt=media&token=57096ec7-1920-40ea-9a10-94331f32e431', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 762-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20762-15.pdf?alt=media&token=28a277b8-1890-4c5e-8205-2d7388d3ca5f', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 763-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20763-15.pdf?alt=media&token=420d05b6-3434-4415-8a41-87655497822b', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 764-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20764-15.pdf?alt=media&token=eb6a925d-cd63-449d-a17c-34369bead9c8', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 765-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20765-15.pdf?alt=media&token=8f72c545-e229-441b-944b-aa5331f31af0', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 766-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20766-15.pdf?alt=media&token=c4cb37e5-7e71-42a5-8b06-2ec49fbfb7c9', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 767-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20767-15.pdf?alt=media&token=2fd183ac-1c55-44b2-af73-b2f17b4ecbdc', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 768-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20768-15.pdf?alt=media&token=a8b9db49-38ca-464f-9f88-6599fa5c1568', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 769-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20769-15.pdf?alt=media&token=caa48d20-bf53-40bd-bf6f-ac89f6451cf1', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 770-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20770-15.pdf?alt=media&token=469d9955-5848-4081-83ac-0157ffd27539', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 771-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20771-15.pdf?alt=media&token=0e519594-319b-494a-807f-63f0a2e41b48', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 772-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20772-15.pdf?alt=media&token=b50ca98f-ac09-4845-906c-d861db24d324', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 773-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20773-15.pdf?alt=media&token=5b2dd121-2c5e-42f5-88a4-7f5c75007590', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 774-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20774-15.pdf?alt=media&token=5864c79a-b2ad-4161-a433-dd457df0ff54', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 775-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20775-15.pdf?alt=media&token=93498091-bd2c-41ae-a1e2-184b0337cabe', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 776-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20776-15.pdf?alt=media&token=5c934f15-0bb6-4620-8714-6c2a249b94a8', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 777-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20777-15.pdf?alt=media&token=2f919b57-28e4-4430-9d45-2b58a87e8ac0', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 778-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20778-15.pdf?alt=media&token=c22f325a-46da-49ae-8e7a-37afdddb3e89', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 779-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20779-15.pdf?alt=media&token=97e01dac-a087-4f43-bbe3-19a51f04104b', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 780-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20780-15.pdf?alt=media&token=25102e89-06d1-4f57-8c4f-f3274ededc26', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 781-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20781-15.pdf?alt=media&token=1e5b4906-c920-4313-96f3-20138fa8bad7', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 782-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20782-15.pdf?alt=media&token=7c2cfa57-9fe2-45d7-9ed0-b5765566bae4', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 783-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20783-15.pdf?alt=media&token=9ab6d832-98bc-47e6-be41-5d620d224090', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 784-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20784-15.pdf?alt=media&token=5d83dd2f-3048-48cf-96cf-089f714962e0', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 785-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20785-15.pdf?alt=media&token=1f35329a-c258-41ad-9ca0-da1409398389', 'tipo' => 'Acta'],
            ['nombre' => 'ACTA 786-15', 'url' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/actas-transparencia%2FACTA%20786-15.pdf?alt=media&token=5dd4e121-1334-4bc3-b69d-224cba0dd225', 'tipo' => 'Acta']
        ];

        foreach($actas as $elemento){
            Documentos::create([
                'nombre_documento' => $elemento['nombre'],
                'url_documento' => $elemento['url'],
                'fecha_documento' => now(),
                'tipo_documento' => $elemento['tipo'],
            ]);
        }
    }
}
