<?php

use Illuminate\Database\Seeder;
use App\models\train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $train = new train();
            $train->azienda = $faker->word(2);
            $train->data_partenza = $faker->date('Y_m_d');
            $train->stazione_partenza = $faker->country();
            $train->stazione_arrivo = $faker->country();
            $train->orario_partenza = $faker->time('H:i:s');
            $train->orario_arrivo = $faker->time('H:i:s');
            $train->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $train->numero_carrozze = $faker->randomNumber(1, false);
            $train->treno_in_orario = $faker->boolean();
            $train->treno_cancellato = $faker->boolean();
            $train->save();
        };
    }
}
