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
                'name' => 'Administrator',
                'username' => 'Administrator',
                // 'code' => '001/DIR/01/51',
                'email' => 'admin@mail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                // 'pc_id' => 1,
                // "position_id" => 1,
                // "printer_id" => 11,
                // "network_id" => 17,
                'role_id' => 1
            ],

            // Client USER
            [
                'name' => 'Irfan',
                'username' => 'irfan',
                'code' => '001/DIR/01/51',
                'email' => 'irfan@mail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'pc_id' => 1,
                "position_id" => 1,
                "printer_id" => 11,
                "network_id" => 17,
                'role_id' => 2
            ],
            [
                'name' => 'Nur',
                'username' => 'nur',
                'code' => '002/DIR/02/52',
                'email' => 'nur@mail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                "position_id" => 2,
                'pc_id' => 2, 
                "printer_id" => 12,
                "network_id" => 17,
                'role_id' => 2
            ],
            [
                'name' => 'Muhammad',
                'username' => 'Muhammad',
                'code' => '003/DIR/03/53',
                'email' => 'Muhammad@mail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                "position_id" => 2,
                'pc_id' => 3, 
                "printer_id" => 12,
                "network_id" => 17,
                'role_id' => 2
            ],

            // Technician USER
            [
                'name' => 'Yudi',
                'username' => 'Yudi',
                'code' => '011/ENG/01/61',
                'email' => 'yudi@mail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                "position_id" => 7,
                'pc_id' => 6, 
                "printer_id" => 12,
                "network_id" => 17,
                'role_id' => 3
            ],
            [
                'name' => 'Hadiandi',
                'username' => 'Hadiandi',
                'code' => '012/ENG/02/62',
                'email' => 'hadiandi@mail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                "position_id" => 7,
                'pc_id' => 6, 
                "printer_id"  => 12,
                "network_id" => 17,
                'role_id' => 3
            ],
        ];

        foreach($arr as $val) {
            $result = User::firstOrNew(
                ['name' => $val['name']]
            );

            $result->username = $val['username'];
            $result->code = $val['code'] ?? NULL;
            $result->email = $val['email'];
            $result->email_verified_at = $val['email_verified_at'];
            $result->password = $val['password'];
            $result->pc_id = $val['pc_id'] ?? NULL;
            $result->position_id = $val['position_id'] ?? NULL;
            $result->printer_id = $val['printer_id'] ?? NULL;
            $result->network_id = $val['network_id'] ?? NULL;
            // $result->role_id = $val['role_id'] ?? NULL;
            $result->role_id = $val['role_id'] ?? NULL;
            $result->save();
            
        }
    }
}
