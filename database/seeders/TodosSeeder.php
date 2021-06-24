<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $useradmin=User::create([
        'name' => 'admin ariel',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin'),
        'fullacces' => 'si',
        //'codigo' => 'adm1',
        ]);

        $user1=User::create([
            'name' => 'usuario fernando',
            'email' => 'fernando@gmail.com',
            'password' => Hash::make('fernando'),
            'fullacces' => 'no',
            //'codigo' => 'casa1',
        ]);
    }
}