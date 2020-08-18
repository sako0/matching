<?php

use Illuminate\Database\Seeder;
use App\Models\Meetings;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //一括削除
        Meetings::truncate();
        //登録
        $faker = Faker\Factory::create('ja_JP');
        for ($i = 1; $i < 10; $i++) {
            Meetings::create([
                'id' => $i,
                'user_id' => $i,
                'title' => $faker->text(10),
                'picture' => null,
                'language' => $faker->randomElement([0, 1, 2, 3, 4]),
                'area' =>  $faker->randomElement([0, 1, 2, 3, 4]),
                'overview' => $faker->realText(100),
                'update_timestamp' => $faker->dateTimeBetween('-1 days', '1 days')->format('Y-m-d H:i')
            ]);
        }
    }
}
