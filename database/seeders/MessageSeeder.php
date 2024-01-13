<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message = [
            [
                'sender' => 'Aurum',
                'content' => 'Selamat Hanin & Dhila. Ga nyangka akhirnya kalian menikah. Semoga menjadi keluarga yang samawa dan dilancarkan segala urusannya. Aamiin.',
            ],
            [
                'sender' => 'Rhea',
                'content' => 'Omo omo omo, kopel paporip aquhh. Semoga berkah yaa kaliannn.'
            ]
        ];
        Message::create($message);
    }
}
