<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = new \App\Models\People([
            'name' => 'Jacek',
            'surname' => 'Kowalski',
            'phonenumber' => "123 456 789",
            'street' => "Mostowa",
            'city' => "Warszawa"
        ]);
        $people->save();

        $people = new \App\Models\People([
            'name' => 'Karol',
            'surname' => 'Milek',
            'phonenumber' => "123 654 987",
            'street' => "Krzywa",
            'city' => "Katowice"
        ]);
        $people->save();
    }
}
