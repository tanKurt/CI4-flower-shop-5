<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {
        $now = date('Y-m-d H:i:s');
        // if you want password that is hashed
        $password = password_hash('Password123!', PASSWORD_DEFAULT);
        // no need to add id since its auto increment
        $users = [
            [
                'first_name' => 'Kurt John Lester',
                'middle_name' => 'Oarga',
                'last_name' => 'Tan',
                'email' => 'tankurtjohnlester@gmail.com',
                'password_hash' => $password,
                'gender' => 'Male',
                'phone_number' => '09064577591',
                'address_line' => 'B1L9 Jezzilouville Subdivision',
                'city' => 'Lumban',
                'province' => 'Laguna',
                'postal_code' => '4014',
                'type' => 'admin',
                'account_status' => '1',
                'email_activated' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Kirkie',
                'middle_name' => 'Bakal',
                'last_name' => 'Endezy',
                'email' => 'ilovesinglemom@gmail.com',
                'password_hash' => $password,
                'gender' => 'Male',
                'phone_number' => '09064577591',
                'address_line' => 'Sample address',
                'city' => 'Sample city',
                'province' => 'Sample province',
                'postal_code' => '4023',
                'type' => 'client',
                'account_status' => '1',
                'email_activated' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
