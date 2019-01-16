<?php

use Illuminate\Database\Seeder;
use App\GaleriaFotos;

class GaleriaFotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $fotos = [
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmhcjs007-e1b459642b.jpg?alt=media&token=7ad4abe3-d2a9-4da6-a98a-cc0f60e02d8b'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmhcjs009-d180b51708.jpg?alt=media&token=d3a8bf2d-fcf5-48a3-b75c-e55321dfaf45'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmhcjs010-d8375c99de.jpg?alt=media&token=44ca63cb-3e1f-4c34-ba7a-f86865367bcf'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmhcjs011-56fe1e03c9.jpg?alt=media&token=df5563a4-9d7a-4d11-a4ea-581c49e49cba'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmhcjs012-630013e8ba.jpg?alt=media&token=979df436-1351-4d20-b7fd-5e7704427f1e'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmhcjs013-7fbee48cf3.jpg?alt=media&token=6f2fe711-b84b-47e4-b1ce-2cee8ba40f00'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmhcjs5000-dec8a602c4.jpg?alt=media&token=16454e08-68b8-4fb1-b70b-1b902939a2f3'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmuseo-exterior-1-a643d7c22a.jpg?alt=media&token=eb8a8327-02ef-474b-8cbd-4dcafbd84083'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmuseo-exterior-2-4280d92f3e.jpg?alt=media&token=5c67192f-1920-47e1-8e00-0dcb44555903'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmuseo-exterior-3-e8e9940f48.jpg?alt=media&token=a5628607-3f89-40b6-94e0-a0cf56a4e83a'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmuseo-interior-2-c71e16ee06.jpg?alt=media&token=2f541bd3-2919-424d-a93e-8f9029d0ef7a'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmuseo-interior-3-e2f1a9a9a9.jpg?alt=media&token=eb352981-51ff-4313-9e7f-3124ed3762e7'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmuseo-interior-4-c695ad8a7e.jpg?alt=media&token=fdc01fed-6909-441e-9421-f3e8fb3eebc5'],
            ['foto' => 'https://firebasestorage.googleapis.com/v0/b/conectamhcjs2019.appspot.com/o/galeria%2Fmuseo-interior-5-202be216b5.jpg?alt=media&token=c4c690f5-1bcd-486c-b0d1-1d8c816c63fc']
        ];

        foreach($fotos as $elemento){
            foreach ($elemento as $key => $value) {
                GaleriaFotos::create([
                    'url_imagen' => $value,
                ]);
            }
        }

    }
        
}
