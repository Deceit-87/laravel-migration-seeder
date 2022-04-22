<?php

use App\Train;
use Illuminate\Database\Seeder;
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
        for($i=0;$i<1000;$i++){
        $train = new Train();

        $train->azienda = $faker->company();
        $train->stazione_partenza = $faker->city();
        $train->stazione_arrivo = $faker->city();
        $train->ora_partenza = $faker->time('m:i');
        $train->ora_arrivo = $faker->time('m:i');
        $train->codice_treno = $faker->bothify('????-####');
        $train->carrozze = $faker->numberBetween(5,15);
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean();

        $train->save();
        }
    }
}
