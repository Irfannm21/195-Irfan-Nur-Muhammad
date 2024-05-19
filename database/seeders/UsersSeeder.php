<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                'name' => 'Irfan',
                'last_name' => 'Client',
                'email' => 'irfan@mail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'pc_id' => 1,
                "printer_id" => 11,
                "network_id" => 17,
            ],
            [
                'name' => 'Nur Muhannad',
                'last_name' => 'Tehnician',
                'email' => 'nur@mail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'pc_id' => 2, 
                "printer_id" => 12,
                "network_id" => 17,
            ],
            [
                'name' => 'Yudi Hadiandi',
                'last_name' => 'Technician Lead',
                'email' => 'yudi@mail.com',
                'email_verified_at' => now(),
                'password'   => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'pc_id'      => 3, 
                "printer_id" => 13,
                "network_id" => 18,
            ],
        ];

        foreach($arr as $val) {
            $result = User::firstOrNew(
                ['name' => $val['name']]
            );

            $result->last_name = $val['last_name'];
            $result->email = $val['email'];
            $result->email_verified_at = $val['email_verified_at'];
            $result->password = $val['password'];
            $result->pc_id = $val['pc_id'];
            $result->printer_id = $val['printer_id'];
            $result->network_id = $val['network_id'];
            $result->save();
            
        }
    }
}