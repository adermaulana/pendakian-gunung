<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserBooking;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserBooking::create([
            'name' => 'Ade Rahmat Maulana',
            'email' => 'adermaulana@gmail.com',
            'address' => 'Jalanan',
            'number' => '085397425303',
            'username' => 'adera',
            'password' => bcrypt('12345')
        ]);
    }
}
